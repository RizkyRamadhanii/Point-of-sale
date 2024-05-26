@extends('admin.layouts.layouts')
@section('title', 'Tambah pelanggan | MakanBang')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">pelanggan /</span> Tambah Data pelanggan</h4>
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">pelanggan</h5>
        <small class="text-muted float-end">Tambah pelanggan</small>
      </div>
      <div class="card-body">
        <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
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
            <label class="form-label" for="basic-default-fullname">alamat</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="alamat" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">kota</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kota" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Telpon</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="telpon" />
          </div>

          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>


@endsection
