<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/dist/show.css"/>
    <title>Affichage d'une entreprise</title>
</head>
<body>
    <div class="container">
        @if(!is_null($entreprise))
            <h1>{{ $entreprise->name }}</h1>

            <div class="image">
                <img src="../../../public/img/{{  $entreprise->url }}" alt="logo-entreprise">
            </div>

            <div class="adresse">
                <p><strong>Adresse :</strong> {{ $entreprise->adresse }}</p>
                <p><strong>Type :</strong> {{ $entreprise->type }}</p>
            </div>
        @else
            <p>l'entreprise n'existe pas</p>
        @endif
            <div class="retour">
                <a href="{{ route('entreprises.index') }}">Retour</a>
            </div>
    </div>
</body>
</html>