<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.scss"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Entreprises</title>
</head>
<body>
    <div class="container-sm">
        <h1 class="li-entreprises">LISTES DES ENTREPRISES</h1>

        <a href="{{ route('entreprises.create') }}" id="ajouter" class="btn btn-primary" title="Ajouter">AJOUTER</a>

        <ul class="list-group">
            @foreach($entreprises as $entreprise)
                
                <li class="list-group-item">
                    <img src="img/facebook.png" alt="facebook">
                    <a href="{{ route('entreprises.show', $entreprise->id) }}" title="{{ $entreprise->name }}">{{ $entreprise->name }} {{ $entreprise->firstname }}</a>
                </li>

            @endforeach
        </ul>
    </div>
</body>
</html>