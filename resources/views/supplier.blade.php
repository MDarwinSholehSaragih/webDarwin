@extends('template')

@section('content')
    <h1 class="text-center">Data Supplier</h1>

    <div class="row mb-3">
        <div class="col-md-9">
            <a href="{{route('create_supplier')}}" class="btn btn-sm btn-success"><i data-feather="file-plus"></i></a>
        </div>
        <div class="col-md-3">
            <form action="{{route('supplier')}}" method="GET" class="d-flex">
                <input type="text" name="key" class="form-control" placeholder="Cari Data Supplier">
                <button class="btn btn-sm btn-success"><i data-feather="search"></i></button>
            </form>
        </div>
    </div>

    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Telpon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list_data)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $list_data->nama }}</td>
                <td>{{ $list_data->alamat }}</td>
                <td>{{ $list_data->email }}</td>
                <td>{{ $list_data->no_telp }}</td>
                <td class="d-flex">
                    <a href="{{route('edit_supplier' , $list_data->id)}}" class="btn btn-sm btn-warning"><i data-feather="edit"></i></a>
                    <form action="{{route('hapus_supplier')}}" method="POST" class="mx-1">
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
