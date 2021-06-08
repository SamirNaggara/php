<?php
    include_once("inc/init.inc.php");
    include_once("inc/functions.inc.php");

    // La page profil ne dois être accessible qu'aux membres connectés

    if (!is_connected()){
        header("location:" . URL . "/connexion.php");
        exit();
    }

    // En envoie un message de success, si la personne vient de se connecter
    // On sait que la personne vient de se connecter, car dans l'URL il y a un get message success

    if (isset($_GET["message"]) AND $_GET["message"] == "success-connexion"){
        $msg .= '<div class="alert alert-success" role="alert">
                    Bravo vous êtes connecté !</div>';
    }

    // OBJECTIF : AFFICHER LES INFORMATIONS DE PROFIL DE LA PERSONNE

    // Recuperation de l'id membre
    $id_membre = $_SESSION["id_membre"];

    // Faire la requete qui nous permet d'obtenir les infos qui nous interessent
    $resultat = $bdd->query("SELECT * FROM membre WHERE id_membre = $id_membre");

    if ($resultat->rowCount()){
        // Je rentre dans la conidtion uniquement si la requete renvoie bien au moins une ligne

        $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

        $pseudo = $ligne["pseudo"];
        $nom = $ligne["nom"];
        $prenom = $ligne["prenom"];
        $email = $ligne["email"];
        $date_naissance = $ligne["date_de_naissance"];
        $civilite = $ligne["civilite"];
        $adresse = $ligne["adresse"];
        $ville = $ligne["ville"];
        $cp = $ligne["code_postal"];


        

    }

    

    


    include_once("inc/head.inc.php");
    include_once("inc/header.inc.php");
    ?>

    <main>
        <h1 class="text-center m-5">Mon profil</h1>
        <ul class="list-group container m-5">
            <li class="list-group-item">Pseudo : <?= $pseudo; ?></li>
            <li class="list-group-item">Nom : <?= $nom; ?></li>
            <li class="list-group-item">Prenom : <?= $prenom; ?></li>
            <li class="list-group-item">Email : <?= $email; ?></li>
            <li class="list-group-item">Date de naissance : <?= $date_naissance; ?></li>
            <li class="list-group-item">Adresse : <?= $adresse; ?></li>
            <li class="list-group-item">Ville : <?= $ville; ?></li>
            <li class="list-group-item">Code Postal : <?= $cp; ?></li>
        </ul>
        <a class="btn btn-primary" href="<?= URL ;?>/modifier_profil.php">Modifier mon profil</a>
    </main>

    <?php


    include_once("inc/footer.inc.php");

  