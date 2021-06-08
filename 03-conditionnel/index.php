<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Conditionnel en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <?php
            // $condition = "";
            // Condition est faux si : 
            //     - 0
            //     - false
            //     - ""

            $var1 = 3;
            $var2 = 5;

            $condition1 = $var1 == $var2;  // $condition est une variable qui recupère le resultat de la comparaison -> Si $var1 et $var2 sont égaux, alors $condition = 1, si ils ne sont pas egaux, alors $condition = "";
            echo $condition1 . "<br>";

            $boolean = true;
            echo !$boolean . "<br>"; // Le point d'exclamation inverse le booleen. SI le bouleen est vrai, alors !boolean est faux

            $condition = false && false; // La condition AND (ou &&) renvoie vrai SI les deux conditions sont vrai

            $condition = false OR true; // La condition OR (ou ||) renvoie vrai SI une seul condition au moins est vrai

            $condition = false XOR true; // La condition XOR (le ou exclusif), renvoie vrai si un seul des deux est vrai, mais envoie faux, si les deux sont vrai


            echo 'la variable $condition donne : ' . $condition . "<br>";

            $var1=2;
            

            if (($var1 > $var2) OR $condition2){
                echo "Je suis supérieur a 2!";
            }elseif($var1 = 2){
                echo "Je suis exactement egal a 2";
            }
            else{
                echo "Je suis le reste des cas";
            }

            // La forme ternaire permet de faire une condition if en une seule ligne.

            
            $result = (!($var1==2)) ? "C'est trop cool, c'est egal a 2 !" : "Oh noooon, c'est pas égal à 2";

            // $resultat = (TEST) ? ($resultat si vrai) : ($resultat si faux)
            
            echo "<br>" . $result;


            // Conditionne Switch 

            $test = 5;
            echo "<br>";

            switch ($test) {
                case 0:
                    echo "La variable test est égal à  0" . "<br>";
                    break;
                case 1:
                    echo "La variable test est égal à  1" . "<br>";
                    break;
                case 2:
                    echo "La variable test est égal à  2" . "<br>";
                    break;
                case 3:
                    echo "La variable test est égal à  3" . "<br>";
                    break;
                default:
                    echo "Ce nombre n'est pas compris entre 0 et 3";
            }

        ?>

    </body>
</html>






