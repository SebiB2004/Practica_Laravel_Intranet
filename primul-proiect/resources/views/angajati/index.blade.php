<!DOCTYPE html>
<html>
<head>
<title> Angajati! </title>
<style>
       body, html{
    height: 100%;
    margin : 0;
 }

 .container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height : 100%;
    text-align: center;
 }
    table{
        border-collapse : collapse;
        width: 50%;
    }
    th, td{
        border : 1px solid black;
        padding : 8px;
    }
    th {
        background-color: orange;
    }
  
</style>

</head>
<body>

<div class = "container">
<img src="imagini/eagle-8325204_1280.png" alt="Logo" id = "imagine" style = "width : 200px; height : auto;">
<h1> Lista angajati SEBIRA SRL </h1>

<table> 
    <thead>
    <tr>
        <th> ID </th>
        <th> NUME </th>
        <th> PRENUME </th>
        <th> EMAIL </th>
        <th> PHONE </th>

    </tr>
    </thead>
    <tbody>
        @foreach($angajati as $angajat)
        <tr>
            <td>{{$angajat->id}}</td>
            <td> {{$angajat->nume}}</td>
            <td> {{$angajat->prenume}}</td>
            <td>{{$angajat->email}}</td>
            <td>{{$angajat->phone}}</td>

        </tr>
        @endforeach
    </tbody>
</table>

<p><a href="{{ route('angajati.create') }}">Adauga un nou angajat</a></p>
<p><a href = "{{route('dashboard')}}">Inapoi la pagina principala</a></p>
</div>

</body>

</html>