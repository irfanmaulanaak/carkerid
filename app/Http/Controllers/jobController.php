<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelPekerjaan;
use Session;

class jobController extends Controller
{
    public function showPostJob()
    {
        if(Session::get('akses') == 'admin'){
            return view('post');
        }
        else{
            return redirect('home');
        }
    }
    public function postJob(Request $request)
    {
        $this->validate($request, [
            'juduljob' => 'required',
            'job-type' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
        ]);
        // Create Post
        $pekerjaan = new modelPekerjaan;
        $pekerjaan->judul = $request->input('juduljob');
        $pekerjaan->kategori = $request->input('job-type');
        $pekerjaan->lokasi = $request->input('lokasi');
        $pekerjaan->deskripsi = $request->input('deskripsi');
        $pekerjaan->syarat = $request->input('syarat');
        $pekerjaan->cp = $request->input('cp');
        $pekerjaan->email = $request->input('email');
        $pekerjaan->id_user = $request->input('iduser');
        $pekerjaan->nama_perusahaan = $request->input('namaperusahaan');
        $pekerjaan->save();
        return redirect('/home')->with('success', 'Post Updated');
    }
}
