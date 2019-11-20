<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\modelAdmin;
use App\modelPekerjaan;

class indexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function postjob(){
        return view('post');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
            'cp' => 'required',
            'email' => 'required'
        ]);
        // Create Post
        $pekerjaan = new modelPekerjaan;
        $pekerjaan->judul = $request->input('judul');
        $pekerjaan->kategori = $request->input('kategori');
        $pekerjaan->lokasi = $request->input('lokasi');
        $pekerjaan->deskripsi = $request->input('deskripsi');
        $pekerjaan->syarat = $request->input('syarat');
        $pekerjaan->cp = $request->input('cp');
        $pekerjaan->email = $request->input('email');

        $pekerjaan->save();
        return redirect('/posts')->with('success', 'Post Updated');
    }
}
