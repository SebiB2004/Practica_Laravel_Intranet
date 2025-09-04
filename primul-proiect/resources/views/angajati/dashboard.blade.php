<!DOCTYPE html>
<html>
<head>
<title> Intranet SEBIRA SRL </title>
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

 button{
    margin : 10px;
    padding : 10px 20px;
    font-size: 16px;
 }


</style>

</head>
<body>

<div class = "container">
<img src="imagini/eagle-8325204_1280.png" alt="Logo" id = "imagine" style = "width : 200px; height : auto;">
<h1> Bun venit in Intranet! </h1>


<button id = "adaugaAngajat"> Adauga un angajat</button>
<button id = "listaAngajati"> Lista angajatilor </button>
<button id = "documenteUtile"> Documente utile </button>
<form id="logoutForm" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" id="butonLogout">Logout</button>
</form>

</div>


<script> 
document.getElementById('adaugaAngajat').addEventListener('click', function(){
    window.location.href = "{{route ('angajati.create')}}";
});

document.getElementById('listaAngajati').addEventListener('click', function(){
    window.location.href = "{{route ('angajati.index')}}";
});

document.getElementById('documenteUtile').addEventListener('click', function(){
    window.location.href = "{{route ('documente')}}";
});
</script>

</body>

</html>