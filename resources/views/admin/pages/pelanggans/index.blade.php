@extends('admin.layouts.layouts')
@section('title', 'Pelanggan | Pelanggan')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pelanggan /</span> Data Pelanggan</h4>

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
      <a href="{{route('pelanggan.create')}}" class="btn btn-primary btn-sm float-end">Tambah Data</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($data as $item)

            <tr>
                <td>{{$number++}}</td>
                <td>{{$item->kode}}</td>
                <td>{{$item->nama}}</td>
                <td>

                  <a href="{{route('pelanggan.edit', $item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                  <form id="deleteForm-{{ $item->id }}" method="POST" action="{{ route('pelanggan.destroy', ['pelanggan' => $item]) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $item->id }})">Delete</a>
                </form>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>

  <script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('deleteForm-' + id).submit();
        }
    }
    </script>

  @endsection
