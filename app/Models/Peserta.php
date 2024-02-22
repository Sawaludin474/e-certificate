<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peserta extends Model
{
    use HasFactory;
    
    public function sertif() : BelongsTo 
    {
        return $this->belongsTo(Sertif::class);
    }

    protected $fillable = [
        'sertif_id',
        'no_sertif',
        'nama',
        'tema_pelatihan'
    ];


}
