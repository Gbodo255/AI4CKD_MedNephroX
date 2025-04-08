<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylisation.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="logo">
            MedNephroX
        </div>
        <div class="texte">
            <div class="cont">
                <p class="title">Créez votre compte</p>

                <p class="icones">
                    <i class="fa-brands fa-google fa"></i>
                    <i class="fa-brands fa-facebook fa"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-twitter"></i>
                </p> <br><br>
                <form action="{{ route('traitement') }}" method="post">
                    @csrf
                    <div class="champ">
                        <label for="">Nom</label> <br>
                        <input type="text" name="nom" id="nom">
                    </div>
                    <div class="champ">
                        <label for="">Email</label> <br>
                        <input type="mail" name="email" id="email">
                    </div>
                    <div class="champ">
                        <label for="">Mot de passe</label> <br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="second">
                        <div class="champ1">
                            <input class="check" type="checkbox" name="check" id="check"> J'accepte les termes et conditions d'utilisation de la plateforme.
                        </div>
                        <input type="submit" value="Soumettre" class="soumission">
                        <p class="third">Vous avez déjà un compte ? <a href="{{ route('connexion') }}">Connectez vous.</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="illustration">
            <img src="images\az.png" alt="">
        </div> -->
    </div>
</body>

</html>