<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class UserController extends Controller
{
    public function index(){
        return view('/login/login');
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

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/sejarah');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
