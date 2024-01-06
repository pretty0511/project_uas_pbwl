@extends('layouts.app')

@section('content')

<h2>Edit Data Obat</h2>

<form action="{{ url('obat/'. $row->id_obat) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA OBAT</label>
        <input type="text" name="nama_obat" id="" class="form-control" value="{{ $row->nama_obat }}">
    </div>
    <div class="mb-3">
        <label for="">KETERANGAN OBAT</label>
        <textarea name="Keterangan_obat" class="form-control" id="" cols="30" rows="10">{{ $row->Keterangan_obat }}</textarea>
    </div>
    <div class="mb-3">
        <label for="">TANGGAL EXPIRED</label>
        <input type="date" name="tanggal_Expired" id="" class="form-control" value="{{ $row->tanggal_Expired }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>


@endsection