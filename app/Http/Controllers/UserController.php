<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function index(){
        return view('daftar');
    }
    public function store(Request $request){
        
        $validatedDate = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'hak_akses' => 'required|string',
        ]);
        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => $request->password,
            'hak_akses' => $request->hak_akses,
        ]);
        return redirect('/daftar');
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $request->email)){
            Auth::login($user);
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai',
        ]);
    }
}
