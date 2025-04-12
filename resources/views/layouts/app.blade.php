<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styledash.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="sidebar">
            <div class="logo">
                MedNephroX
            </div>
            <div class="lien">
                <div class="bouton">
                    <a href="{{ route('dashoard') }}">Accueil</a>
                    <a href="{{ route('visit') }}">Agenda</a>
                    <a href="{{ route('listepatient') }}">Patients</a>
                    <a href="">Statistiques</a>
                    <a href="">Messagerie</a>
                </div>
                <div class="another">
                    <a href="">Paramètres</a>
                    <button class="logout">Deconnexion</button>
                </div>

            </div>
        </div>
        <div class="workspace">
            <div class="navbar">
                <div class="part1">
                    <input type="search">
                </div>
                <div class="part2">
                    <p class="name">Dr Ratheil</p>
                    <img src="" alt="" class="profil">
                </div>
            </div>
            {{-- Le contenu spécifique à chaque vue --}}
            @yield('content')
        </div>
    </div>

</body>

</html>