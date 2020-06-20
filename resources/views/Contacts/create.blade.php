<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dist/create.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Création d'un contact</title>
</head>
<body>
    <h1>Création d'un contact</h1>

    <form class="container" method="post" action="{{ route('contacts.store') }}">

        @csrf
        <div class="nom bulle">
            <label for="name">Nom : </label>
            <input id="name" type="text" name="name" class="neumo" required>
        </div>

        <div class="prenom bulle">
            <label for="firstname">Prénom : </label>
            <input id="firstname" type="text" name="firstname" class="neumo" required>
        </div>

        <div class="tel bulle">
            <label for="number">Téléphone : </label>
        <input id="number" type="tl" name="number" class="neumo" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" placeholder="Format - 06.32.52.45.78" required>
        </div>

        <div class="mail bulle">
            <label for="email">Email : </label>
            <input id="email" type="text" name="email" class="neumo" required>
            <label for="email_verified_at">Vérifier votre Email : </label>
            <input id="email_verified_at" type="text" name="email_verified_at" class="neumo" required>
        </div>

        <div class="entreprise bulle">
            <label for="entreprise">Entreprise :</label>
            <select id="entreprise" name="entreprise" class="neumo" required>
                @foreach($entreprises as $entreprise)
    
                    <option value="{{ $entreprise->id }}">{{ $entreprise->name }}</option>
    
                @endforeach
            </select>
        </div>

        <div class="ajout">
            <div class="retour">
                <a href="{{ route('contacts.index') }}">Retour</a>
            </div>
            <input id="valider" type="submit">
        </div>
        
    </form>
</body>
</html>