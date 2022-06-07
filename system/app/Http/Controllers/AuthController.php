<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    function showLogin(){
        return view('login');
    }

    function loginProcess(User $user){
        // dd(request()->all());
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            if(Auth::User()->level == 'admin'){
                return redirect('admin/')->with('success','Selamat datang Admin');
            }elseif(Auth::User()->level == 'superadmin'){
                return redirect('superadmin/')->with('success','Selamat datang Superadmin');
            }
        } else {
            return back()->with('danger', 'Login gagal, Silahkan coba kembali');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
