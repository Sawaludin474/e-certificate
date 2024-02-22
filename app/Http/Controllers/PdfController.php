<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Sertif;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function pdf(Peserta $peserta)
    {
        $peserta->load('sertif');
        // return $peserta;
        return view('print', compact('peserta'));
        $pdf = Pdf::loadView('print', compact('peserta'));
        // ->setPaper('a4', 'portrait');

        return $pdf->stream('Sertif_codely.pdf');
    }
}
