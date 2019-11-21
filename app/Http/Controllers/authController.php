<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelUser;
use Session;
use Illuminate\Support\Facades\Redirect;
use Response;
use Auth;
use SebastianBergmann\Environment\Console;

class authController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function check_login(Request $request)
    {
        echo '<script>console.log("Login Bisa")</script>';
        $email = $request->email;
        $password = $request->password;

        $user = modelUser::where('email', $email)->first();
        echo '<script>console.log("Login Bisa 2")</script>';

        if ($user) {
            if ($user->password == $password) {
                echo '<script>console.log("Password ketemu")</script>';
                Session::put('email', $user->email);
                Session::put('akses', $user->akses);
                Session::put('nama', $user->nama);
                Session::put('notelp', $user->noTelp);
                Session::put('id', $user->id_user);
                Session::put('login', true);
                return redirect('home')->with('alert', 'login sukses');
            } else {
                return redirect('login')->with('alert', 'username atau password salah');
            }
        } else {
            echo '<script>console.log("Email tidak bisa")</script>';
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('home')->with('alert', 'log out sukses');
    }
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required|same:password'
        ]);
        $data_regis = new modelUser();
        $data_regis->username = $request->input('username');
        $data_regis->nama = $request->input('nama');
        $data_regis->email = $request->input('email');
        $data_regis->noTelp = $request->input('notelp');
        $data_regis->password = $request->input('password');
        $data_regis->akses = $request->input('akses');
        $data_regis->save();
        return Redirect::to('/login');
    }
}
