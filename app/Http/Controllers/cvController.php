<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\modelCV;
use Illuminate\Support\Facades\DB;


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
        $cv = new modelCV;
        $cv->nama = $request->input('nama');
        $cv->data_akademik = $request->input('nama');
        $cv->organisasi = $request->input('nama');
        $cv->kemampuan = $request->input('nama');
        $cv->id_user = $request->input('nama');
    }

}
