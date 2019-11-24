<?php

namespace App\Http\Controllers;

use App\modelLamaran;
use App\modelPekerjaan;
use Illuminate\Support\Facades\DB;
use Session;

class applyController extends Controller
{
    public function viewjob($id)
    {
        if (Session::get('login') == false | Session::get('akses') == 'admin') {
            return redirect('home');
        } else {
            $pekerjaan = new modelPekerjaan;
            $pekerjaan = DB::table('pekerjaan')->where('id_pekerjaan', $id)->get();
            return view('applyjob', ['pekerjaan' => $pekerjaan]);
        }
    }
    public function viewlamaran($id)
    {
        if (Session::get('login') == false | Session::get('akses') == 'user') {
            return redirect('home');
        } else {
            $lamaran = new modelLamaran();
            $lamaran = DB::table('lamaran')->where('id_lamaran', $id)->get();
            return view('lamaran', ['lamaran' => $lamaran]);
        }
    }
    
}
