@extends('layouts.app')

@section('content')

<body> 
<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
        <table border= "1">
        <tr> 
        <td>judul</td>
        <td>isi</td>
        <td>users_id</td>

        </tr>

        @foreach($pengumuman as $item)

        <tr>
        <td> {!! $item ->judul !!}</td>
        <td> {!! $item ->isi !!}</td>
        <td> {!! $item ->users_id !!}</td>

        </tr>
        @endforeach
        </table>
        </body>
        @endsection

