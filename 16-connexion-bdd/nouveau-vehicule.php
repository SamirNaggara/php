<?php

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $msg="";


    if (isset($_POST["marque"]) AND !empty($_POST["marque"])
        AND isset($_POST["modele"]) AND !empty($_POST["modele"])
        AND isset($_POST["couleur"]) AND !empty($_POST["couleur"])
        AND isset($_POST["immatriculation"]) AND !empty($_POST["immatriculation"])){
            
            $marque = addslashes(htmlspecialchars($_POST["marque"]));
            $modele = addslashes(htmlspecialchars($_POST["modele"]));
            $couleur = addslashes(htmlspecialchars($_POST["couleur"]));
            $immatriculation = addslashes(htmlspecialchars($_POST["immatriculation"]));

            if (strlen($immatriculation) <= 9){ // Si l'imatriculation est inférieu a 9, on peux enregistrer les resultaants

                
                $bdd = new PDO('mysql:host=localhost;dbname=taxis;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

                $resultat = $bdd->exec("INSERT INTO `vehicule`(`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('$marque','$modele','$couleur','$immatriculation')");

                if ($resultat){
                    $msg = "<p>Bravo, votre nouvelle voiture a bien été enregistrée !<br>Marque : $marque<br>modele : $modele<br>Couleur : $couleur<br>Immatriculation : $immatriculation</p>";
                }
            }else{
                $msg = "<p>Attention, voter plaque d'immatriculation ne peux pas dépasser 9 caractères</p>";
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
        <title>Formulaire nouveau véhicule</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- Objectif : Creer un formulaire, qui enregistre automatiquement le nouveau véhicule dans la base de donnée  -->

        <form action="" method="post">
            <div class="conteneurMarque">
                <label for="marque">Marque : </label>
                <input type="text" name="marque" id="marque">
            </div>
            <div class="conteneurModele">
                <label for="modele">Modele : </label>
                <input type="text" name="modele" id="modele">
            </div>
            <div class="conteneurCouleurcouleur">
                <label for="couleur">Couleur : </label>
                <input type="text" name="couleur" id="couleur">
            </div>
            <div class="conteneurImmatriculation">
                <label for="immatriculation">Immatriculation : </label>
                <input type="text" name="immatriculation" id="immatriculation">
            </div>
            <input type="submit" value="Enregistrer ma voiture">
        </form>
        <div class="resultat">
            <?= $msg ?>
        </div>
    </body>
</html>






