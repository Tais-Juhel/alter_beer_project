<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/dist/show.css"/>
    <title>Affichage d'un contact</title>
</head>
<body>
    <div class="container">
        @if(!is_null($contact))
        <h1>{{ $contact->firstname }} {{ $contact->name }}</h1>
        
            <div class="adresse">
                <p><strong>Mail :</strong> {{ $contact->email }}</p>
                <p><strong>Tel. :</strong> {{ $contact->number }}</p>
                <p><strong>Entreprise :</strong> {{ $entreprise->name }} </p>
            </div>
        @else
            <p>le contact n'existe pas</p>
        @endif
        <div class="retour">
            <a href="{{ route('contacts.index') }}">Retour</a>
        </div>
    </div>
</body>
</html>