<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <form action="{{ route('traitpage') }}" method="post">
                @csrf
                <input type="text" placeholder="nomPatient" name="name" id="name">
                <input type="text" placeholder="prenomPatient" name="surname" id="surname">
                <input type="date" placeholder="date de naissance" name="naissance" id="naissance">
                <input type="text" placeholder="sexe" name="sexe" id="sexe">
                <input type="text" placeholder="adresse" name="adresse" id="adresse">
                <input type="text" placeholder="numero de telephone" name="phonenumber" id="phonenumber">
                <input type="email" placeholder="adressemail" name="email" id="email">
                <input type="submit" value="Soumettre">
            </form>
        </div>
        <div class="listepatients">

        </div>
    </div>

</body>

</html>