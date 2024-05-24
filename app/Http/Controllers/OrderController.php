<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('client.order', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ambil semua data yang dikirimkan melalui formulir
        $requestData = $request->all();
        $invoice = 'INV-' . time(); // Generate invoice dengan waktu saat ini

        // Loop melalui array product_id untuk mendapatkan data yang sesuai
        foreach ($requestData['product_id'] as $index => $productId) {
            // Dapatkan jumlah dan total harga dari array yang sesuai dengan index yang sama
            $jumlah = $requestData['jumlah'][$index];
            $totalHarga = $requestData['total_harga'][$index];

            // Simpan data pesanan ke dalam database
            Order::create([
                'invoice' => $invoice, // Gunakan invoice yang di-generate di luar loop
                'tanggal' => date('Y-m-d'), // Tanggal saat ini
                'nama' => $requestData['nama'], // Nama pelanggan
                'product_id' => $productId, // ID produk
                'jumlah' => $jumlah, // Jumlah produk
                'total_harga' => $totalHarga // Total harga
            ]);
        }

        // Redirect ke halaman bill dengan invoice
        return redirect()->route('client.bill', ['invoice' => $invoice]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function bill($invoice)
    {
        // Ambil data pesanan berdasarkan invoice dan gabungkan dengan tabel products
        $order = Order::where('invoice', $invoice)
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.*', 'products.nama as product_name', 'products.harga')
            ->get();

        // Ambil satu record untuk mendapatkan invoice dan tanggal
        $firstOrder = $order->first();
        $invoice = $firstOrder->invoice;
        $tanggal = $firstOrder->tanggal;
        $nama = $firstOrder->nama;

        // Hitung total harga
        $allTotal = $order->sum('total_harga');

        // Tampilkan halaman bill.blade.php dan passing data pesanan serta total harga
        return view('client.bill', compact('order', 'allTotal', 'invoice', 'tanggal', 'nama'));
    }


}
