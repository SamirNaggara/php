<?php
    // echo "<pre>";
    // echo print_r($_GET) . "<br>";
    // echo "</pre>";

    if (isset($_GET['prenom']) AND !empty($_GET["prenom"]) AND isset($_GET['mdp']) AND !empty($_GET["mdp"])){
        $prenom = $_GET["prenom"];
        $mdp = $_GET["mdp"];

        $msg = "Le prenom est $prenom et le MDP est $mdp";
    }else{
        $msg = "Le formulaire n'a pas été remplis du tout ou correctement";
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
        <title>Exemple de Get</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <form action="" method="get">
            <div class="conteneurPrenom">
                <label for="prenom">Prenom : </label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="conteneurMdp">
                <label for="mdp">Mdp : </label>
                <input type="password" name="mdp" id="mdp">
            </div>
            <input type="submit">
        
        </form>

        <div class="resultat">
            <?php echo $msg ?>
        </div>

    </body>
</html>






