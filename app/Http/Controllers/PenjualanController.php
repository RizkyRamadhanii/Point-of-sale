<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Models\DetailPenjualan;
use App\Models\Product;

class PenjualanController extends Controller
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
        $penjualan = Penjualan::create([
            'invoice' => 'INV-' . rand(9999, 99999),
            'tanggal' => date('Y-m-d'),
            'nama' => $request->nama,
        ]);

        // Ensure product_id and jumlah are arrays and have the same number of elements
        if (is_array($request->product_id) && is_array($request->jumlah) && count($request->product_id) == count($request->jumlah)) {
            $productData = [];
            for ($i = 0; $i < count($request->product_id); $i++) {
                $productData[] = [
                    'product_id' => $request->product_id[$i],
                    'jumlah' => $request->jumlah[$i],
                ];
            }

            $penjualanDetail = DetailPenjualan::create([
                'invoice_id' => $penjualan->id,
                'product_id' => json_encode(array_column($productData, 'product_id')),
                'jumlah' => json_encode(array_column($productData, 'jumlah')),
                'total_harga' => $request->total_harga,
                'dibayar' => '10000',
                'kembalian' => '20000',
            ]);
        } else {
            return back()->withErrors(['message' => 'Product IDs and quantities must match']);
        }
        return redirect()->route('client.bill', ['invoice' => $penjualan->invoice]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        $detailPenjualan = DetailPenjualan::where('invoice_id', $penjualan->id)->first();
        $productNames = json_decode($detailPenjualan->product_id); // Mendapatkan nama produk dari JSON

        $produk = Product::whereIn('id', $productNames)->get(); // Mengambil produk berdasarkan nama

        return view('client.detail', compact('penjualan', 'detailPenjualan', 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
    public function bill($invoice)
    {
        // Ambil data Penjualan berdasarkan invoice
        $penjualan = Penjualan::where('invoice', $invoice)->firstOrFail();

        // Ambil detail penjualan berdasarkan invoice_id dari Penjualan
        $detailPenjualan = DetailPenjualan::where('invoice_id', $penjualan->id)->first();

        // Decode product_id untuk mendapatkan array product_id
        $productIds = json_decode($detailPenjualan->product_id);

        // Ambil produk berdasarkan product_id yang sudah didecode
        $produk = Product::whereIn('id', $productIds)->get();

        $jumlah = json_decode($detailPenjualan->jumlah);

        // Menghitung total harga dari detail penjualan
        // Pastikan Anda sudah memiliki logika perhitungan total harga sesuai dengan kebutuhan
        $allTotal = $detailPenjualan->total_harga;

        // Mengembalikan view dengan data yang diperlukan
        return view('client.bill', compact('penjualan', 'allTotal', 'invoice', 'produk', 'jumlah'));
    }

}
