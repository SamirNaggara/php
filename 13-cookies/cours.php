<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les cookies en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        
        <?php

            // Il est possible d'acceder aux cookiers dans les parametres du navigateur (pour visualiser l'ensemble des cookies)
            // Ou bien il est possible d'aller dans l'inspecteur -> Application -> Cookie (pour visualiser les cookies du site en cours)


            setcookie("nomCookie", "Le contenue du cookie", time()+31536000);
            // Permet d'installer un nouveau cookie. Le premier argument est le nom du cookie, le deuxieme argument est le contenue du cookie, et le troisieme argement correspond au timestamp ou le cookie s'auto-détruira

            echo "<pre>";
            print_r($_COOKIE);
            echo "</pre>";
        ?>
    </body>
</html>






