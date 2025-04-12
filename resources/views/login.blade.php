<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h1>MedNephroX</h1>
        <p>Faciliter la gestion de vos patients avec MedNephroX.</p>
        <h2>Entrez vos données de connexion afin d'accédez à votre compte.</h2>
        <form class="myform" action="{{ route('logitraitpage') }}" method="post">
            @csrf
            <div class="champ">
                <label for="">Email</label> <br>
                <input type="email" name="email" id="email">
            </div>
            <div class="champ">
                <label for="">Mot de passe</label> <br>
                <input type="password" name="motDePasse" id="motDePasse">
            </div>
            <input type="submit" value="Soumettre" class="soumission">
        </form>
    </div>
</body>

</html>