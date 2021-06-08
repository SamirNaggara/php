<?php
    include_once("inc/init.inc.php");
    include_once("inc/functions.inc.php");

    // La page connexion est accessible uniquement aux membres non connecté
    if (is_connected()){
        header("location:" . URL . "/profil.php");
        exit();  // Permet de s'assurer que le code d'après ne sois pas executé
    }


    // Pour afficher le message de succes d'inscription si la personne vient de la page inscription
    if (isset($_GET["message"]) && $_GET["message"] == "success"){
        $msg.='<div class="alert alert-success" role="alert">
                    Votre nouveau profil a bien été enregistré !<br> Vous pouvez dés maintenant vous connecter
                </div>';
    }



    // Enregistrement des données de notre formulaire
    if (isset($_POST["pseudo"]) AND !empty($_POST["pseudo"])
        AND isset($_POST["mdp"]) AND !empty($_POST["mdp"])){

            
            
            // Enregistrement des données du formulaire dans des variables
            $pseudo = strtolower(trim($_POST["pseudo"]));
            $mdp = $_POST["mdp"];

            // Rechercher si il existe une ligne dans la bdd avec le pseudo renseigné

            // Verification du pseudo
            $enregistrement = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");

            $enregistrement->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);

            $enregistrement->execute();
            

            if (!$enregistrement->rowCount()){
                // Si le pseudo n'exite, on renvoie un message d'erreur
                $msg .= '<div class="alert alert-danger" role="alert">
                Le pseudo que vous avez sélectionné n\'existe pas </div>';
            }

            // Verification du mot de passe

            if (empty($msg)){
                
                // Je fetch la ligne, pour pouvoi recuperer dans un liste (la liste $ligne) toutes les données de la ligne correspondant au pseudo
                $ligne = $enregistrement->fetch(PDO::FETCH_ASSOC);

                // J'enregistre le mdp crypté dans une variable
                $mdp_crypte_bbd = $ligne["mdp"];

                if (!password_verify($mdp,$mdp_crypte_bbd)){
                    $msg .= '<div class="alert alert-danger" role="alert">
                    Votre mot de passe n\'est pas valide </div>';
                }


            }


            if (empty($msg)){
                // Message de succes, qui ne sert a rien parce que on a une redirection juste après
                // $msg .= '<div class="alert alert-success" role="alert">
                //     Bravo vous êtes connecté</div>';

                $_SESSION["is_connected"] = "connected";
                $_SESSION["id_membre"] = $ligne["id_membre"];
                $_SESSION["is_admin"] = $ligne["statut"];
                header("location:" . URL . "/profil.php?message=success-connexion");
            }




        }


    include_once("inc/head.inc.php");
    include_once("inc/header.inc.php");

    ?>

        <main>
            <h1 class="text-center my-3">Se connecter</h1>
            <form action="connexion.php" method="post" class="container">
                <div class="conteneurPseudo form-floating mb-3">
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Mon Pseudo" required value="">
                    <label for="pseudo">Votre Pseudo</label>
                </div>
                <div class="conteneurMdp form-floating mb-3">
                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mon Mot De Passe" required>
                    <label for="mdp">Votre Mot de Passe</label>
                </div>
                <input type="submit" class="btn btn-primary" value="Je me connecte">

            </form>
        </main>


    <?php
    
    include_once("inc/footer.inc.php");


