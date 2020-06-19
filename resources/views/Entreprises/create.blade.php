<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dist/create.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Création d'une entreprise</title>
</head>
<body>
    <h1>Création d'une entreprise</h1>

    <form class="container" method="post" action="{{ route('entreprises.store') }}">

        @csrf
        <div class="nom bulle">
            <label for="name">Nom : </label>
            <input id="name" type="text" name="name" required>
        </div>

        <div class="adress bulle">
            <label for="adresse">Adresse : </label>
            <input id="adresse" type="text" name="adresse" required>
        </div>

        <div class="domaine bulle">
            <label for="Type">Domaine de l'entreprise : </label>
            <input id="type" type="text" name="type" required>
        </div>

        <div class="logo bulle">
            <label for="image" class="label-file">Logo :</label>
            <input class="btn btn-default btn-file" type="file" name="image" id="image" title="File" required>
        </div>

        <input id="valider" type="submit">
    </form>
</body>
</html>