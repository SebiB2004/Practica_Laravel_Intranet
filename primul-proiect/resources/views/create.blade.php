<!DOCTYPE html>
<html>
<head>
<title> Angajati! </title>
</head>
<body>

<h1> Salut Sebi! </h1>

<form action = "{{ route('angajati.store')}}" method = "POST">
    @csrf
    <input type = "text" name = "nume" placeholder="Nume">
    <input type = "email" name = "email" placeholder = "Email">
    <button type = "submit"> Adauga </button>
</form>

</body>

</html>