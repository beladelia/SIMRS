<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';

    protected $fillable = [
        'dokter_id',
        'tanggal',
        'biaya',
        'kepuasan'
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}