<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelUser;

class authController extends Controller
{
    public function show(){
        return view('login');
    }
    public function check_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $admin = modelUser::where('email', $email)->first();
        if ($admin) {
            if ($password == $admin->$password) {
                Session::put('email', $admin->email);
                Session::put('akses', $admin->akses);
                Session::put('login', true);
                return redirect('home')->with('alert', 'login sukses');
            } else {
                return redirect('login')->with('alert', 'username atau password salah');
            }
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('home')->with('alert', 'log out sukses');
    }
}
