<?php
    $messageResultat = "Aucun calcul n'a été effectué";

    if (isset($_GET["nombre1"]) AND isset($_GET["nombre2"]) AND isset($_GET["operateur"]) AND !empty($_GET["nombre1"]) AND !empty($_GET["nombre2"]) AND !empty($_GET["operateur"])){
        
        $nombre1 = $_GET["nombre1"];
        $nombre2 = $_GET["nombre2"];
        $operateur = $_GET["operateur"];



        if ($operateur == "addition"){
            $resultat = $nombre1 + $nombre2;
            $messageResultat = "Le resultat de $nombre1 + $nombre2 est $resultat";

        }elseif ($operateur == "soustraction"){
            $resultat = $nombre1 - $nombre2;
            $messageResultat = "Le resultat de $nombre1 - $nombre2 est $resultat";
        }elseif ($operateur == "multiplication"){
            $resultat = $nombre1 * $nombre2;
            $messageResultat = "Le resultat de $nombre1 * $nombre2 est $resultat";
        }elseif ($operateur == "division"){
            $resultat = $nombre1 / $nombre2;
            $messageResultat = "Le resultat de $nombre1 / $nombre2 est $resultat";
        }

        

        
    }else{
        echo "Le formulaire n'a pas été remplie correctement";
    }





?>





<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Corrigé d'une calculatrice</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <form action="" method="get">
            <div class="conteneurNombre1">
                <label for="nombre1">Nombre 1 : </label>
                <input type="number" id="nombre1" name="nombre1">
            </div>
            <div class="conteneurOperateur">
                <label for="operateur">Operation : </label>
                <select name="operateur" id="operateur">
                    <option value=""> Choisissez une opération </option>
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">*</option>
                    <option value="division">/</option>
                </select>
            </div>
            <div class="conteneurNombre2">
                <label for="nombre2">Nombre 2 : </label>
                <input type="number" id="nombre2" name="nombre2">
            </div>
            <input type="submit">
        </form>

        <div class="conteneur-resultat m-5">
            <div class="alert alert-success" role="alert">
                <?= $messageResultat ?>
            </div>
        </div>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






