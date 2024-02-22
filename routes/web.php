<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SertifController;
use App\Models\Peserta;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    $query = $request->nama;

    // Cari peserta berdasarkan nama
    $pesertas = null;
    if($query) {
        $pesertas = Peserta::where('nama', 'LIKE', "%$query%")->get();
    }
    // Kembali ke view dengan hasil pencarian
    return view('index', compact('pesertas'));
});

Route::post('/user', function (Request $request) {
    $search = $request->nama;
    $users = null;
    if (!empty($search)) {
        $users = Peserta::where('nama', 'like', "%{$search}%")->with('sertif')->get();
        return view('index2', compact('users'));
    }
    return redirect()->back();  
});

Route::get('/peserta/search', [PesertaController::class, 'search'])->name('peserta.search');

Route::get('/peserta/print/{peserta}', [PesertaController::class, 'print'])->name('peserta.print');


Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('peserta', PesertaController::class)->parameters([
        'peserta' => 'peserta'
    ]);
    Route::resource('sertif', SertifController::class);
});

require __DIR__.'/auth.php';
