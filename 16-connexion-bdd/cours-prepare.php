<?php

// Connexion a la bdd
$bdd = new PDO('mysql:host=localhost;dbname=taxis','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

// On debute notre prepare
$marque = "Skoda";
$modele = "Fabia";
$couleur = "Gris";
$immatriculation = "');DROP DATABASE taxis;";

$enregistrement = $bdd->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)");
// Cette ligne permet de preparer une requete. Avec le préfixe ":" on insere des paramètres dont dont on précisera et la nature et la valeur plus tard

$enregistrement->bindParam(':marque', $marque, PDO::PARAM_STR);
$enregistrement->bindParam(':modele', $modele, PDO::PARAM_STR);
$enregistrement->bindParam(':couleur', $couleur, PDO::PARAM_STR);
$enregistrement->bindParam(':immatriculation', $immatriculation, PDO::PARAM_STR);
// Avec bindParam, on associe la propriété :marque avec la variable $marque, en s'assurant bien que la promriété transmise soit de type str
// PDO::PARAM_STR (string), PDO::PARAM_INT (entier) et PDO::PARAM_BOOL (boolean) sont les paramètres les plus utilisés

$resultat = $enregistrement->execute();

// On execute la requete préparée. On recupere dans $resultat le nombre de ligne affecté (ou false si il y a eu une erreur)

echo $resultat;



//INSERT INTO `vehicule`(`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('$marque','$modele','$couleur','$immatriculation')



?>




<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les prepares pour executer une requete</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
       
    </body>
</html>






