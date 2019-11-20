<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelUser;
use Session;
use Response;
use Auth;
use SebastianBergmann\Environment\Console;

class authController extends Controller
{
    public function show(){
        return view('login');
    }

    public function check_login(Request $request)
    {
        echo '<script>console.log("Login Bisa")</script>';
        $email = $request->email;
        $password = $request->password;

        $admin = modelUser::where('email', $email)->first();
        echo '<script>console.log("Login Bisa 2")</script>';

        if ($admin) {
            echo '<script>console.log($admin)</script>';
            $a = 123456;
            $b = 1;
            echo $admin->password == $password;
            echo ($password == $admin->$password) == 1;
        

            if ($admin->password == $password) {
                echo '<script>console.log("Password ketemu")</script>';

                Session::put('email', $admin->email);
                Session::put('akses', $admin->akses);
                Session::put('login', true);
                return view('index')->with('alert', 'login sukses');
            } else {
               return redirect('login')->with('alert', 'username atau password salah');
            //    echo '<script>console.log("Tidak bisa")</script>';

            }
        }else{
            echo '<script>console.log("Email tidak bisa")</script>';

        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('home')->with('alert', 'log out sukses');
    }
}
