@extends('admin.layouts.layouts')
@section('title', 'Update Supplier | MakanBang')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Supplier /</span> Update Data Supplier</h4>
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Supplier</h5>
        <small class="text-muted float-end">Update Supplier</small>
      </div>
      <div class="card-body">
        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Kode</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kode" value="{{ $supplier->kode }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="nama" value="{{ $supplier->nama }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Alamat</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="alamat" value="{{ $supplier->alamat }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Kota</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="kota" value="{{ $supplier->kota }}" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Telpon</label>
            <input type="text" class="form-control" id="basic-default-fullname" name="telpon" value="{{ $supplier->telpon }}" />
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>

@endsection
