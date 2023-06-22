<?php
use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('/login/login');
});
Route::get('/daftar', function () {
    return view('/login/daftar');
});

Route::post('/formdaftar', [UserController::class, 'store']);
Route::get('/getdaftar', [UserController::class, 'index'])->name('daftar');

