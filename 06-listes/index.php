<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les listes en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- <link rel="stylesheet" href="css/reset.css"> -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

        <?php
            $listePrenom = array("Olivier","Kim","Pierre","Khaled","Nidhal","Amandine");
            
            echo "<pre>";
            print_r($listePrenom);
            echo "</pre>";

            var_dump($listePrenom);

            $unPrenom = $listePrenom[5];

            echo $unPrenom . "<br>";


            $listeFruits = []; // une autre façon de demarrer une liste


            $listeFruits[] = "Fraise";
            $listeFruits[] = "Pomme";
            $listeFruits[] = "Poire";

            var_dump($listeFruits);

            $listePrenom[] = "christian";

            var_dump($listePrenom);

            echo "<br>" . count($listePrenom) . "<br>"; // Renvoie le nombre d'éléments dans la liste
            echo "<br>" . sizeof($listePrenom) . "<br>"; // Renvoie le nombre d'élément dans la liste

            for($i=0;$i<count($listePrenom);$i++){ // Boucle pour afficher les prénoms de la $listePrenom
                ?>
                <p><?= $listePrenom[$i]; ?></p>
                <?php
            }

            // Boucle pour afficher les fruits de la liste $listeFruits

            for($j=0; $j<sizeof($listeFruits);$j++){
                ?>
                    <p><?= $listeFruits[$j]; ?></p>
                <?php
            }

            


            // On peux utiliser un tableau associatif pour mieux repérer nos valeurs
            $couleurs = ["rouge" => "#FF0000", "vert" => "#008000", "jaune" => "#FFFF00"];

            var_dump($couleurs);

            echo $couleurs["rouge"];

            // Parcourir la liste avec un foreach

            foreach($couleurs as $indice => $valeur){
                echo "<p> Le code hexadecimal de $indice est $valeur";
            }

            // Tableau multidimensionnel

            $personnages = array(
                array("Mickey", "Mouse", 92),
                array("Minnie", "Mouse", 90),
                array("Donnard", "Duck", 80)
            );

            echo "<pre>";
            print_r($personnages);
            echo "</pre>";

            echo $personnages[2][1] . "<br>";

            $listePrenom[] = "Pierre";

            echo "<pre>";
            print_r($listePrenom);
            echo "</pre>";


            $resultat = array_search("Pierre", $listePrenom); 
            // array_search permet de rechercher dans une liste.
            // Il renvoie la valeur de l'indice si il trouve un résultat, il ne renvoie rien (false) sinon

            echo "La variable resultat contient : " . $resultat . "<br>";

            echo $listePrenom[2] . "<br>";

            foreach($listePrenom as $cle => $valeur){
                if ($valeur == "Pierre"){
                    echo "J'ai trouvé un Pierre, à l'indice $cle <br>";
                }
            }




        ?>
    </body>
</html>






