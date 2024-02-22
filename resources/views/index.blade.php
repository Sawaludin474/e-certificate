<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codely</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-xl">
        <h1 class="flex justify-center text-center py-5 font-bold text-3xl">Selamat Datang di <br>
            Codely</h1>
            <p class="text-xl text-center mb-2">Dapatkan Sertifikatmu Disini!!</p>
            <form action="{{ route('peserta.search') }}" method="GET">
                <input type="text" name="query" placeholder="Cari berdasarkan Nama"
                class="w-full border-2 rounded-md border-slate-300"><p class="text-md text-center ">buat akses pemelajaranmu semakin mudah dengan <b>codely</b></p>
                <div class="flex justify-center items-center py-5">
                    <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cari</button>
                </div>
            </form>
            
            @if($pesertas && $pesertas->count() > 0)
    @foreach($pesertas as $peserta)
        <div class="mt-5 max-w-md mx-auto bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="p-5">
                        <p class="text-lg font-semibold">Hasil pencarian untuk "<span
                                class="text-blue-500">{{ $peserta->nama }}</span>":</p>
                        <div class="mt-4">
                            <a href="{{ route('peserta.print', $peserta->id) }}"
                                class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Lihat PDF
                            </a>
                        </div>
                    </div>
                </div>
    @endforeach
@elseif(request()->has('query'))
    <p class="mt-4">Tidak ditemukan peserta dengan nama tersebut.</p>
@endif


    </div>

</body>

</html>
