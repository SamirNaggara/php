<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // On initialise la variable msg 
    $msg = "";
    if (isset($_POST['nom']) AND !empty($_POST['nom'])
        AND isset($_POST['prenom']) AND !empty($_POST['prenom'])){

            // Enregistrement des données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];


            // Connexion a la bdd
            $bdd = new PDO('mysql:host=localhost;dbname=taxis;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            // Preparation de la requete
            $enregistrement = $bdd->prepare("INSERT INTO conducteur (prenom, nom) VALUES (:prenom, :nom)");

            // On lie les parametre de la requete aux variables
            $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
            $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);

            // On execute la requete et on envoie un message de succes si une ou plusieurs lignes ont bien été modifiés
            if ($resultat = $enregistrement->execute()){
                $msg = "<p>L'enregistrement s'est déroulé correctement</p>";
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
        <title>Formulaire pour entrer un nouvaeu conducteur</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <form action="" method="post">
            <div class="conteneurNom">
                <label for="nom">Votre nom :</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="conteneurPrenom">
                <label for="prenom">Votre prenom :</label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <input type="submit">
        </form>
        <div class="message">
            <?= $msg ?>
        </div>
    </body>
</html>






