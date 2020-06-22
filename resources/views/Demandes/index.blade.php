<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dist/index.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Historique des demandes</title>
</head>
<body>
    <div class="container-sm">
        <h1>Historique des demandes</h1>

        <a id="ajouter" href="{{ route('demandes.create') }}" class="btn btn-primary" title="Ajouter un demande">Ajouter une demande</a>

        <ul class="list-group">
            @foreach($demandes as $demande)

                <li class="list-group-item">
                    <a href="{{ route('demandes.show', $demande->id) }}" title="{{ $demande->name }}"><strong>{{ $demande->created_at }}</strong> - {{ $demande->name }} {{ $demande->firstname }}</a>
                    <div class="edit-delete">
                        <a class="modifier" href="{{ route('demandes.edit', $demande->id) }}"">Modifier</a>
                        <a class="supprimer" href="{{ route('demandes.delete', $demande->id) }}">Supprimer</a>
                    </div>
                </li>
                
            @endforeach
        </ul>

        <a id="retour" href="{{ route('dashboard.index') }}" class="btn btn-primary" title="Retour dashboard">Retour</a>
    </div>
</body>
</html>