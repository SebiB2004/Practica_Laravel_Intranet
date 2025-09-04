<!DOCTYPE html>
<html>
<head>
<title> Angajati! </title>
<style>
    body, html{
    height: 100%;
    margin : 0;
 }
  input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
         button {
            width: 100%;
            padding: 10px;
            background: #4f46e5;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
        }
 .container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height : 100%;
    text-align: center;
 }
</style>
</head>
<body>

<div class = "container">
<img src="{{ asset('imagini/eagle-8325204_1280.png') }}" alt="Logo" style = "width : 200px; height : auto;">
<h1> Adauga un angajat in baza de date </h1>

<form action = "{{ route('angajati.store')}}" method = "POST">
    @csrf
    <input type = "text" name = "nume" placeholder="Nume">
    <input type = "text" name = "prenume" placeholder="Prenume">
    <input type = "email" name = "email" placeholder = "Email">
    <input type = "string" name = "phone" placeholder = "Phone">
    <button type = "submit"> Adauga </button>
</form>
<p><a href = "{{route('dashboard')}}">Inapoi la pagina principala</a></p>
</div>

</body>

</html>