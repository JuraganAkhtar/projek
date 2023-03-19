<?php

namespace App\Http\Controllers;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{

    public function data()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.data_pengaduan', compact('pengaduans'));
    }
    public function cetak()
    {
        $pengaduans = Pengaduan::all();
        return view('laporan.cetak-pengaduan', compact('pengaduans'));
    }
    public function user(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'isi' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'file' => 'required|file|image|mimes:png,jpg,jpeg|max:2',
            'tanggapan' => '',
            'status' => '',
        ]);
        if ($request->file('file')) {
            $data['file'] = $request->file('file')->store('post-images');
        }
        Pengaduan::create($data);
if($data) {
    return redirect('/registrasi');
}else {
    return redirect('/masuk');
}

    }
    public function tanggapan($id)
    {
        $record = Pengaduan::findorfail($id);
        return view('admin.tanggapan', compact('record'));
    }
    public function create_tanggapan($id,Request $request)
    {
        $record = Pengaduan::findorfail($id);
        $record->update($request->all());

        return redirect('/hasil');
    }

}
