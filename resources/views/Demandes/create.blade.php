<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dist/create.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Création d'une demande</title>
</head>
<body>
    <h1>Création d'une demande</h1>

    <form class="container" method="post" action="{{ route('demandes.store') }}">

        @csrf

        <label for="name">Nom : </label>
        <input id="name" type="text" name="name" required>

        <label for="type">Type : </label>
        <input id="type" type="text" name="type" required>

        <label for="contact">Contact :</label>
        <select id="contact" name="contact" required>
            @foreach($contacts as $contact)

                <option value="{{ $contact->id }}">{{ $contact->firstname }} {{ $contact->name }}</option>

            @endforeach
        </select>
        <div class="ajout">
            <div class="retour">
                <a href="{{ route('demandes.index') }}">Retour</a>
            </div>
            <input id="valider" type="submit">
        </div>
    </form>
</body>
</html>