<html> 

<head> 
    <title> kategori artikel </title>

</head>

<body> 
        <table border= "1">
        <tr> 
        <td>id </td>
        <td>nama</td>
        <td>user id</td>
        </tr>

        @foreach($kategori_artikel as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->nama !!}</td>
        <td> {!! $item ->user_id !!}</td>

        </tr>

        @endforeach

</body>

</html>