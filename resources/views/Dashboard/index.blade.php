<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/dist/index.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Dashboard</h1>
        <div class="nav">
            <div class="entreprises">

                <a href="{{ route('entreprises.index') }}" id="entreprise" class="btn btn-primary">Entreprises</a>
            </div>
            <div class="contacts">

                <a href="{{ route('contacts.index') }}" id="contacts" class="btn btn-primary">Contacts</a>
            </div>
            <div class="demandes">

                <a href="{{ route('demandes.index') }}" id="demandes" class="btn btn-primary">Demandes</a>
            </div>
        </div>
    </div>
</body>
</html>