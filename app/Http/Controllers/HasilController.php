<?php

namespace App\Http\Controllers;
use App\Models\Hasil;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.hasil', compact('pengaduans'));
    }
    public function tanggapan()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.tanggapan', compact('pengaduans'));
    }
}
