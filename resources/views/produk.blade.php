@extends('template')

@section('content')
    <h1 class="text-center">Data Produk</h1>

    <div class="row mb-3 mt-3">
        <div class="col-md-9">
            <a href="{{route('create_produk')}}" class="btn btn-sm btn-success"><i data-feather="file-plus"></i></a>
        </div>
        <div class="col-md-3">
            <form action="{{route('produk')}}" method="GET" class="d-flex">
                <input type="text" name="key" class="form-control mx-1" placeholder="Cari Data Produk">
                <button class="btn btn-sm btn-success"><i data-feather="search"></i></button>
            </form>
        </div>
    </div>

    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list_data)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $list_data->nama }}</td>
                <td>{{ $list_data->harga_beli }}</td>
                <td>{{ $list_data->harga_jual }}</td>
                <td class="d-flex">
                    <a href="{{route('edit_produk' , $list_data->id)}}" class="btn btn-sm btn-warning"><i data-feather="edit"></i></a>
                    <form action="{{route('hapus_produk')}}" method="POST" class="mx-1">
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="id" value="{{ $list_data->id }}">
                    </form>
                    <button type="submit" class="btn btn-sm btn-danger"><i data-feather="trash-2"></i></button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

@endsection
