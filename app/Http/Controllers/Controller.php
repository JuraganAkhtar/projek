<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('layouts.masuk');
    }
    public function regist()
    {
        return view('layouts.registrasi');
    }
    public function dashboard()
    {
        $pengaduans = User::all();
        return view('admin.dashboard', compact('pengaduans'));
    }
    public function daftar(Request $request)
    {

        $data = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'nik' => 'required|unique:users',
            'nama' => 'required',
            'telp' => 'required|unique:users',
            'level' => 'required',
        ]);


        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect('/masuk');
    }
    public function cek(){
        if (auth()->user()->level === 'admin') {
            return redirect('/dashboard');
        }elseif (auth()->user()->level ==='masyarakat') {
            return redirect('/home');
        // }
        // elseif (auth()->user()->level ==='petugas') {
        //     return redirect('/');
    }else
        return redirect('/masuk');
    }

    public function gas(Request $asup){
        if (auth()->attempt(['username' => $asup->username, 'password' => $asup->password])) {
            $asup->session()->regenerate();
            return redirect('/redirect');
        elseif(auth()->attempt(['username' => $asup->username, 'password' => $asup->password])){
            $asup->session()->regenerate();
            }
        }
        return back()->with('loginerror', 'Gagal Masuk');
    }
    public function keluar()
    {
        Auth::logout();

        request() ->session()->invalidate();


        request() ->session()->regenerateToken();

        return redirect('/');


    }
}

