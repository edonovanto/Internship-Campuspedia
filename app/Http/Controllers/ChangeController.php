<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Redirect;

class ChangeController extends Controller
{
    public function index(){
        return view('dashboard.changeStudent');
    }
}
