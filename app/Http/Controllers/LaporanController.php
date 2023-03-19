<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('laporan.pengaduan',compact('pengaduans'));
    }
}
