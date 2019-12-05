<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Redirect;

class ChangeController extends Controller
{
    public function index(){
        $member = Siswa::all();
    	return view('dashboard.changeStudent')->with('member',$member); 
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

    public function deletedata($proposalId, Siswa $member)
    {
        $member->where('id', $proposalId)
        ->delete();

        return Redirect::to('change');
        // return view('welcome', compact('member'));
    }
}
