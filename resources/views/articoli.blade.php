<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="{{route('home')}}">home</a> <a href="{{route('contatti')}}">Chi sono</a> <a href="{{route('articoli')}}">Articoli</a>
    <h1>{{$titolo}}</h1>
    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave=> $articolo)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$articolo['titolo']}}</h5>
                    <h6 class="card-title">{{$articolo['autore']}}</h6>
                    <h6 class="card-title">{{$articolo['categoria']}}</h6>
                    <p class="card-text">{{$articolo['descrizione']}}</p>
                    <a href="{{route('articoli.articolo',['id'=>$chiave])}}" class="card-link">Card Link</a>
                </div>

            </div>

            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>