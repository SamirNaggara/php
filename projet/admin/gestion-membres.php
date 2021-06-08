<?php
    include_once("../inc/init.inc.php");
    include_once("../inc/functions.inc.php");

   
    


    

    // La page n'est accessible qu'aux admins qui sont connectés 
    if (!is_connected_and_is_admin()){
        header("location:" . URL . "/index.php");
        exit();
    }


    if (isset($_GET["action"]) AND $_GET["action"] == "admin" AND isset($_GET["id"])){
    
        $enregistrement = $bdd->prepare('UPDATE membre SET statut = "1" WHERE id_membre=:id_membre');

        
    $enregistrement->bindParam(':id_membre', $_GET['id'], PDO::PARAM_INT);

    
    if ($enregistrement->execute()){
        $msg .= '<div class="alert alert-success" role="alert">
                Le membre est bien passé administrateur </div>';

    }else{
        $msg .= '<div class="alert alert-danger" role="alert">
                Un probleme a eu lieu </div>';
    }

    // Objectif -> Afficher un tableau avec tout les membres

    // 1_ Faite la requete pour avoir tout les membres 
    // 2_ Dans le html, faite un tableau qui fais apparaitre les en-tête 
    // 3_ Dans le html, faite une boucle qui permet d'affichier tout les membres

    }
    $resultat = $bdd->query("SELECT * FROM membre");

    $toutNosMembres = $resultat->fetchAll();

    // debug($toutNosMembres);

    $contenu_tableau = "";

    foreach($toutNosMembres as $indice=>$valeur){
        // Si l'utilisateur est un administrateur, on stock dans statut la chaine "Administrateur
        // Sinon, on renvoie une chaine de caractere vide (ou autre...)
        if ($valeur["statut"] == 1){
            $statut = "Administrateur";
        }else{
            $statut = "";
        }

        $id_membre = $valeur["id_membre"];


        $contenu_tableau .= "<tr>";
        $contenu_tableau .= "<td>" . $valeur["id_membre"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["pseudo"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["nom"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["prenom"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["civilite"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["email"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["date_de_naissance"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["adresse"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["ville"] . "</td>";
        $contenu_tableau .= "<td>" . $valeur["code_postal"] . "</td>";
        $contenu_tableau .= "<td>" . $statut . "</td>";
        $contenu_tableau .= "<td>" . "<a class=\"btn btn-primary\" href=\"?action=admin&id=$id_membre\">Nommer administrateur</a>" . "</td>";

        $contenu_tableau .= "</tr>";


    }


    include_once("../inc/head.inc.php");
    include_once("../inc/header.inc.php");

    ?>

    <main>
        <h1 class="text-center m-5">Gestion des membres</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Pseudo</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Genre</th>
                    <th>Email</th>
                    <th>Naissance</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?= $contenu_tableau ?>
            </tbody>
        </table>

    </main>


<?php


    include_once("../inc/footer.inc.php");