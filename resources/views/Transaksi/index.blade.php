@extends('layouts.app')

@section('content')

<h2>Data Transaksi</h2>

<a href="{{ url('transaksi/create') }}" class="btn btn-info mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NAMA PASIEN</th>
        <th>NAMA OBAT</th>
        <th>JUMLAH TRANSAKSI</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->Pasien['nama_pasien'] }}</td>
        <td>{{ $row->Obat['nama_obat'] }}</td>
        <td>{{ $row->jumlah_transaksi }}</td>
        <td><a href="{{ url('transaksi/edit/' . $row->id_transaksi) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('transaksi/'. $row->id_transaksi) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection