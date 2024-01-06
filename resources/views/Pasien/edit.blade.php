@extends('layouts.app')

@section('content')

<h2>Edit Data Pasien</h2>

<form action="{{ url('pasien/'. $row->id_pasien) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="nama_pasien" id="" class="form-control" value="{{ $row->nama_pasien }}">
    </div>
    <div class="mb-3">
        <label for="">TANGGAL LAHIR</label>
        <input type="date" name="tanggal_lahir" id="" class="form-control" value="{{ $row->tanggal_lahir }}">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT</label>
        <textarea name="alamat_pasien" class="form-control" id="" cols="30" rows="10">{{ $row->alamat_pasien }}</textarea>
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>


@endsection