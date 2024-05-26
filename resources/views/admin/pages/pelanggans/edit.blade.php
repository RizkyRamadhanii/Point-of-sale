@extends('admin.layouts.layouts')
@section('title', 'Update Produk | MakanBang')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Update Data Produk</h4>
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Produk</h5>
        <small class="text-muted float-end">Update Produk</small>
      </div>
      <div class="card-body">
        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Kode</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kode" value="{{ $pelanggan->kode }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="nama" value="{{ $pelanggan->nama }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Alamat</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="alamat" value="{{ $pelanggan->alamat }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Kota</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kota" value="{{ $pelanggan->kota }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Telpon</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="telpon" value="{{ $pelanggan->telpon }}" />
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>

@endsection
