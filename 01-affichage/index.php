<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>La base d'une page</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <p>Hello World !</p>

        
        <?php
            // echo permet d'afficher une chaine de caractere
            // On peut placer notre balise <p> directement dans la chaine de caractère afficher
            echo "<p>Hello World PHP</p>";
        ?>

        <p><?php  
        /* On peut envelopper notre echo d'un balise <p> dans le html */
                echo "Hello World PHP2";  
            ?></p>

        <?php 
            // Print permet d'afficher comme écho, mais on preferera "echo"
            print("<p>Hello World PHP3</p>"); 
        ?>

        <!-- Cette façon d'écrire est équivalente à ouvrir le php puis faire un écho -->
        <?= "<p>coucou</p>" ?>
        <?php echo "<p>coucou</p>"; // Ces deux lignes sont exactement similaire ?> 


        <?php phpinfo(); ?>
        
    </body>
</html>






