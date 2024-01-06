@extends('layouts.app')

@section('content')

<h2>Tambah Data Obat</h2>

<form action="{{ url('obat') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA OBAT</label>
        <input type="text" name="nama_obat" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">KETERANGAN OBAT</label>
        <input type="text" name="Keterangan_obat" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">TANGGAL EXPIRED</label>
        <input type="date" name="tanggal_Expired" id="" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection