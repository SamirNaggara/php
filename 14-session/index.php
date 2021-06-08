<?php

session_start(); // Permet de demarrer une nouvelle session


// Si le pseudo et le mdp sont bon, alors on enregistre dans la session que la personne est connectée
if (isset($_POST["pseudo"]) AND isset($_POST["mdp"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["mdp"])){
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    if ($pseudo == "jojo" AND $mdp == "1234"){

        $_SESSION["is_connected"] = true;
        // unset($_SESSION['is_connected']); Permet de supprimer la variable is connected de SESSION
        // session_destroy() permet de détruire totalement la session 

    }
}


// Si la personne est connecté, on le dis dans la variable $msg, si elle n'est pas connecté, on le dis aussi

if (isset($_SESSION["is_connected"]) AND $_SESSION['is_connected'] == true){
    // $msg = "Nous sommes bien connecté";
    header("location:membre.php");
}else{
    $msg = "Nous ne sommes pas connecté pour le moment";
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
        <title>Sessions en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

    <form action="" method="post">
        <div class="conteneurPseudo">
            <label for="pseudo">Pseudo : </label>
            <input type="text" name="pseudo" id="pseudo">
        </div>
        <div class="conteneurMdp">
            <label for="mdp">Mot de passe : </label>
            <input type="password" name="mdp" id="mdp">
        </div>
        <input type="submit">
    </form>
    
    <div class="connected">
        <p><?= $msg ?></p>
    </div>
    </body>
</html>






