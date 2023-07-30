<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index(){
        return view('/pengurus/loginadmin');
    }
    public function dashboardadmin(){
        return view ('/pengurus/dashboardadmin');
    }
}
