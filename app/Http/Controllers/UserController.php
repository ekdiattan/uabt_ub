<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        return view('daftar');
    }
    public function store(Request $request){
        $validatedDate = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'prodi' => 'required|string',
            'fakultas' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'email' => $request->email,
            'password' => $request->password,
            'hak_akses' => 'Anggota',
        ]);
        return redirect('/daftar');
    }
}
