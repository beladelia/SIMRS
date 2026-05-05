<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter'; 
    
    protected $fillable = [
        'nama',
        'spesialisasi'
    ];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class);
    }
}