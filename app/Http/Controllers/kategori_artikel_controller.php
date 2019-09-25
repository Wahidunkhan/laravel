<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategori_artikel_controller extends Controller
{
    //
    public function index(){
        $artikel=kategori_artikel::all();

        return view('kategori_artikel.index', compact ('kategori_artikel'));
    }
}
