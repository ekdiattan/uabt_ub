<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengurusController;



// Jika anda ingin bantuan hubungi pembuat website ini, Whatsapp : 0895701406273 (Attan).

Route::get('/', function () {
    return view('/index');
});
Route::get('/main', function () {
    return view('/alltemplate/main');
});
Route::get('/navbar', function () {
    return view('/alltemplate/navbar');
});
Route::get('/footer', function () {
    return view('/alltemplate/footer');
});
Route::get('/berita', function () {
    return view('/pages/berita');
});
Route::get('/pengurus', function () {
    return view('/pages/pengurus');
});
Route::get('/sejarah', function () {
    return view('/pages/sejarah');
});


Route::get('/dashboardadmin', function(){return view('/pengurus/dashboard');});

// Controller User
Route::get('/daftar', [UserController::class, 'daftar']);
Route::post('/daftar', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [ UserController::class, 'authenticate']);

// Controller Anggota
Route::get('/daftaranggota',function () {return view('/login/daftaranggota');});
Route::post('/daftaranggota', [AnggotaController::class, 'store']);

// Pengurus
Route::get('/loginadmin', [PengurusController::class, 'index']);
Route::get('/dashboardadmin', [PengurusController::class, 'dashboardadmin']);

