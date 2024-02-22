<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesertas = Peserta::orderBy('id', 'desc')->get();
        return view('dashboard.peserta.index', compact('pesertas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'tema_pelatihan'    => 'required'
        ]);

        $no = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);


        Peserta::create([
            'sertif_id'         => 1,
            'no_sertif'         => $no,
            'nama'              => $request->nama,
            'tema_pelatihan'    => $request->tema_pelatihan
        ]);

        return to_route('peserta.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        return view('dashboard.peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        return view('dashboard.peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'nama'              => 'required',
            'tema_pelatihan'    => 'required'
        ]);



        $peserta->update([
            'nama'              => $request->nama,
            'tema_pelatihan'    => $request->tema_pelatihan
        ]);

        return to_route('peserta.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();

        return to_route('peserta.index');
    }

    public function print(Peserta $peserta)
{
    $peserta->load('sertif');
    // return $peserta;
    // return view('print', compact('peserta'));
    $pdf = Pdf::loadView('print', compact('peserta'));
    
    // ->setPaper('a4', 'portrait');
    

    return $pdf->stream('Sertif_codely.pdf');
}
    // Di dalam PesertaController

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $pesertas = Peserta::where('nama', 'like', "%{$query}%")->get();
    
        return view('index', compact('pesertas')); // Asumsi halaman utama Anda bernama 'welcome.blade.php'
    }

}
