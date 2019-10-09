<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\berita;
use App\kategori_berita;

class berita_controller extends Controller
{
    //
    public function index(){
        $berita=berita::all();

        return view('berita.index', compact ('berita'));
    }
    public function show($id){
        $berita=berita::find($id);

        return view('berita.show', compact('berita'));
    }

    public function create(){
        $kategori_berita=kategori_berita::pluck('nama','id');
        $laravel1=null;

        return view('berita.create', compact('kategori_berita','laravel1'));
    }

    public function store(Request $request){
        $input=$request->all();
        berita::create($input);
        return redirect(route ('berita.index'));
    }
    public function edit($id){
        $berita=berita::find($id);
        $kategori_berita=kategori_berita::pluck('nama','id');
        $laravel1=kategori_berita::pluck('nama','id');

        if(empty($berita)){
            return redirect (route('berita.index'));
        }
        return view('berita.edit', compact('berita','kategori_berita', 'laravel1'));
    }
    public function update($id, Request $request){
        $input=$request->all();

        $berita=berita::find($id)->update($input);

        if(empty($berita)){
            return redirect (route('berita.index'));
        }
        return redirect(route('berita.index'));
    }
    public function destroy($id){
        $berita=berita::find($id);

        if(empty($berita)){
            return redirect (route('berita.index'));
        }  
        $berita->delete(); 
        return redirect (route('berita.index'));
    }
}
