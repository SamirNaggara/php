<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les boucles en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- <link rel="stylesheet" href="css/reset.css"> -->
        <link rel="stylesheet" href="css/style.css" />
        <style>
            .boutons{
                display: inline-block;
                background-color: blue;
                color: white;
                padding: 10px;
                margin-top: 5px;
            }

            table{
                margin-bottom: 300px;
            }
        </style>
    </head>
    <body>
        
        <h2>Boucles While</h2>

        <?php

        $i=1; //initialisation

        while($i<10){
            echo "Ceci est la valeur de i : $i" . "<br>";

            // $i = $i + 1; 
            $i++; // $i est incrementé de 1 (augment de 1)
        }

        // Afficher 10 boutons "Bouton 1", "Bouton 2" (lien a)...

        $j=1;

        while($j<=10){
            ?>
            <a class="boutons" href="bouton<?= $j; ?>">Bouton <?= $j; ?></a>
            
            <?php
            $j++;

        }
        ?>


        <h2>La boucle DoWhile</h2>

        <?php

        $i=0;

        do{
            echo $i;
            $i++;
        }while($i<10)

        ?>

        <h2>La boucle for</h2>

        <?php 

        for($i=0; $i<10; $i++){ //Initialisation ; condition ; itération
            echo $i . "<br>";
        }

        // Afficher une liste déroulante qui affiche des nombres entre 0 et 30
        ?>
        <select name="nombres" id="nombre">

            <?php
                for($i=2021;$i<=2200;$i++){
                    ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>

                    <?php
                }
            

        ?>
        </select>


        <h2>Une boucle dans une boucle</h2>

        <!-- Creez un tableau, de 10 lignes par 10 colonnes, numerotez comme suit :
        Chaque cellule contient le numero de sa ligne puis son numero de colonne 
        L2C3

        L1C1  L1C2   L1C3   L1C4  ... 
        L2C1  L2C2   L2C3    -->
        

        <table border="1">
                <?php
                for($i=1; $i<=50; $i++){ // Boucle pour faire 10 lignes (10 tr)
                    ?>
                    <tr>
                    
                        <?php 
                        for($j=1; $j<=50; $j++){ // Boucle pour faire 10 cellules (10td)
                            ?>

                            <td><?= "L" . $i . "C" . $j; ?></td> <!-- On affiche le contenu de la cellule -->

                            <?php
                        }

                        ?>
                    
                    </tr>

                    <?php
                }


                ?>
        </table>




    </body>
</html>






