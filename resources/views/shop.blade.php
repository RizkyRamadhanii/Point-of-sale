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
		<title>Ujikom - POS</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">MakanBang<span>.</span></a>
			</div>

		</nav>
		<!-- End Header/Navigation -->

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

					<!-- Start Column  -->
					<div class="col-12 col-md-4 col-lg-3 mb-5"  data-aos="fade-up"
                    data-aos-duration="500">
						<a class="product-item" href="#">
							<img src="{{ asset('assets/shop/images/bowl-2.png') }}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{ asset('assets/shop/images/cross.svg') }}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column  -->


		      	</div>
		    </div>
		</div>


		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="{{asset('assets/shop/images/bowl-3.png')}}" alt="Image" class="img-fluid">
				</div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="subscription-form p-4 bg-light rounded">
                            <h3 class="d-flex align-items-center mb-3">
                                <span class="me-1">
                                    <img src="{{asset('assets/shop/images/envelope-outline.svg')}}" alt="Envelope Icon" class="img-fluid" width="24" height="24">
                                </span>
                                <span>Pesanan</span>
                            </h3>

                            <form action="#" class="mb-1">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" id="productName" class="form-control" placeholder="Product Name" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Product Price</label>
                                    <input type="text" id="productPrice" class="form-control" placeholder="Product Price" readonly>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-paper-plane"></span> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="subscription-form p-4 bg-light rounded">
                            <h3 class="d-flex align-items-center mb-3">
                                <span class="me-1">
                                    <img src="{{asset('assets/shop/images/envelope-outline.svg')}}" alt="Envelope Icon" class="img-fluid" width="24" height="24">
                                </span>
                                <span>Pesanan</span>
                            </h3>

                            <form action="#" class="mb-1">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" id="productName" class="form-control" placeholder="Product Name" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Product Price</label>
                                    <input type="text" id="productPrice" class="form-control" placeholder="Product Price" readonly>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-paper-plane"></span> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
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
            document.addEventListener('DOMContentLoaded', function() {
                const productItems = document.querySelectorAll('.product-item');
                productItems.forEach(item => {
                    const crossIcon = item.querySelector('.icon-cross');
                    crossIcon.addEventListener('click', function(event) {
                        event.preventDefault();
                        const productName = item.querySelector('.product-title').textContent;
                        const productPrice = item.querySelector('.product-price').textContent;

                        document.getElementById('productName').value = productName;
                        document.getElementById('productPrice').value = productPrice;
                    });
                });
            });
        </script>
	</body>

</html>


