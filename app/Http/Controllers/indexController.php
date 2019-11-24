<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\modelPekerjaan;
use App\modelLamaran;
use Session;


class indexController extends Controller
{
    public function index()
    {
        // return view('index');
        if (Session::get('login') == false | Session::get('akses') == 'user') {
            $pekerjaan = new modelPekerjaan();
            $pekerjaan = DB::table('pekerjaan')->get();
            return view('index', ['pekerjaan' => $pekerjaan]);
        } else {
            $id = Session::get('id');
            $lamaran = new modelLamaran();
            $lamaran = DB::table('lamaran')->where('id_user', $id)->get();
            // echo $lamaran;
            // $lamaran = modelLamaran::where('id_user', $id)->first();
            return view('index', ['lamaran' => $lamaran]);

        }
    }
    // public function getListJob(){
    //     $listjob = DB::table('pekerjaan')->get();
    // }
}
