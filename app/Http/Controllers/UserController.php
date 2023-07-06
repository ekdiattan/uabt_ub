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
            'name' => 'required|string',
            'nim' => 'required|string',
            'prodi' => 'required|string',
            'fakultas' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        User::create([
            'name' => 'required|string',
            'nim' => 'required|string',
            'prodi' => 'required|string',
            'fakultas' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        return redirect('/daftar');
    }
}
