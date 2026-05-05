<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanDokterController extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->query('bulan', date('m'));
        $tahun = $request->query('tahun', date('Y'));

        $data = DB::table('dokter as d')
            ->join('kunjungan as k', 'd.id', '=', 'k.dokter_id')
            ->select(
                'd.nama as nama_dokter',
                'd.spesialisasi',
                DB::raw('COUNT(k.id) as total_kunjungan'),
                DB::raw('SUM(k.biaya) as total_pendapatan'),
                DB::raw('AVG(k.kepuasan) as rata_rata_kepuasan')
            )
            ->whereMonth('k.tanggal', $bulan)
            ->whereYear('k.tanggal', $tahun)
            ->groupBy('d.id', 'd.nama', 'd.spesialisasi')
            ->get();

        return response()->json([
            "status" => "success",
            "bulan" => (int) $bulan,
            "tahun" => (int) $tahun,
            "data" => $data
        ]);
    }
}