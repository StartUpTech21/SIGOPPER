<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminBerandaController extends Controller
{
    function beranda(){
        return view('superadmin.beranda');
    }
}
