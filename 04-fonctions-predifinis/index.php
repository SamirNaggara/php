<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quelques fonctions prédéfinis en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <?= date("d/m/y h:i") ."<br>"; // La fonction date permet d'affichier la date du jour ?> 
        <?= time() ."<br>"; // Time() affiche le timestamp en seconde, c'est a dire le nombre de secondes entre le 1er Janvier 1970 et maintenant?>


        <?= date("d/m/y G:i", 900273600) ."<br>";  // Avec un timestamp de 0, la date affiché est bien le 1er Janvier 1970 ?>

        <?= rand(1,10) . "<br>"; // Permet de générer un nombre aléatoire entre 1 et 10 ?>


        <?php
            $chaine = "Ceci est ma chaine de caractere"; 
            echo strlen($chaine) ."<br>"; // strlen retourne la longueur d'une chaine de caractere
            echo substr($chaine, 12, 6)  . "<br>"; // substr retourne une partie d'une chaine de caractère ($laChaine, Start, Longueur)
            
        ?>
           
        <?php
            $variable = "etonnant !";

            echo isset($variable)  . "<br>"; // Isset() renvoie true si la variable existe

            if (isset($variable)){
                echo "La variable existe bien, et est valeur est : $variable"  . "<br>";
            }else{
                echo "Votre variable est introuvable"  . "<br>";
            }

            echo "Renvoie 1 si la variable est vide : " . empty($variable)  . "<br>"; // Empty renvoie true si la variable est vide

            if (isset($variable) AND !empty($variable)){
                ?>
                <p>Bravo, la variable existe, n'est pas vide, et elle est egale a <?= $variable ?></p>
                <?php
            }
            
        ?>

        <?php
            $chaine2 = "michael jackson";
            echo strtoupper($chaine2) . "<br>"; // Transforme la chaine en majuscule
            echo strtolower($chaine2) . "<br>"; // Transfrome la chaine en minuscule
            echo ucfirst($chaine2) . "<br>"; // Transfrome la première lettre en majuscule
            ?>
        
    </body> 
</html>






