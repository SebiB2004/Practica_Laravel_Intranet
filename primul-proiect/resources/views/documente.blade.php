<!DOCTYPE html>
<html>
<head>
    <title>Documente utile</title>
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
    </style>
</head>
<body>
    <div class = "container">
    <img src="{{ asset('imagini/eagle-8325204_1280.png') }}" alt="Logo" style = "width : 200px; height : auto;">
    <h1>Documente utile</h1>

        <ul>
            @foreach($documents as $doc)
                <li>
                    <a href="{{ route('document.download', ['filename' => $doc]) }}">
                        {{ $doc }}
                    </a>
                </li>
            @endforeach
        </ul>
        <p><a href = "{{route('dashboard')}}">Inapoi la pagina principala</a></p>
    </div>
  

</body>
</html>
