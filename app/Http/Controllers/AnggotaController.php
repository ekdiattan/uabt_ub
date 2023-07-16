<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    public function index(){
        $anggotas = Anggota::all();
        return view('daftaranggota');
    }
    public function store(Request $request){

        $anggota=Anggota::where('email', '=', $request->email)->first();
        $anggota2=Anggota::where('nim', '=', $request->nim)->first();

        if($anggota){
            session()->flash('error', 'Akun email anda sudah terdaftar sebagai anggota UABT!');
            return redirect()->back();
        }elseif($anggota2){
            session()->flash('error2', 'NIM anda sudah terdaftar sebagai anggota UABT!');
            return redirect()->back();
        }

        $validatedDate = $request->validate([
            'nama'=> 'required|string',
            'email'=> 'required|string',
            'nim'=> 'required|string',
            'fakultas'=> 'required|string',
            'prodi'=> 'required|string',
            'angkatan'=> 'required|string',
            'alamat'=> 'required|string',
            'nohp'=> 'required|string',
            'jeniskelamin'=> 'required|string',
        ]);
        Anggota::create([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'nim'=> $request->nim,
            'fakultas'=> $request->fakultas,
            'prodi'=> $request->prodi,
            'angkatan'=> $request->angkatan,
            'alamat'=> $request->alamat,
            'nohp'=> $request->nohp,
            'jeniskelamin'=> $request->jeniskelamin,
        ]);
        session()->flash('success', 'Anda telah berhasil daftar anggota UABT!');
        return redirect('/daftaranggota');
    }
}
