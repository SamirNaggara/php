<?php

// Connexion à la BDD
$bdd = new PDO('mysql:host=localhost;dbname=taxis;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

// Requete SELECT


$resultat = $bdd->query("SELECT * FROM vehicule");


$toutMesVehicules = $resultat->fetchAll();

// echo "<pre>";
// print_r($toutMesVehicules);
// echo "</pre>";


if (isset($_GET["action"]) AND ($_GET["action"] == "suppression") 
    AND isset($_GET["id"])){

        $id_de_suppression = $_GET["id"];
        // echo $id_de_suppression;
    
    $enregistrement = $bdd->prepare("DELETE FROM vehicule WHERE id_vehicule = :id_vehicule");

    $enregistrement->bindParam(':id_vehicule', $id_de_suppression, PDO::PARAM_INT);

    $enregistrement->execute();

    if ($enregistrement){
        header("location:");
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
        <title>Affichage de toutes mes voitures</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Couleur</th>
                    <th>Immatriculation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
<?php
                foreach($toutMesVehicules as $cle=>$valeur){
                    echo "<tr>";
                        echo "<td>" . $valeur["id_vehicule"] . "</td>";
                        echo "<td>" . $valeur["marque"] . "</td>";
                        echo "<td>" . $valeur["modele"] . "</td>";
                        echo "<td>" . $valeur["couleur"] . "</td>";
                        echo "<td>" . $valeur["immatriculation"] . "</td>";
                        echo "<td>" . '<a class="btn btn-danger" href="?action=suppression&id=' . $valeur["id_vehicule"] . '">Supprimer</a>' . "</td>";
                    echo "</tr>";
                }
?>
            </tbody>
        </table>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>






