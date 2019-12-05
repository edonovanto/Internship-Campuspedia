<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        return view('dashboard.addStudent');
    }
}
