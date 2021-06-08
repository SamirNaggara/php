<?php
    // echo "<pre>";
    // print_r($_GET) . "<br>";
    // echo "</pre>";


    $msg = "";
    if (isset($_GET['nature_lettre']) AND !empty($_GET["nature_lettre"]) AND isset($_GET['prenom']) AND !empty($_GET["prenom"])){
        $nature_lettre = $_GET["nature_lettre"];
        $prenom = $_GET["prenom"];
        

        if ($nature_lettre == "amour"){
            $msg = "$prenom, ceci est une lettre d'amour qui t'es adressé.";
        }elseif ($nature_lettre == "haine"){
            $msg = "$prenom, je n'a jamais pu te supporter";
        }else{
            $msg = "Il y a un probleme avec le choix de la nature de la lettre";
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
        <title>Exemple de Get</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <form action="" method="get">
            <div class="conteneurNatureLettre">
                <label for="nature_lettre">Votre lettre sera...</label>
                <select name="nature_lettre" id="nature-lettre">
                    <option value="amour">Une lettre d'amour</option>
                    <option value="haine">Une lettre de haine</option>
                </select>
            </div>
            <div class="conteneurPrenom">
                <label for="prenom">Prenom : </label>
                <input type="text" name="prenom" id="prenom">
            </div>
            
            <input type="submit">
        </form>

        <div class="resultat m-5">
            <div class="alert alert-success" role="alert">
                <?php echo $msg ?>
            </div>
            
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






