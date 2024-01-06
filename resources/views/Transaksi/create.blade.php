@extends('layouts.app')

@section('content')

<h2>Tambah Data Transaksi</h2>

<form action="{{ url('transaksi') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA PASIEN</label>
        <select name="pas_id" id="pas_id" class="form-control" required>
        @foreach ($pasien as $Pasien)
            <option value="{{ $Pasien->id_pasien }}">{{ $Pasien->nama_pasien }}</option>
        @endforeach
        </select>
        {{-- <input type="text" name="nama_obat" id="" class="form-control"> --}}
    </div>
    <div class="mb-3">
        <label for="">NAMA OBAT</label>
        <select name="obat_id" id="obat_id" class="form-control" required>
        @foreach ($obat as $Obat)
            <option value="{{ $Obat->id_obat }}">{{ $Obat->nama_obat }}</option>
        @endforeach
        </select>
        {{-- <input type="text" name="Keterangan_obat" id="" class="form-control"> --}}
    </div>
    <div class="mb-3">
        <label for="">JUMLAH TRANSAKSI</label>
        <input type="text" name="jumlah_transaksi" id="" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection