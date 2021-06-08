<?php

    $nom = ""; // On declare la variable $nom comme une chaine de caractère vide
    if (isset($_GET["nom"])){ // Si un nom est renvoyé par la méthode GET, alors...
        $nom = $_GET["nom"]; // Stocker la valeur dans la variable $nom
    }

    $prenom = "";
    if (isset($_GET['prenom'])){
        $prenom = $_GET["prenom"];
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
        <title>La méthode GET</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <form action="" method="get" class="form">
            <div class="conteneurNom">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="conteneurPrenom">
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <input type="submit">
        </form>

        <h2 class="text-center m-5"><?= ucfirst($nom) . " " . ucfirst($prenom); ?></h2> <!-- On affiche la variable-->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






