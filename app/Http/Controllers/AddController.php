<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\Cloner\Data;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        $member = Siswa::all();
    	return view('dashboard.addStudent')->with('member',$member); 
    }

    public function insertdata(Request $request)
    {
    	$member = new Siswa();
    	$member->name = $request->name;
    	$member->email = $request->email;
    	$member->nohp = $request->nohp;
    	$member->save();
    	return response()->json($member);
    }
    
}