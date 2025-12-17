<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        // Data untuk Chart 1: Gender
        $maleCount = Pegawai::where('gender', 'male')->count();
        $femaleCount = Pegawai::where('gender', 'female')->count();

        // Data untuk Chart 2: Top 5 Pekerjaan
        $topPekerjaan = Pekerjaan::withCount('pegawai')
            ->orderBy('pegawai_count', 'desc')
            ->take(5)
            ->get();

        return view('index', [
            'genderData' => [$maleCount, $femaleCount],
            'pekerjaanLabels' => $topPekerjaan->pluck('nama'),
            'pekerjaanValues' => $topPekerjaan->pluck('pegawai_count'),
        ]);
    }
}