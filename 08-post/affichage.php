<?php 

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if (isset($_POST["pseudo"]) AND isset($_POST["prenom"]) AND isset($_POST["nom"]) AND isset($_POST["mdp"]) AND isset($_POST["email"]) AND isset($_POST["adresse"]) AND isset($_POST["message"])){


    // Enregistrement des variables
    $pseudo = $_POST['pseudo'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $message = $_POST['message'];


    if ($mdp != "pikachu"){
        header("location: index.php?message=error");
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
        <title>Affiche du formulaire (methode POST)</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <div class="affichage-formulaire">
            <ul class="list-group">
                <li class="list-group-item"><?= "Pseudo : $pseudo ";?></li>
                <li class="list-group-item"><?= "Prenom : $prenom ";?></li>
                <li class="list-group-item"><?= "Nom : $nom ";?></li>
                <li class="list-group-item"><?= "Email : $email ";?></li>
                <li class="list-group-item"><?= "Adresse : $adresse ";?></li>
                <li class="list-group-item"><?= "Message : $message ";?></li>
            </ul>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
