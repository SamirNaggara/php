<?php

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    if (isset($_COOKIE["preferenceLangue"])){

        $preferenceLangue = $_COOKIE["preferenceLangue"]; // J'enregistre la preference de la langue de l'utilisateur dans la variable $preferenceLangue

        if ($preferenceLangue == "francais"){
            header("location:francais.php");
        }elseif ($preferenceLangue == "english"){
            header("location:english.php");
        }elseif ($preferenceLangue == "spanish"){
            header("location:spanish.php");

        }
        

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
        <title>Les cookies en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
    <!-- Placer 3 boutons (avec bootstrap ?) qui menent vers les pages francais.php, english.php, spanish.php -->   

    <a href="francais.php" class="btn btn-outline-primary btn-lg">Français</a>
    <a href="english.php" class="btn btn-outline-secondary btn-lg">English</a>
    <a href="spanish.php" class="btn btn-outline-success btn-lg">Spanish</a>


    <!-- Objectif : La première fois qu'un utilisateur choisit une langue, on enregistre un cookie avec sa prérence de langue.
    Ensuite, la deuxieme qu'il se connecte sur le site, on le redirige automatiquement ver sa langue de préférence -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






