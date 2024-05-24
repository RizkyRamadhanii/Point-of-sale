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
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
            @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="nama" placeholder="Mie Goreng" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Harga</label>
            <input type="text" class="form-control" id="basic-default-company" name="harga" placeholder="15000" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">status</label>
            <select class="form-select" id="basic-default-company" name="status">
              <option value="Tersedia">Tersedia</option>
              <option value="Habis">Habis</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Foto</label>
            <input type="file" class="form-control" id="basic-default-company" name="foto"/>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>


@endsection
