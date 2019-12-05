<?php

namespace App\Http\Controllers;
use App\Siswa;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $member = Siswa::all();
    	return view('dashboard.viewStudent')->with('member',$member); 
    }
}
