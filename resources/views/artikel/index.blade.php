@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">"List Kategori Artikel"</div>


<div class="card-body">
<body> 
<a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
        <table border= "1">
        <tr> 
        <td>id </td>
        <td>judul</td>
        <td>isi</td>
        <td>users_id</td>
        <td>view</td>
        </tr>

        @foreach($artikel as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->judul !!}</td>
        <td> {!! $item ->isi !!}</td>
        <td> {!! $item ->users_id !!}</td>

        <td>

        <a href="{!! route('artikel.show', [$item->id]) !!}" 
        class="btn btn-sm btn-success">
        Lihat Data</a>
        <a href="{!! route('artikel.edit', [$item->id]) !!}"
        class="btn btn-sm btn-warning">
        Ubah</a>
        {!! Form::open(['route'=>['artikel.destroy', $item->id], 'method'=>'delete']) !!}
        {!! Form::submit('hapus', ['class'=>'btn btn-sm btn-danger','on-click'=>"return confirm('yakin?');"]) !!}
        {!! Form::close() !!}
        </td>

        </tr>
        @endforeach
        </table>
        
        @endsection

        </div>
        </div>
        </div>
        </div>
        </body>

