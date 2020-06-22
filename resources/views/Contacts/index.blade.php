<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dist/index.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Index des contacts</title>
</head>
<body>
    <div class="container-sm">
        <h1>Index des contacts</h1>

        <a id="ajouter" href="{{ route('contacts.create') }}" class="btn btn-primary" title="Ajouter un contact">Ajouter un contact</a>

        <ul class="list-group">
            @foreach($contacts as $contact)

                <li class="list-group-item">
                    <a href="{{ route('contacts.show', $contact->id) }}" title="{{ $contact->name }}">{{ $contact->name }} {{ $contact->firstname }}</a>
                    <div class="edit-delete">
                        <a class="modifier" href="{{ route('contacts.edit', $contact->id) }}"">Modifier</a>
                        <a class="supprimer" href="{{ route('contacts.delete', $contact->id) }}">Supprimer</a>
                    </div>
                </li>

            @endforeach
        </ul>

        <a id="retour" href="{{ route('dashboard.index') }}" class="btn btn-primary" title="Retour dashboard">Retour</a>
    </div>
</body>
</html>