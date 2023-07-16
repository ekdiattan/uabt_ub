<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;


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
Route::get('/daftar', function () {return view('/login/daftar');});
Route::post('/daftar', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [ UserController::class, 'authenticate']);

// Controller Anggota
Route::get('/daftaranggota',function () {return view('/login/daftaranggota');});
Route::post('/daftaranggota', [AnggotaController::class, 'store']);


