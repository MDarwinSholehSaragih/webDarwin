
@extends('template')

@section('content')
    <h1>Form Edit Produk</h1>

    <form action="{{ route('simpan_edit')}}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $produk->id }}">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Produk</label>
          <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
        </div>
        <div class="mb-3">
          <label for="harga_beli" class="form-label">Harga Beli</label>
          <input type="text" class="form-control" name="harga_beli" value="{{ $produk->harga_beli}}">
        </div>
        <div class="mb-3">
            <label for="harga_jual" class="form-label">Harga Jual</label>
            <input type="text" class="form-control" name="harga_jual" value="{{ $produk->harga_jual}}">
          </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        <a href="{{route('produk')}}" class="btn btn-sm btn-danger">Batal</a>
      </form>

@endsection

