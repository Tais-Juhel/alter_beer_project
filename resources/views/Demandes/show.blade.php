<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/dist/show.scss"/>
    <title>Affichage d'une demande</title>
</head>
<body>
    @if(!is_null($demande))
    <h1>{{ $demande->name }}</h1>

        <div>
            <p><strong>Type :</strong> {{ $demande->type }}</p>
            <p><strong>Contact :</strong> {{ $contact->firstname }} {{ $contact->name }}</p>
            <p><strong>Entreprise :</strong> {{ $entreprise->name }} </p>
        </div>
    @else
        <p>le demande n'existe pas</p>
    @endif

    <a href="{{ route('demandes.index') }}">Retour a l'accueil</a>
</body>
</html>