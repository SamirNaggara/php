<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';

$msg = "";

if (isset($_FILES["photo-profil"])){   // Si la photo a bien été chargée
    // echo $_FILES["photo-profil"]["tmp_name"]; 

    $cheminTelechargement = "telechargement/profil-" . time() . "-" . $_FILES["photo-profil"]["name"]; // On choisit ici le chemin ou sera téléchargé notre fichier, et le nom qu'il aura
    // On choisit de mettre le timestamp dans le nom afin de s'assurer que chaque fichier est unique


    // La fonction move_uploaded_file permet de bouger un fichier d'un endroit (premier argument) à un autre (deuxieme arguement)

    // move_uploaded_file renvoie true si le fichier a bien été déplacé, false s'il y a eu une erreur.
    // Ainsi, en plaçant la fonction en test d'un "if", on est capable de récupérer s'il y a eu une erreur, et envoyer un message d'erreur
    if (!move_uploaded_file($_FILES["photo-profil"]["tmp_name"], $cheminTelechargement)){
        $msg = "Il y a eu un problème avec le chargement du fichier";
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
        <title>Charger un fichier en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <form action="" enctype="multipart/form-data" method="post">
            <div class="conteneurTelechargement">
                <label for="fichier">Votre photo de profil : </label>
                <input type="file" name="photo-profil">
            </div>
            <input type="submit">
        </form>

        <img src="<?= $cheminTelechargement ?>">

        <div class="messageErreur">
            <?= $msg ?>
        </div>

    </body>
</html>






