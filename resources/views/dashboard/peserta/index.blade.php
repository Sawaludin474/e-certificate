@extends('dashboard.layout.master')

@section('content')
<div class="w-full ">
<a href="{{ route('peserta.create')}}" class="inline-block  px-4 py-2 text-xl bg-blue-800 text-white font-bold rounded">
    Tambah Peserta
</a>
    <table class="min-w-full border mt-4">
        <thead>
            <tr>
                <th class="px-3 py-3 border-2 w-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    no
                </th>
                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Nama
                </th>
                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    No. Sertifikat
                </th>
                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Tema Pelatihan
                </th>
                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            @foreach ($pesertas as $peserta)
            <tr>
                <td class="px-5 py-5 border border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $loop->iteration}}</p>
                </td>
                <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{$peserta->nama}}</p>
                </td>
                <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{$peserta->no_sertif}}</p>
                </td>
                <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $peserta->tema_pelatihan}}</p>
                </td>
                <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">
                    <form action="{{ route('peserta.destroy', $peserta->id) }}" class="flex justify-center space-x-2" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-red-200 duration-300 bg-red-500 w-8 py-1 shadow-md text-white rounded flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        <a  href="{{ route('peserta.print', $peserta->id) }}" class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-yellow-200 duration-300 bg-amber-400 w-8 py-2 px-2 inline-flex text-white items-center justify-center shadow-md rounded">
                            <i class="fas fa-file"></i> 
                        </a>
                        <a href="{{ route('peserta.edit', $peserta->id) }}" class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300 bg-slate-400 w-8 inline-flex text-white items-center justify-center shadow-md rounded">
                            <i class="fas fa-edit"></i>
                        </a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

 
        <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.js"></script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "fltp"
            });
        })
    </script>

    <script>
        feather.replace();
    </script>
@endpush
