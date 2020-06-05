<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/create.sass"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Création d'une entreprise</title>
</head>
<body>
    <h1>Création d'une entreprise</h1>

    <form class="container" method="post" action="{{ route('entreprises.store') }}">

        @csrf

        <label for="name">Nom : </label>
        <input id="name" type="text" name="name" required>

        <label for="adresse">Adresse : </label>
        <input id="adresse" type="text" name="adresse" required>

        <label for="Type">Type : </label>
        <input id="type" type="text" name="type" required>

        <input id="valider" type="submit">
    </form>
</body>
</html>