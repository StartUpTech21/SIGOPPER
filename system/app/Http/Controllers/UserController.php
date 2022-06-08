<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    function index(){
        $data['list_user'] = User::all();
        return view('superadmin.user.index', $data);
    }

    function create(){
        return view('superadmin.user.create');
    }

    function store(){
        // dd(request()->all());
        $user = new User;
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->level = request('level');
        $user->verifikasi = request('verifikasi');
        $user->save();
        return redirect('superadmin/user')->with('success','Data Berhasil Ditambahkan');
    }

    function edit(User $id){
        // dd($id);
        $data['user'] = $id;

        return view('superadmin.user.edit',$data);
    }

    function update($id){
        // dd($id);
        DB::table('user')->where('id', $id)->update([
            'username'=>request()->username,
            'email'=>request()->email,
            'password'=>request()->password,
            'level'=>request()->level,
            'verifikasi'=>request()->verifikasi
        ]);

        return redirect('superadmin/user')->with('success','Data Berhasil Diubah');
    }

    function destroy($id){
        // dd($id);
        $data['delete'] = DB::table('user')->where('id',$id)->delete();
        return redirect('superadmin/user')->with('danger','Data Berhasil Dihapus');
    }

}