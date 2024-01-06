@extends('layouts.app')

@section('content')

<h2>Data Obat</h2>

<a href="{{ url('obat/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NAMA OBAT</th>
        <th>KETERANGAN OBAT</th>
        <th>TANGGAL EXPIRED</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_obat }}</td>
        <td>{{ $row->nama_obat }}</td>
        <td>{{ $row->Keterangan_obat }}</td>
        <td>{{ $row->tanggal_Expired }}</td>
        <td><a href="{{ url('obat/edit/' . $row->id_obat) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('obat/'. $row->id_obat) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection