@extends('admin.layouts.layouts')
@section('title', 'Tambah Produk | MakanBang')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Tambah Data Produk</h4>
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Produk</h5>
        <small class="text-muted float-end">Tambah Produk</small>
      </div>
      <div class="card-body">
        <form action="{{ route('obat.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
            @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">kode</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kode" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="nama" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Jenis</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="jenis" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">satuan</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="satuan" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Harga Beli</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="harga_beli" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Harga Jual</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="harga_jual" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Stok</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="stok" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Kode Supplier</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kode_supplier" />
          </div>


          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>


@endsection