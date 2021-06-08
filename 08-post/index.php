<?php

$msg="";
if (isset($_GET["message"]) AND $_GET["message"] == "error"){
    $msg = '<div class="alert alert-danger" role="alert">
    Votre mot de passe est incorrect !
  </div>';
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
        <title>La méthode Post</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <form action="affichage.php" method="post">
            <div class="conteneurPseudo">
                <label for="pseudo">Pseudo : </label>
                <input type="text" name="pseudo" id="pseudo">
            </div>
            <div class="conteneurPrenom">
                <label for="prenom">Prenom : </label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="conteneurNom">
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="conteneurMdp">
                <label for="mdp">Mot de passe : </label>
                <input type="password" name="mdp" id="mdp">
            </div>
            <div class="conteneurEmail">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="conteneurAdresse">
                <label for="adresse">Adresse : </label>
                <input type="text" name="adresse" id="adresse">
            </div>
            <div class="conteneurMessage">
                <label for="message">Message : </label>
                <textarea name="message" id="message" cols="30" rows="10">Votre message</textarea>
            </div>
            <input type="submit">
        
        </form>

        <div class="messageErreur">
            <?= $msg ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






