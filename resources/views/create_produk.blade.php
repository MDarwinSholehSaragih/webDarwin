
@extends('template')

@section('content')
    <h1>Form Tambah Produk</h1>

    <form action="{{route('simpan_tambah')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Produk</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
          <label for="harga_beli" class="form-label">Harga Beli</label>
          <input type="text" class="form-control" name="harga_beli">
        </div>
        <div class="mb-3">
            <label for="harga_jual" class="form-label">Harga Jual</label>
            <input type="text" class="form-control" name="harga_jual">
          </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        <a href="{{route('produk')}}" class="btn btn-sm btn-danger">Batal</a>
      </form>

@endsection

