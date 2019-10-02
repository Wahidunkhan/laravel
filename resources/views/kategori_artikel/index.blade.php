<html> 

<head> 
    <title> kategori artikel </title>

</head>

<body> 
<a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
        <table border= "1">
        <tr> 
        <td>id </td>
        <td>nama</td>
        <td>users_id</td>
        </tr>

        @foreach($kategori_artikel as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->nama !!}</td>
        <td> {!! $item ->users_id !!}</td>

        </tr>

        @endforeach

</body>

</html>