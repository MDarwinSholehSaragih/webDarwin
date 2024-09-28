
@extends('template')

@section('content')
    <h1>Form Tambah Supplier</h1>

    <form action="{{route('simpan_tambah2')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Supplier</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telpon</label>
            <input type="text" class="form-control" name="no_telp">
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        <a href="{{route('supplier')}}" class="btn btn-sm btn-danger">Batal</a>
      </form>

@endsection

