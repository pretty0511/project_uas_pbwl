@extends('layouts.app')

@section('content')

<h2>Tambah Data Pasien</h2>

<form action="{{ url('pasien') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="nama_pasien" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">TANGGAL LAHIR</label>
        <input type="date" name="tanggal_lahir" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT</label>
        <textarea name="alamat_pasien" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>


@endsection