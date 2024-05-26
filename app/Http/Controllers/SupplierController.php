<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = supplier::all();
        $number = 1;
        return view('admin.pages.suppliers.index', compact('data', 'number'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        supplier::create($data);
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(supplier $supplier)
    {
        return view('admin.pages.suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, supplier $supplier)
    {
        $data = $request->all();
        $supplier->update($data);
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil dihapus');
    }
}
