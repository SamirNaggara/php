<?php
    include_once("inc/init.inc.php");
    include_once("inc/functions.inc.php");

    // La page modifier profil ne dois être accessible qu'aux membres connectés

    if (!is_connected()){
        header("location:" . URL . "/connexion.php");
        exit();
    }

        // OBJECTIF : AFFICHER LES INFORMATIONS DE PROFIL DE LA PERSONNE

    // Recuperation de l'id membre
    $id_membre = $_SESSION["id_membre"];

    // Faire la requete qui nous permet d'obtenir les infos qui nous interessent
    $resultat = $bdd->query("SELECT * FROM membre WHERE id_membre = $id_membre");

    if ($resultat->rowCount()){
        // Je rentre dans la conidtion uniquement si la requete renvoie bien au moins une ligne

        $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

        $pseudo = ucfirst($ligne["pseudo"]);
        $nom = $ligne["nom"];
        $prenom = $ligne["prenom"];
        $email = $ligne["email"];
        $date_naissance = $ligne["date_de_naissance"];
        $civilite = $ligne["civilite"];
        $adresse = $ligne["adresse"];
        $ville = $ligne["ville"];
        $cp = $ligne["code_postal"];


    }


    // Objectif : Formulaire qui permet à un utilisateur de mettre à jour son profil

    if (isset($_POST["nom"]) AND !empty($_POST["nom"])
    AND isset($_POST["prenom"]) AND !empty($_POST["prenom"])
    AND isset($_POST["email"]) AND !empty($_POST["email"])
    AND isset($_POST["date-naissance"]) AND !empty($_POST["date-naissance"])
    AND isset($_POST["adresse"]) AND !empty($_POST["adresse"])
    AND isset($_POST["code-postal"]) AND !empty($_POST["code-postal"])
    AND isset($_POST["civilite"]) AND !empty($_POST["civilite"])
    AND isset($_POST["ville"]) AND !empty($_POST["ville"])){

        // Enregistrement des post dans une variable
        $enr_nom = trim(strtolower($_POST["nom"]));
        $enr_prenom = trim(strtolower($_POST["prenom"]));
        $enr_email = trim(strtolower($_POST["email"]));
        $enr_date_naissance = $_POST["date-naissance"];
        $enr_adresse = trim(strtolower($_POST["adresse"]));
        $enr_code_postal = trim($_POST["code-postal"]);
        $enr_civilite = $_POST["civilite"];
        $enr_ville = trim(strtolower($_POST["ville"]));

        // On place toutes nos conditions de formes, et si les tests echouent, on envoie un message d'erreur dans la variable $msg


         // Verifié les caractères admissibles du code postal

         if (!preg_match('#^[0-9]{4,5}+$#', $enr_code_postal)){
            // La fonction preg_match permet de vérifié qu'une chaine de caractère suis bien un pattern défini.
            // Le premier argument est le design du pattern, et le deuxieme est la chaine de caractère à vérifier

            $msg .= '<div class="alert alert-danger" role="alert">
            Attention, les caractères autorisés sont uniquement des chiffres? et entre 4 et 5 caractères </div>';
        }


        // Verification de l'email
        if (!filter_var($enr_email, FILTER_VALIDATE_EMAIL)){
            $msg .= '<div class="alert alert-danger" role="alert">
            Attention, votre email n\'est pas valide </div>';
        }

        
        // Enregistrement des modifications dans la bdd
        // L'enregistrement est effectué si et seulement si il n'y a pas de messages d'erreurs

        if (empty($msg)){
            $enregistrement = $bdd->prepare("UPDATE membre SET nom=:nom, prenom=:prenom, email=:email, date_de_naissance=:date_naissance, civilite=:civilite, adresse=:adresse, ville=:ville, code_postal=:code_postal WHERE id_membre=:id_membre");

            $enregistrement->bindParam(':nom', $enr_nom, PDO::PARAM_STR);
            $enregistrement->bindParam(':prenom', $enr_prenom, PDO::PARAM_STR);
            $enregistrement->bindParam(':email', $enr_email, PDO::PARAM_STR);
            $enregistrement->bindParam(':date_naissance', $enr_date_naissance, PDO::PARAM_STR);
            $enregistrement->bindParam(':civilite', $enr_civilite, PDO::PARAM_STR);
            $enregistrement->bindParam(':adresse', $enr_adresse, PDO::PARAM_STR);
            $enregistrement->bindParam(':ville', $enr_ville, PDO::PARAM_STR);
            $enregistrement->bindParam(':code_postal', $enr_code_postal, PDO::PARAM_INT);
            $enregistrement->bindParam(':id_membre', $id_membre, PDO::PARAM_STR);
    
            if ($enregistrement->execute()){
                $msg .= '<div class="alert alert-success" role="alert">
                Votre modifications ont bien été prises en compte </div>';
            }

        }
        




        
    }
    
    include_once("inc/head.inc.php");
    include_once("inc/header.inc.php");

    ?>

<main class="page-modification-profil">
        <h1 class="text-center my-3">Modifier mon profil</h1>
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
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Mon Pseudo" required value="<?= $pseudo; ?>" disabled>
                <label for="pseudo">Votre Pseudo</label>
            </div>
            <div class="conteneurNom form-floating mb-3">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Mon Nom" required value="<?= $nom; ?>">
                <label for="nom">Votre Nom</label>
            </div>
            <div class="conteneurPrenom form-floating mb-3">
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Mon Prenom" required value="<?= $prenom; ?>">
                <label for="prenom">Votre Prenom</label>
            </div>
            <div class="conteneurEmail form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Mon Email" required value="<?= $email; ?>">
                <label for="email">Votre Email</label>
            </div>
            <div class="conteneurDateNaissance form-floating mb-3">
                <input type="date" class="form-control" id="date-naissance" name="date-naissance" placeholder="Ma Date de Naissance" required value="<?= $date_naissance; ?>">
                <label for="date-naissance">Votre Date de Naissance</label>
            </div>
            <div class="conteneurAdresse form-floating mb-3">
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Mon Adresse" required value="<?= $adresse; ?>">
                <label for="adresse">Votre Adresse</label>
            </div>
            <div class="conteneurVille form-floating mb-3">
                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ma Ville" required value="<?= $ville; ?>">
                <label for="ville">Votre Ville</label>
            </div>
            <div class="conteneurCodePoste form-floating mb-3">
                <input type="text" class="form-control" id="code-postal" name="code-postal" placeholder="Mon Code Postal" required value="<?= $cp; ?>">
                <label for="code-postal">Votre Code Postal</label>
            </div>

            <input type="submit" class="btn btn-primary" value="Je mets a jour">

            
            
        
        
        </form>
    </main>

    <?php








    include_once("inc/footer.inc.php");
