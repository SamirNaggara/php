<?php
    include_once("inc/init.inc.php");
    include_once("inc/functions.inc.php");
    
    // La page inscription est accessible uniquement aux membres non connectés
    if (is_connected()){
        header("location:" . URL . "/profil.php");
        exit();
    }



    $pseudo = "";
    $nom = "";
    $prenom = "";
    $email = "";
    $date_naissance = "";
    $adresse = "";
    $code_postal = "";
    $civilite = "";
    $ville = "";

    if (isset($_POST["pseudo"]) AND !empty($_POST["pseudo"])
    AND isset($_POST["mdp"]) AND !empty($_POST["mdp"])
    AND isset($_POST["nom"]) AND !empty($_POST["nom"])
    AND isset($_POST["prenom"]) AND !empty($_POST["prenom"])
    AND isset($_POST["email"]) AND !empty($_POST["email"])
    AND isset($_POST["date-naissance"]) AND !empty($_POST["date-naissance"])
    AND isset($_POST["adresse"]) AND !empty($_POST["adresse"])
    AND isset($_POST["code-postal"]) AND !empty($_POST["code-postal"])
    AND isset($_POST["civilite"]) AND !empty($_POST["civilite"])
    AND isset($_POST["ville"]) AND !empty($_POST["ville"])){

        
        
        // Enregistrement des post dans une variable
        $pseudo = trim(strtolower($_POST["pseudo"]));
        $mdp = $_POST["mdp"];
        $nom = trim($_POST["nom"]);
        $prenom = trim(strtolower($_POST["prenom"]));
        $email = trim(strtolower($_POST["email"]));
        $date_naissance = $_POST["date-naissance"];
        $adresse = trim(strtolower($_POST["adresse"]));
        $code_postal = trim($_POST["code-postal"]);
        $civilite = $_POST["civilite"];
        $ville = trim(strtolower($_POST["ville"]));
        echo strtolower(utf8_decode($nom));
        //Cryptage du mdp

        $mdp_crypte = password_hash($mdp, PASSWORD_DEFAULT);
        // echo $mdp_crypte;


        // Verification du pseudo

            // Unicité du pseudo
        $verifPseudo = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");

        $verifPseudo->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);

        $resultat = $verifPseudo->execute();

        if ($verifPseudo->rowCount()){
            $msg .= '<div class="alert alert-danger" role="alert">
            Attention, le pseudo existe deja !<br>Veuillez choisir un autre pseudo
          </div>';
        }

            // Longueurs du pseudo
        
        if (strlen($pseudo)>20 OR strlen($pseudo)<4){
            // On rentre dans la condition si le pseudo n'est pas valide

            $msg .= '<div class="alert alert-danger" role="alert">
            Attention, le pseudo doit être compris entre 4 et 20 caractères !<br>Veuillez choisir un autre pseudo
          </div>';
        }

        // Verifié les caractères admissibles du pseudo

        if (!preg_match('#^[a-zA-Z0-9._-]+$#', $pseudo)){
            // La fonction preg_match permet de vérifié qu'une chaine de caractère suis bien un pattern défini.
            // Le premier argument est le design du pattern, et le deuxieme est la chaine de caractère à vérifier

            $msg .= '<div class="alert alert-danger" role="alert">
            Attention, les caractères autorisés sont uniquement des chiffres et des lettres, ainsi que . _ - </div>';
        }


        // Enregistrement du nouveau membre dans la bdd
        if (empty($msg)){
            // Nous procedons à l'enregistrement, si et seulement si $msg est vide

            $enregistrement = $bdd->prepare("INSERT INTO membre (pseudo, mdp, nom, prenom, email, date_de_naissance, civilite, adresse, ville, code_postal) VALUES (:pseudo,:mdp,:nom,:prenom,:email,:date_naissance,:civilite,:adresse, :ville,:code_postal)");

                $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
                $enregistrement->bindParam(':mdp', $mdp_crypte, PDO::PARAM_STR);
                $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
                $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
                $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
                $enregistrement->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
                $enregistrement->bindParam(':civilite', $civilite, PDO::PARAM_STR);
                $enregistrement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
                $enregistrement->bindParam(':ville', $ville, PDO::PARAM_STR);
                $enregistrement->bindParam(':code_postal', $code_postal, PDO::PARAM_INT);

                if ($resultat = $enregistrement->execute()){
                    // Si l'enregistrement s'est bien passé

                    header("location:" . URL . "/connexion.php?message=success");
                    // On redirige vers la page connexion, en envoyant dans l'url le message qu'il faut afficher le message de succes
                }
            }
        



    }


    include_once("inc/head.inc.php");
    include_once("inc/header.inc.php");


    ?>
    <main class="page-inscription">
        <h1 class="text-center my-3">Formulaire d'inscription</h1>
        <form action="" method="post" class="container">
            <div class="conteneurCivilite my-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilite" id="civilite-f" value="f" <?php echo ($civilite == "f") ? "checked" : ""; ?>>
                    <label class="form-check-label" for="civilite-f">
                        Femme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilite" id="civilite-m" value="m" <?php echo ($civilite == "m") ? "checked" : ""; ?>>
                    <label class="form-check-label" for="civilite-m">
                        Homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilite" id="civilite-nsp" value="nsp" <?php echo ($civilite == "nsp") ? "checked" : ""; ?>>
                    <label class="form-check-label" for="civilite-m">
                        Ne se prononce pas
                    </label>
                </div>
            </div>
            <div class="conteneurPseudo form-floating mb-3">
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Mon Pseudo" required value="<?= $pseudo ?>">
                <label for="pseudo">Votre Pseudo</label>
            </div>
            <div class="conteneurMdp form-floating mb-3">
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mon Mot De Passe" required>
                <label for="mdp">Votre Mot de Passe</label>
            </div>
            <div class="conteneurNom form-floating mb-3">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Mon Nom" required value="<?= $nom ?>">
                <label for="nom">Votre Nom</label>
            </div>
            <div class="conteneurPrenom form-floating mb-3">
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Mon Prenom" required value="<?= $prenom ?>">
                <label for="prenom">Votre Prenom</label>
            </div>
            <div class="conteneurEmail form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Mon Email" required value="<?= $email ?>">
                <label for="email">Votre Email</label>
            </div>
            <div class="conteneurDateNaissance form-floating mb-3">
                <input type="date" class="form-control" id="date-naissance" name="date-naissance" placeholder="Ma Date de Naissance" required value="<?= $date_naissance ?>">
                <label for="date-naissance">Votre Date de Naissance</label>
            </div>
            <div class="conteneurAdresse form-floating mb-3">
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Mon Adresse" required value="<?= $adresse ?>">
                <label for="adresse">Votre Adresse</label>
            </div>
            <div class="conteneurVille form-floating mb-3">
                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ma Ville" required value="<?= $ville ?>">
                <label for="ville">Votre Ville</label>
            </div>
            <div class="conteneurCodePoste form-floating mb-3">
                <input type="text" class="form-control" id="code-postal" name="code-postal" placeholder="Mon Code Postal" required value="<?= $code_postal ?>">
                <label for="code-postal">Votre Code Postal</label>
            </div>

            <input type="submit" class="btn btn-primary" value="Je m'inscris">

            
            
        
        
        </form>
    </main>






<?php


    include_once("inc/footer.inc.php");