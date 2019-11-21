<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelPekerjaan;
use Illuminate\Support\Facades\DB;
use Session;

class applyController extends Controller
{
    public function apply($id)
    {
        if (Session::get('login') == false | Session::get('akses') == 'admin') {
            return redirect('home');
        } else {
            $pekerjaan = new modelPekerjaan;
            $pekerjaan = DB::table('pekerjaan')->where('id_pekerjaan', $id)->get();
            return view('applyjob', ['pekerjaan' => $pekerjaan]);
        }
    }
}
