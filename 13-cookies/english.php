<?php

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    setcookie("preferenceLangue","english", time()+2629800);

    // setcookie("preferenceLangue","english", time()); // Supprimer mon cookie

?>

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
        <p>Je suis la version du site en Anglais</p>
        
    </body>
</html>






