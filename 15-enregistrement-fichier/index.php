<?php


// Ecrire dans un fichier texte
    $f = fopen("sauvegarde.txt", "r+");

    
    // a ou a + creent le fichier (ou l'ouvre), et place le pointeur à la fin du document, et écrit à partir de là
    // w ou w+ permet d'effacer le contenue du fichier si il existe deja, l'ouvre, puis écris dedans
    // r+ permet d'ouvrir le document, puis de réécrire en insertion (donc en écrasant ce qui était deja la)


    fwrite($f, "Je suis un ajout avec r+\n");

    $f = fclose($f);


// Lire un fichier texte

    $fichier = file("sauvegarde.txt"); // file permet de lire le fichier et de le stocker dans une liste

    // echo "<pre>";
    // print_r($fichier);
    // echo "</pre>";

// Parcourir la liste $fichier

    foreach($fichier as $cle => $valeur){

        echo "la ligne $cle du document contient : $valeur" . "<br>";
        
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
        <title>Enregistrer dans un fichier en php</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
    


    </body>
</html>






