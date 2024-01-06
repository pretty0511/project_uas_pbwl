@extends('layouts.app')

@section('content')

<h2>Data Obat Masuk</h2>

<a href="{{ url('obatmasuk/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NAMA OBAT</th>
        <th>JUMLAH OBAT</th>
        <th>TANGGAL MASUK</th>
        <th>KETERANGAN OBAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_masuk }}</td>
        <td>{{ $row->nama_obat }}</td>
        <td>{{ $row->stok_obat }}</td>
        <td>{{ $row->tanggal_masuk }}</td>
        <td>{{ $row->Keterangan_obat }}</td>
        <td><a href="{{ url('obatmasuk/edit/' . $row->id_masuk) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('obatmasuk/'. $row->id_masuk) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection