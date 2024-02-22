<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sertif extends Model
{
    use HasFactory;

    public function peserta() : HasMany {
        return $this->hasMany(Peserta::class);
    }

    
    protected $fillable = [
        'desain',
        'ceo',
        'nama_pengajar',
        'instansi_pengajar',
        'tempat',
        'tanggal',
        'ttd_pimpinan',
        'ttd_pengajar'
    ];

    protected $table = 'sertifs';
    
}
