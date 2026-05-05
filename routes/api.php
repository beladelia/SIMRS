<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanDokterController;

Route::get('/laporan-dokter', [LaporanDokterController::class, 'index']);