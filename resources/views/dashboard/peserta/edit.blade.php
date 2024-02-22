@extends('dashboard.layout.master')

@section('content')
    <form action="{{ route('peserta.update', $peserta->id) }}" method="post">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Peserta</label>
            <input value="{{ $peserta->nama }}" type="text" name="nama" class="form-control" id="nama" placeholder="Athar">
        </div>
        <div class="mb-3">
            <label for="tema_pelatihan" class="form-label">Tema Pelatihan</label>
            <input value="{{ $peserta->tema_pelatihan }}" type="text" name="tema_pelatihan" class="form-control" id="tema_pelatihan"
                placeholder="Laravel">
        </div>

        <a href="{{ route('peserta.index') }}" class="btn btn-outline-danger">Batal</a>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
@endsection
