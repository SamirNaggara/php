<?php

    // Connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=taxis;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    // On effectue notre requete avec query 
    $resultat = $bdd->query("SELECT * FROM vehicule");

    // Avec Fetch_all, on recupère toutes nos valeurs directement dans notre variable
    $toutesNosLignes = $resultat->fetchAll();


    // On parcourt grâce à la boucle foreach la liste $toutesNosLignes.
    // On recupère la liste de chaque véhicule (ligne par ligne) dans la variable locale $valeur
    foreach($toutesNosLignes as $indice=>$valeur){
        echo "Ceci est une voiture de la marque " . $valeur["marque"] . " et du modèle " . $valeur["modele"] . ". Sa couleur est " . $valeur["couleur"] . " et son immatriculation est " . $valeur["immatriculation"] . "<br><br>";

    }

     

    echo "<pre>";
    print_r($toutesNosLignes);
    echo "</pre>";

?>
<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Faire un SELECT FETCH ALL en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
    
    </body>
</html>






