<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.invoice-box {
    background: #fff;
    max-width: 800px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.company-details, .bill-to, .invoice-details, .total, .footer {
    margin-bottom: 20px;
}

.invoice-details {
    text-align: right;
}

.invoice-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.invoice-table th, .invoice-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.invoice-table th {
    background-color: #f4f4f4;
}

.total {
    text-align: right;
}

.footer {
    text-align: center;
    font-size: 0.9em;
    color: #555;
}

    </style>
</head>
<body>
    <div class="invoice-box">
        <h1>Invoice</h1>
        <div class="company-details">
            <p><strong>Company Name</strong></p>
            <p>MakanBang</p>
            <p>Jember. Jl Sumatra Gang 5</p>
            <p>(123) 456-7890</p>
        </div>
        <hr>
        <div class="bill-to">
            <p><strong>Bill To:</strong></p>
            <p>{{$nama}}</p>
        </div>
        <div class="invoice-details">
            <p><strong>Invoice #:</strong>{{$invoice}}</p>
            <p><strong>Date:</strong> {{$tanggal}}</p>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($order as $item)
                <tr>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->total_harga}}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
        <div class="total">
            <p><strong>Total:</strong> Rp. {{ number_format($allTotal, 0, ',', '.') }}</p>
        </div>
        <hr>
        <div class="footer">
            <p>Terimakasih telah berbelanja</p>
            <p>Jika kamu mempunyai kritik atau saran, anda bisa menghubungi (123) 456-7890 </p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
