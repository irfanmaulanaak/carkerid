<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
    public function showPostJob(){
        return view('post');
    }
}
