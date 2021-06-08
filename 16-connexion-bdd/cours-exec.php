<?php

    $bdd = new PDO('mysql:host=localhost;dbname=taxis','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    
/* PDO contient 4 arguements :
        1er : Chaine de caractere avec le host (serveur) et le nom de la bdd
        2ieme : Utilisateur de la bdd
        3ieme : MDP de l'utilisateur
        4ieme : (facultatif) Mode de gestion des erreurs

  */


    $resultat = $bdd->exec("INSERT INTO `conducteur`(`prenom`, `nom`) VALUES (\"Olivier\",\"Vera\")");
    // exe effectué sur l'objet bdd permet d'executer la requete de notre choix.
    // Si l'opération réussis, $resultat renvoie le nombre de lignes affectées, sinon ""

    // echo $resultat;

    // $resultat = $bdd->exec("UPDATE vehicule SET modele='Astraaaaa' WHERE id_vehicule=507");

    // echo $resultat;


    $resultat = $bdd->exec("DELETE FROM conducteur WHERE nom='Vera'");
    
    if ($resultat){
        echo "Il y a bien eu une modification de la base de donnée";
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
        <title>Connexion à la base de donnée en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
       
    </body>
</html>






