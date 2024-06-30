<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<link href="{{ asset('assets/shop/css/tiny-slider.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/shop/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/shop/css/style.css') }}" rel="stylesheet">

        <style>
            .btn-xs {
                padding: 0.25rem 0.5rem;
                font-size: 0.75rem;
                line-height: 1.5;
                border-radius: 0.2rem;
            }
        </style>
		<title>MakanBang.</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="{{route('penjualan.index')}}">MakanBang<span>.</span></a>
			</div>

		</nav>
		<!-- End Header/Navigation -->


        <div class="untree_co-section product-section before-footer-section">
            <div class="container">
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5" data-aos="fade-up" data-aos-duration="500">
                        <div class="product-item">
                            <img src="{{ asset('storage/'.$item->foto) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{$item->nama}}</h3>
                            <strong class="product-price" data-price="{{$item->harga}}">Rp.{{$item->harga}}</strong>
                            <span class="icon-cross">
                                <img src="{{ asset('assets/shop/images/cross.svg') }}" class="img-fluid add-to-cart" data-id="{{$item->id}}" data-name="{{$item->nama}}" data-price="{{$item->harga}}">
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="{{asset('assets/shop/images/bowl-3.png')}}" alt="Image" class="img-fluid">
				</div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="subscription-form p-4 bg-light rounded">
                                <h3 class="d-flex align-items-center mb-3">
                                    <span class="me-1">
                                        <img src="{{ asset('assets/shop/images/envelope-outline.svg') }}" alt="Envelope Icon" class="img-fluid" width="24" height="24">
                                    </span>
                                    <span>Pesanan</span>
                                </h3>
                                <input type="text" id="pemesan" placeholder="Nama Pemesan" class="form-control mb-3">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cart-table-body">
                                            <!-- Data akan ditambahkan di sini -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="4" class="text-right">Total</th>
                                                <th id="cart-total">Rp. 0</th>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right">
                                                    <button id="bayar" class="btn btn-primary btn-xs float-end">Bayar</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <form id="order-form" action="{{route('penjualan.store')}}" method="POST">
                    @csrf
                    <div id="order-inputs">
                    </div>
                </form>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->
		<script src="{{ asset('assets/shop/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/shop/js/tiny-slider.js') }}"></script>
		<script src="{{ asset('assets/shop/js/custom.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi array untuk menyimpan produk yang dipilih
    let selectedProducts = [];

    // Fungsi untuk menampilkan produk yang dipilih di tabel dan form
    function displaySelectedProduct(product) {
        // Menambahkan baris baru ke dalam tabel
        let newRow = document.getElementById('cart-table-body').insertRow();
        newRow.innerHTML = `
            <td>${product.nama}</td>
            <td>Rp.${product.harga}</td>
            <td><input type="number" class="form-control jumlah" data-id="${product.id}" value="1" min="1"></td>
            <td>Rp.${product.harga}</td>
            <td><button type="button" class="btn btn-danger btn-sm remove-product" data-id="${product.id}">Hapus</button></td>
        `;

        // Menambahkan produk ke dalam array selectedProducts
        selectedProducts.push({
            id: product.id,
            nama: product.nama,
            harga: product.harga,
            jumlah: 1 // Default jumlah adalah 1
        });

        // Menghitung total harga
        calculateTotal();
    }

    // Fungsi untuk menghapus produk dari tabel dan array
    function removeSelectedProduct(productId) {
        // Menghapus baris dari tabel
        let rowIndex = selectedProducts.findIndex(product => product.id === productId);
        document.getElementById('cart-table-body').deleteRow(rowIndex);

        // Menghapus produk dari array selectedProducts
        selectedProducts.splice(rowIndex, 1);

        // Menghitung ulang total harga
        calculateTotal();
    }

    // Fungsi untuk menghitung total harga
    function calculateTotal() {
        let total = selectedProducts.reduce((acc, curr) => acc + (curr.harga * curr.jumlah), 0);
        document.getElementById('cart-total').textContent = `Rp.${total}`;
    }

    // Event listener untuk menambahkan produk saat tombol "Add to Cart" diklik
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            let productId = this.getAttribute('data-id');
            let productName = this.getAttribute('data-name');
            let productPrice = this.getAttribute('data-price');

            // Mengecek apakah produk sudah ada di dalam array selectedProducts
            if (!selectedProducts.find(product => product.id === productId)) {
                // Menampilkan produk di tabel dan form
                displaySelectedProduct({
                    id: productId,
                    nama: productName,
                    harga: productPrice
                });
            } else {
                alert('Produk sudah ditambahkan ke keranjang.');
            }
        });
    });

    // Event listener untuk menghapus produk saat tombol "Remove" diklik
    document.getElementById('cart-table-body').addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-product')) {
            let productId = event.target.getAttribute('data-id');
            removeSelectedProduct(productId);
        }
    });

    // Event listener untuk mengubah jumlah produk
    document.getElementById('cart-table-body').addEventListener('input', function (event) {
        if (event.target.classList.contains('jumlah')) {
            let productId = event.target.getAttribute('data-id');
            let productIndex = selectedProducts.findIndex(product => product.id === productId);
            let newQuantity = parseInt(event.target.value);

            // Memperbarui jumlah produk di dalam array selectedProducts
            selectedProducts[productIndex].jumlah = newQuantity;

            // Memperbarui total harga
            let totalPriceCell = event.target.parentNode.nextElementSibling;
            totalPriceCell.textContent = `Rp.${selectedProducts[productIndex].harga * newQuantity}`;

            calculateTotal();
        }
    });

    // Event listener untuk tombol "Bayar"
    document.getElementById('bayar').addEventListener('click', function (event) {
        event.preventDefault();

        let pemesan = document.getElementById('pemesan').value;

        // Mengecek apakah ada produk yang dipilih
        if (selectedProducts.length === 0) {
            alert('Belum ada produk yang dipilih untuk dibayar.');
            return;
        }

        // Mengosongkan tabel pembayaran
        document.getElementById('cart-table-body').innerHTML = '';

        // Menyiapkan form pembayaran
        let orderForm = document.getElementById('order-form');

        // Menambahkan input untuk pemesan
        let inputPemesan = document.createElement('input');
        inputPemesan.type = 'hidden';
        inputPemesan.name = 'nama';
        inputPemesan.value = pemesan;
        orderForm.appendChild(inputPemesan);

        // Menambahkan input untuk setiap produk yang dipilih
        selectedProducts.forEach((product, index) => {
            let inputProductId = document.createElement('input');
            inputProductId.type = 'hidden';
            inputProductId.name = `product_id[${index}]`;
            inputProductId.value = product.id;
            orderForm.appendChild(inputProductId);

            let inputJumlah = document.createElement('input');
            inputJumlah.type = 'hidden';
            inputJumlah.name = `jumlah[${index}]`;
            inputJumlah.value = product.jumlah;
            orderForm.appendChild(inputJumlah);

            let inputTotalHarga = document.createElement('input');
            inputTotalHarga.type = 'hidden';
            inputTotalHarga.name = `total_harga`;
            inputTotalHarga.value = product.harga * product.jumlah;
            orderForm.appendChild(inputTotalHarga);
        });

        // Mengirimkan form
        orderForm.submit();

        // Mengosongkan array selectedProducts
        selectedProducts = [];

        // Mengosongkan total harga
        document.getElementById('cart-total').textContent = 'Rp. 0';
    });
});
    </script>
	</body>

</html>


