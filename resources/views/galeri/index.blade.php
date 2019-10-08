@extends('layouts.app')

@section('content')

<body> 
<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
        <table border= "1">
        <tr> 
        <td>id </td>
        <td>nama</td>
        <td>keterangan</td>
        <td>path</td>
        <td>view</td>
        </tr>

        @foreach($galeri as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->nama !!}</td>
        <td> {!! $item ->keterangan !!}</td>
        <td> {!! $item ->path !!}</td>
        <td>
        <a href="{!! route('galeri.show', [$item->id]) !!}" class="btn btn-sm btn-success">Lihat Data</a>
        

        </tr>
        @endforeach
        </table>
        </body>
        @endsection

