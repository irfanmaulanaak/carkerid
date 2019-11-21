<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\modelCV;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class cvController extends Controller
{
    public function show(){
        if(Session::get('akses') == 'user'){
            return view('cv');
        }else{
            return redirect('home');
        }
    }
    public function updatecv(Request $request){
        $this->validate($request, [
            'akademik' => 'required',
            'organisasi' => 'required',
            'kemampuan' => 'required',
        ]);
        $idexist = Session::get('id');
        $cv = modelCV::where('id_user', $idexist)->first();
        $cv->nama = $request->input('nama');
        $cv->data_akademik = $request->input('akademik');
        $cv->organisasi = $request->input('organisasi');
        $cv->kemampuan = $request->input('kemampuan');
        $cv->id_user = $request->input('iduser');
        $cv->save();
        return Redirect::to('/home');

    }
    public function debugdb(){
        $idexist = Session::get('id');
        $cv = modelCV::where('id_user', $idexist)->first();
    }

}
