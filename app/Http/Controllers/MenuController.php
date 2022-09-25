<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function dashboard()
    {
        return view('menu.dashboard',[
        "title" => "Admin"
    ]);
    }
    public function wilayah()
    {
        return view('menu.wilayah', [
            "title" => "Wilayah"
        ]);
    }
}
