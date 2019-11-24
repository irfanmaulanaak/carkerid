<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\modelPekerjaan;


class indexController extends Controller
{
    public function index(){
        // return view('index');
        
        $pekerjaan = new modelPekerjaan();
        $pekerjaan = DB::table('pekerjaan')->get();
        return view('index',['pekerjaan' => $pekerjaan]);
        
    }
    // public function getListJob(){
    //     $listjob = DB::table('pekerjaan')->get();
    // }
}
