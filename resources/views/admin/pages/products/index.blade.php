@extends('admin.layouts.layouts')
@section('title', 'Produk | Produk')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Data Produk</h4>

@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i> {{ Session::get('success') }}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Table Basic</h5>
      <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm float-end">Tambah Data</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($data as $item)

            <tr>
                <td>{{$number++}}</td>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->nama}}</strong></td>
                <td>
                    <img src="{{ asset('storage/'.$item->foto) }}" alt="Avatar" class="rounded-circle avatar" />
                </td>
                <td>{{$item->harga}}</td>
                @if ($item->status == 'Tersedia')
                <td><span class="badge bg-label-success me-1">{{$item->status}}</span></td>
                @else
                <td><span class="badge bg-label-danger me-1">{{$item->status}}</span></td>
                @endif
                <td>
                  <a href="#" class="btn btn-sm btn-primary">Edit</a>
                  <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>

  @endsection
