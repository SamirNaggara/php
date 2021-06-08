<?php

 // Connexion à la BDD
 $bdd = new PDO('mysql:host=localhost;dbname=taxis;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



    if (isset($_GET["selectCouleur"]) AND !empty($_GET["selectCouleur"])){
        // Si le formulaire est bien remplie
        
        $couleur = $_GET["selectCouleur"];
         // On stock la couleur choisie dans la variable $couleur 

        $enregistrement = $bdd->prepare("SELECT * FROM vehicule WHERE couleur = :couleur");
        // On prepare la requete dans $enregistrement

        $enregistrement->bindParam(':couleur', $couleur, PDO::PARAM_STR);
        // Dans enregistrement, on lie :couleur avec la variable $couleur

        $resultat = $enregistrement->execute();
        // Puis on execute la requete dans enregistrement
        // $enregistrement contient le resultat de notre requete
        // $resultat contient le nombre de lignes affecté par notre requete (ou "" si erreur)

        if ($resultat){
            // On rentre dans la condition si et seulement si une ou plusieurs lignes sont renvoyées

            $toutesMesVoituresDeCouleurs = $enregistrement->fetchAll();

            // echo "<pre>";
            // print_r($toutesMesVoituresDeCouleurs);
            // echo "</pre>";

        }else{
            $msg = "La requete n'a renvoyé aucun résultat";
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
        <title>Cours SELECT avec Prepare</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
       <form action="" method="get">
            <div class="conteneurSelect">
                <select name="selectCouleur" id="selectCouleur">
                    <option value="">Choisissez une couleur</option>
                    <option value="noir">Noir</option>
                    <option value="bleu">Bleu</option>
                    <option value="vert">Vert</option>
                    <option value="gris">Gris</option>
                </select>
                <input type="submit">
            </div>
       </form>

       <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Couleur</th>
                    <th>Immatriculation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($toutesMesVoituresDeCouleurs)){
                    // La première fois que j'arrive sur la page, je ne rentre pas dans le if du début, donc $toutesMesVoituresDeCouleurs n'existe pas et renvoie une erreur
                    // Je veux parcourir la boucle, uniquement si elle existe

                    foreach($toutesMesVoituresDeCouleurs as $indice=>$valeur){
                        echo "<tr>";
                            echo "<td>" . $valeur[0] . '</td>';
                            echo "<td>" . $valeur[1] . '</td>';
                            echo "<td>" . $valeur[2] . '</td>';
                            echo "<td>" . $valeur[3] . '</td>';
                            echo "<td>" . $valeur[4] . '</td>';
                            echo "<td>" . "</td>";
                        echo "</tr>";
                       
                    }
                }
                    
                    ?>
            </tbody>
        </table>






       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






