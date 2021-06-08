<?php

    // Connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=taxis;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


    // $resultat = $bdd->exec("SELECT * FROM vehicule");

    // la methode "exec()" renvoie en résultat le nombre de ligne affecté.
    // Donc exec ne nous est pas utile pour recupérer des infos de notre base de données
    // A la place, on utilisera query

    // echo $resultat;


    // METHODE DU FETCH

    $resultats = $bdd->query("SELECT * FROM vehicule");

    // La méthode rowCount permet de recuperer le nombre de lignes du résultat
    echo $resultats->rowCount();
    

    $affichage = "";
    // On demarre une boucle, qui va de 1 à "nombre de ligne", et qui fetch (recupère les informations de la ligne) les lignes une par une
    for($i=1;$i<=$resultats->rowCount();$i++){

        $ligne = $resultats->fetch(PDO::FETCH_BOTH);
        // FETCH_ASSOC permet de donner en indice de la liste le nom des colonnes
        // FETCH_NUM permet de donner en indice de la liste un nombre (0,1,2,3...) 
        // FETCH_BOTH permet de donner en indice de la liste a la fois un nombre et à la fois le nom des colonnes 


        $affichage .= "Ceci est une voiture de la marque " . $ligne['marque'] . " et du modèle " . $ligne['modele'] . ". Sa couleur est " . $ligne['couleur'] . " et son immatriculation est " . $ligne['immatriculation'] . "<br><br>";

        // echo "<pre>";
        // print_r($ligne);
        // echo "</pre>";
    }

    // $ligne1 = $resultats->fetch(PDO::FETCH_ASSOC);
    // $ligne2 = $resultats->fetch(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($ligne1);
    // print_r($ligne2);
    // echo "</pre>";




?>



<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Faire un SELECT en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
    <?= $affichage ?>
    </body>
</html>






