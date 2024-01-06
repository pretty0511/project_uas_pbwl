@extends('layouts.app')

@section('content')

<h2>Edit Data Transaksi</h2>

<form action="{{ url('transaksi/'. $row->id_transaksi) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA PASIEN</label>
        <select name="pas_id" id="pas_id" class="form-control" required>
            @foreach ($pasien as $Pasien)
                <option value="{{ $Pasien->id_pasien }}">{{ $Pasien->nama_pasien }}</option>
            @endforeach
            </select>
        {{-- <input type="option" name="nama_obat" id="" class="form-control" value="{{ $row->nama_obat }}"> --}}
    </div>
    <div class="mb-3">
        <label for="">NAMA OBAT</label>
        <select name="obat_id" id="obat_id" class="form-control" required>
            @foreach ($obat as $Obat)
                <option value="{{ $Obat->id_obat }}">{{ $Obat->nama_obat }}</option>
            @endforeach
            </select>
        {{-- <textarea name="Keterangan_obat" class="form-control" id="" cols="30" rows="10">{{ $row->Keterangan_obat }}</textarea> --}}
    </div>
    <div class="mb-3">
        <label for="">JUMLAH TRANSAKSI</label>
        <input type="text" name="jumlah_transaksi" id="" class="form-control" value="{{ $row->jumlah_transaksi }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>


@endsection