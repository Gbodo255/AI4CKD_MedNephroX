<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('visitpatient') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nom">
        <input type="text" name="surname" placeholder="prenom">
        <input type="date" name="dateDeReunion" placeholder="datede reunion">
        <input type="text" name="heure" placeholder="heure">
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>