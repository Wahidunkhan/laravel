@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

<body> 
<a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
        <table border= "1">
        <tr> 
        <td>id </td>
        <td>nama</td>
        <td>users</td>
        <td>view</td>
        
        </tr>

        @foreach($kategori_galeri as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->nama !!}</td>
        <td> {!! $item ->users_id !!}</td>
        <td>
        <a href="{!! route('kategori_galeri.show', [$item->id]) !!}" 
        class="btn btn-sm btn-success">
        Lihat Data</a>
        <a href="{!! route('kategori_galeri.edit', [$item->id]) !!}"
        class="btn btn-sm btn-warning">
        Ubah Data</a>
        </tr>
        @endforeach
        </table>
        </body>
        @endsection

