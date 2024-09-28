
@extends('template')

@section('content')
    <h1>Form Edit Karyawan</h1>

    <form action="{{ route('simpan_edit1')}}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="id" value="{{ $karyawan->id }}">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Karyawan</label>
          <input type="text" class="form-control" name="nama" value="{{ $karyawan->nama }}">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" value="{{ $karyawan->alamat }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $karyawan->email }}">
        </div>
        <div class="mb-3">
            <label for="tpt_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tpt_lahir" value="{{ $karyawan->tpt_lahir }}">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tgl_lahir" value="{{ $karyawan->tgl_lahir }}">
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        <a href="{{route('karyawan')}}" class="btn btn-sm btn-danger">Batal</a>
      </form>

@endsection

