@extends('dashboard.layout.master')

@section('content')
    <div class="mb-3">
        <span>Nama Peserta</span>
        <p>{{ $peserta->nama }}</p>
    </div>
    <div class="mb-3">
        <span>Tema Pelatihan</span>
        <p>{{ $peserta->tema_pelatihan }}</p>
    </div>
    <div class="mb-3">
        <span>No Sertif</span>
        <p>{{ $peserta->no_sertif }}</p>
    </div>

    <a href="{{ route('peserta.index') }}" class="btn btn-outline-danger">Kembali</a>
@endsection
