@extends('dashboard.layout.master')

@section('content')

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block sm:inline">There were some problems with your input.</span>
            <ul class="mt-3 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sertif.update', $sertif->id) }}" method="post" enctype="multipart/form-data" class="space-y-6">
        @method('PATCH')
        @csrf

        <div>
            <label for="ceo" class="block text-sm font-medium text-gray-700">CEO Codely</label>
            <input value="{{ $sertif->ceo }}" name="ceo" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="ceo">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Pengajar -->
            <div>
                <label for="nama_pengajar" class="block text-sm font-medium text-gray-700">Nama Pengajar</label>
                <input value="{{ $sertif->nama_pengajar }}" name="nama_pengajar" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nama_pengajar">
            </div>

            <!-- Instansi Pengajar -->
            <div>
                <label for="instansi_pengajar" class="block text-sm font-medium text-gray-700">Instansi Pengajar</label>
                <input value="{{ $sertif->instansi_pengajar }}" name="instansi_pengajar" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="instansi_pengajar">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tempat -->
            <div>
                <label for="tempat" class="block text-sm font-medium text-gray-700">Tempat</label>
                <input value="{{ $sertif->tempat }}" name="tempat" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="tempat">
            </div>

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input value="{{ $sertif->tanggal }}" name="tanggal" type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="tanggal">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- TTD Pimpinan -->
            <div>
                <label for="ttd_pimpinan" class="block text-sm font-medium text-gray-700">TTD Pimpinan</label>
                <input value="{{ $sertif->ttd_pimpinan }}" name="ttd_pimpinan" type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="ttd_pimpinan">
                @if ($sertif->ttd_pimpinan)
                    <img width="25%" src="{{ asset($sertif->ttd_pimpinan) }}" alt="" class="mt-2">
                @endif
            </div>

            <!-- TTD Pengajar -->
            <div>
                <label for="ttd_pengajar" class="block text-sm font-medium text-gray-700">TTD Pengajar</label>
                <input value="{{ $sertif->ttd_pengajar }}" name="ttd_pengajar" type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="ttd_pengajar">
                @if ($sertif->ttd_pengajar)
                    <img width="25%" src="{{ asset($sertif->ttd_pengajar) }}" alt="" class="mt-2">
                @endif
            </div>
        </div>

        <!-- Desain Sertifikat -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Desain 1 -->
            <div class="text-center">
                <img class="mx-auto mb-3" width="75%" src="{{ asset('sertif/sertif1.png') }}" alt="sertif1">
                <div class="flex items-center justify-center">
                    <input class="form-radio text-indigo-600" value="1" type="radio" name="desain" id="desain1" @if ($sertif->desain == 1) checked @endif>
                    <label for="desain1" class="ml-2">
                        Desain 1
                    </label>
                </div>
            </div>

            <!-- Desain 2 -->
            <div class="text-center">
                <img class="mx-auto mb-3" width="75%" src="{{ asset('sertif/sertif2.png') }}" alt="sertif2">
                <div class="flex items-center justify-center">
                    <input class="form-radio text-indigo-600" value="2" type="radio" name="desain" id="desain2" @if ($sertif->desain == 2) checked @endif>
                    <label for="desain2" class="ml-2">
                        Desain 2
                    </label>
                </div>
            </div>

            <!-- Desain 3 -->
            <div class="text-center">
                <img class="mx-auto mb-3" width="75%" src="{{ asset('sertif/sertif3.png') }}" alt="sertif3">
                <div class="flex items-center justify-center">
                    <input class="form-radio text-indigo-600" value="3" type="radio" name="desain" id="desain3" @if ($sertif->desain == 3) checked @endif>
                    <label for="desain3" class="ml-2">
                        Desain 3
                    </label>
                </div>
            </div>
        </div>

        <div class="flex justify-between mt-8">
            <a href="{{ route('peserta.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Batal
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Simpan
            </button>
        </div>

    </form>
@endsection
