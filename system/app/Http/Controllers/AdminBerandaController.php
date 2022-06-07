<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBerandaController extends Controller
{
    function beranda(){
        return view('admin.beranda');
    }
}
