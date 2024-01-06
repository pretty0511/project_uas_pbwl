@extends('layouts.app')

@section('content')

<h2>Data Pasien</h2>

<a href="{{ url('pasien/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NAMA</th>
        <th>TANGGAL LAHIR</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_pasien }}</td>
        <td>{{ $row->nama_pasien }}</td>
        <td>{{ $row->tanggal_lahir }}</td>
        <td>{{ $row->alamat_pasien }}</td>
        <td><a href="{{ url('pasien/edit/' . $row->id_pasien) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pasien/'. $row->id_pasien) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection