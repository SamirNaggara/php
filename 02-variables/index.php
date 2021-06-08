<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Variables en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
    <!-- Avec PHP on est capable de faire des calculs -->
        <div><?php echo 5+8;
        ?></div>

        <!-- En PHP on utilise des variables -->
        <p><?php 
            $variable = 2;
            echo $variable; 
        ?></p>


        <!-- Je peux additionner 2 variables -->

        <?php
        $variable2 = 3;

        echo $variable + $variable2;

        ?>

        <?php
            echo "Je suis le contenu de la variable 2 : $variable2"; // Les guillemets interpretent les variables
            echo "<br>";
            echo 'Je suis le contenu de la variable 2 : $variable2'; // Les quotes n'interpretent pas les variable;

            echo "<br>";
            echo 'Bonjour je m\'appelle Samir'; // antisladh permet "d'echaper un caractère pour qu'il ne soit pas interprêté

            ?>


        <?php
            echo "<br>";
            $nombre = 8;
            echo $nombre;
            echo "<br>";
            $nombre = 5;
            echo $nombre;


            // phpinfo();
            ?>


            <!-- Type de variable  -->
            <?php
                $nombre = 3; // Tupe integer
                echo "La variable nombre est de type : ";
                echo gettype($nombre);
                echo '<br>';
            ?>

            <?php
                $decimal= 3.2; // Tupe double (float)
                echo "La variable decimal est de type : ";
                echo gettype($decimal);
                echo '<br>';
            ?>

<?php
                $texte = "Je suis du texte"; // Type string
                echo "La variable texte est de type : ";
                echo gettype($texte);
                echo '<br>';
            ?>

<?php
                $nombre2 = '5'; // Tupe string
                echo "La variable nombre2 est de type : ";
                echo gettype($nombre2);
                echo '<br>';

                echo $nombre2 + 5;
            ?>

<?php
                $irrationnel = 1/3; // Tupe integer
                echo "La variable irrationnel est de type : ";
                echo gettype($irrationnel);
                echo '<br>'
            ?>


<?php
                $booleen = false; // Tupe integer
                echo "La variable boolean est de type : ";
                echo gettype($booleen);
                echo '<br>'
            ?>

            <!-- Assignation de Variables -->
            <?php
            
                $fruit1 = "Pomme";
                $fruit2 = $fruit1;
                echo "<br>";
                echo "fruit 1 : $fruit1 <br> fruit 2 : $fruit2";
                
                
                $fruit1 = "Fraise";
                echo "<br><br>";
                echo "fruit 1 : $fruit1 <br> fruit 2 : $fruit2";

                
                ?>

                <!-- Constantes -->

                <?php
                    define("CAPITAL_FRANCE","Paris"); // La constante en majuscule par convention

                    echo "<br><br>";
                    echo CAPITAL_FRANCE; 


                    // define("CAPITAL_FRANCE","Madrid"); // Renvoie une erreur

                    echo "<br><br>";
                    echo __FILE__;
                    echo __LINE__;
                ?>


                <!-- Concatenation -->

                <?php

                    $var1 = "Sal";
                    $var2 = "ut";

                    $resultat =  $var1 . $var2;

                    echo "<br>" . $resultat;
                    
                ?>

                <!-- Opérateurs arithmetique-->

                <?php

                    echo "<br><br>";
                    echo 1+2 . "<br>";
                    echo 1-2 . "<br>";
                    echo 5*4 . "<br>";
                    echo 20/4 . "<br>";
                    echo 21%4 . "<br>"; // Renvoie le reste de la division

                    ?>

                <!-- Opérateur de Comparaison -->
                <?php
                   $var1 = 1;
                   $var2 = "1";

                   $resultat = ($var1 === $var2);

                   // Operateur == compare les valeurs
                   // Operateur === compare les valeurs et le type
                   // Operateur != est different de
                   // Operateur > strictement supérieur à
                   // Operateur < strictement inférieur à
                   // Operateur >=  supérieur ou egal à
                   // Operateur <=  inferieur ou egal à

                   





                   echo "Nous renvoie 1 si les deux variables sont égales : " . $resultat;

                ?>






            




    </body>
</html>






