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

    public function updatedata(Request $request)
    {
    	$member = Siswa::find($request->id);
    	$member->name = $request->name;
    	$member->email = $request->email;
    	$member->nohp = $request->nohp;
    	$member->save();
    	return response()->json($member);
    }

    public function deletedata(Request $request)
    {
    	Siswa::where('id',$request->id)->delete();
    	return response()->json();
    }
}
