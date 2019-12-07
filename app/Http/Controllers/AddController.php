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
	
	public function edit(Request $request, Siswa $siswa){
		$member = $siswa::find($request->id);
    	$member->name = $request->upname;
    	$member->email = $request->upemail;
    	$member->nohp = $request->upnohp;
    	$member->save();
    	return Redirect::to('change');
	}
	
    public function uploadedit($id, Siswa $siswa)
    {	
		$siswa = $siswa->where('id',$id)
						->first();
		
		return view('dashboard.editStudent',compact('siswa'));
    }

    public function insertdata(Request $request)
    {
    	$member = new Siswa();
    	$member->name = $request->name;
    	$member->email = $request->email;
    	$member->nohp = $request->nohp;
    	$member->save();
    	return view('dashboard.addStudent');
    }
    
}
