<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class cvController extends Controller
{
    public function show(){
        if(Session::get('akses') == 'user'){
            return view('cv');
        }else{
            return redirect('home');
        }
    }
}
