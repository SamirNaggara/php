<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mails</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <a href="mailto:nullepart@mozilla.org">Envoyer l'email nulle part</a>
        <!-- mailto en html permet de configurer son client de messagerie (outlook ou autre) pour envoyer directement un mail à l'adresse choisi.
        Cette méthode n'est pas recommandé -->


        <?php 

            $headers = array(
                'From' => 'contact@codeyourlife.fr',
                'Reply-to' => 'contact@codeyourlife.fr',
                "X-Mailer" => 'PHP' . phpversion()
            );

            // mail("samirm.nagg@gmail.com", "Ceci est un mail de ton cours PHP", "Ceci est le contenu du mail", $headers);     
            
            
            $to = "samirm.nagg@gmail.com";
            $subject = "Objet du mail";
            $message = "Mon message";
            $headers = array(
                'From' => 'contact@codeyourlife.fr',
                'Reply-to' => 'contact@codeyourlife.fr',
                "X-Mailer" => 'PHP' . phpversion()
            );

            mail($to, $subject, $message, $headers);


        ?>

    </body>
</html>






