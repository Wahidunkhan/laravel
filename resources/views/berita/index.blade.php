@extends('layouts.app')

@section('content')

<body> 
<a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
        <table border= "1">
        <tr> 
        <td>id </td>
        <td>judul</td>
        <td>isi</td>
        <td>users_id</td>

        </tr>

        @foreach($berita as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->judul !!}</td>
        <td> {!! $item ->isi !!}</td>
        <td> {!! $item ->users_id !!}</td>

        </tr>
        @endforeach
        </table>
        </body>
        @endsection

