<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Mail\EmailMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class UserController extends Controller
{
    public function index(){
        return view('/login/login');
    }
    public function daftar(){
        return view('/login/daftar');
    }
    public function store(Request $request){

        $anggota=Anggota::where('email', $request->email)->first();
        $user=User::where('email', $request->email)->first();
        
        if($anggota == null){
            session()->flash('error', 'Akun email anda tidak terdaftar sebagai anggota UABT atau salah!');
            return redirect()->back();
        }elseif($user){
            session()->flash('error', 'Akun email anda telah terdaftar!');
            return redirect()->back();
        }
        $validatedDate = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        User::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        Mail::to("hadyanyuma@student.ub.ac.id")->send(new EmailMessage());
        session()->flash('success', 'Akun anda berhasil dibuat!');
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required', 'max:100', 'min:6'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/sejarah');
        }
        return back()->withErrors([
            'email' => 'Password salah',
        ])->onlyInput('email');
        dd('berhasil');
    }
}
