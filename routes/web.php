<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

route::group(['middleware' =>['auth','login:admin']],function(){
// Route::get('/admin', function () {
//         return view('admin.admin');
//     });
Route::get('/dashboard', [Controller::class, 'dashboard']);
Route::get('/laporan', [LaporanController::class, 'index']);

// Route::get('/tanggapan', function () {
//     return view('admin.tanggapan');
// });

// Route::get('/hasil', function () {
//     return view('admin.hasil');
// });
Route::get('/hasil', [HasilController::class, 'index']);

// Route::get('/data_pengaduan', [PengaduanController::class, 'data']);
// Route::get('/data_pengaduan', function () {
//     return view('admin.data_pengaduan');
});


// route::group(['middleware' =>['auth','login:masyarakat']],function(){
    Route::get('/home', function () {
        return view('home');
    });
// });
Route::get('/masuk', [Controller::class, 'index']);
Route::post('/masuk', [Controller::class, 'gas']);

Route::post('/logout', [Controller::class, 'keluar']);

Route::get('/registrasi',[Controller::class, 'regist'])->name('login');
Route::post('/registrasi',[Controller::class, 'daftar']);

Route::get('/data_pengaduan',[PengaduanController::class, 'data']);
Route::get('/cetak',[PengaduanController::class, 'cetak']);
Route::post('/create',[PengaduanController::class, 'user']);

Route::get('/tanggapan{id}',[PengaduanController::class, 'tanggapan']);
Route::post('/create-tanggapan{id}',[PengaduanController::class, 'create_tanggapan']);

route::group(['middleware' =>['auth','login:admin,masyarakat']],function(){
    route::get('/redirect', [Controller::class, 'cek']);
});



