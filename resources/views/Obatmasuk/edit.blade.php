@extends('layouts.app')

@section('content')

<h2>Edit Data Obat Masuk</h2>

<form action="{{ url('obatmasuk/'. $row->id_masuk) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA OBAT</label>
        <input type="text" name="nama_obat" id="" class="form-control" value="{{ $row->nama_obat }}">
    </div>
    <div class="mb-3">
        <label for="">JUMLAH OBAT</label>
        <input type="text" name="stok_obat" id="" class="form-control" value="{{ $row->stok_obat }}">
    </div>
    <div class="mb-3">
        <label for="">TANGGAL MASUK</label>
        <input type="date" name="tanggal_masuk" id="" class="form-control" value="{{ $row->tanggal_masuk }}">
    </div>
    <div class="mb-3">
        <label for="">KETERANGAN OBAT</label>
        <textarea name="Keterangan_obat" class="form-control" id="" cols="30" rows="10">{{ $row->Keterangan_obat }}</textarea>
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>

@endsection