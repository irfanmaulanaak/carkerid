<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\modelCV;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class cvController extends Controller
{
    public function show()
    {
        $idexist = Session::get('id');
        $cv = modelCV::where('id_user', $idexist)->first();
        if (Session::get('akses') == 'user') {
            if ($cv) {
                $result = new modelCV();
                $result = DB::table('cv')->where('id_user', $idexist)->get();

                Session::put('cvstat', true);

                return view('cvpage', ['cv' => $result]);
            } else {
                Session::put('cvstat', false);

                return view('cvpage');
            }
        } else {
            return redirect('home');
        }
    }
    public function updatecv(Request $request)
    {
        $this->validate($request, [
            'akademik' => 'required',
            'organisasi' => 'required',
            'kemampuan' => 'required',
        ]);
        $idexist = Session::get('id');
        $cv = modelCV::where('id_user', $idexist)->first();
        if ($cv) {
            DB::table('cv')->where('id_user', $request->input('iduser'))->update([
                'nama' => $request->input('nama'),
                'data_akademik' => $request->input('akademik'),
                'organisasi' => $request->input('organisasi'),
                'kemampuan' => $request->input('kemampuan')
            ]);
            return Redirect::to('/home');
        } else {
            $cv = new modelCV;
            $cv->nama = $request->input('nama');
            $cv->data_akademik = $request->input('akademik');
            $cv->organisasi = $request->input('organisasi');
            $cv->kemampuan = $request->input('kemampuan');
            $cv->id_user = $request->input('iduser');
            $cv->save();
            return Redirect::to('/home');
        }
    }
}
