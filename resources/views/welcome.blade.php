<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="slide1">
        <div class="navbar">
            <p class="logo">MedNephroX</p>
            <p class="lache">
                <button><a href="{{ route('inscription') }}">S'inscrire</a></button>
                <button><a href="{{ route('connexion') }}">Connexion</a></button>
            </p>
        </div>
        <div class="content">
            <div class="presentation">
                <p class="solution">AI4CKD</p>
                <h1>
                    Chronic Kidney
                    Disease <p class="solu">Solution
                    <p>
                </h1>
                <p class="prest">
                    Gérer plus facilement vos les données de vos patients, gagner en temps et en efficacité gràce aux
                    modèles d'intelligence artificielle. Avec MedNephroX, combattons ensemble la Maladie Rénale
                    Chronique
                    (MRC). <br>
                    <button class="start"><a href="{{ route('connexion') }}">Commencez</a></button>
                </p>
            </div>
            <div class="cercle">

            </div>
        </div>
    </div>
    <div class="slide2">
        <h1 class="valeurs">Nos valeurs</h1>
        <div class="slide">
            <div class="fonstion">
                <p class="titre">
                    Suivi Médical Centralisé
                </p>
                <p class="fonc">
                    Suivi efficace et coordination optimale entre professionnels de santé pour un meilleure gain de temps.
                </p>
            </div>
            <div class="fonstion">
                <p class="titre">
                    Santé <br> numérique
                </p>
                <p class="fonc">
                    Décisions cliniques plus rapides et plus précises grâce à une analyse intelligente des données patients.
                </p>
            </div>
            <div class="fonstion">
                <p class="titre">
                    Collaboration médicale renforcée
                </p>
                <p class="fonc">
                    Mise en relation des professionnels de santé pour partager expériences, connaissances et données utiles dans la lutte contre les maladies chroniques.
                </p>
            </div>
        </div>
        <div class="statisti">
            <div class="stats">

            </div>
            <div class="stats">
    
            </div>
            <div class="stats">
    
            </div>
        </div>
    </div>
    <div class="slide3">
        <div class="partenaires">

        </div>
        <div class="footer">

        </div>
    </div>
</body>

</html>