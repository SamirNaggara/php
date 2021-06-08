<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= URL; ?>/index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            
                <?php // Inscription apparait uniquement si la personne n'est pas connecté
                // Avec conditionnel sous forme ternaire
                echo (!is_connected()) ? "<li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=" . URL . "/inscription.php>Inscription</a>
                </li>" : ""; 
                
                    // Se connecter apparait uniquement si la personne n'est pas connecté
                // Avec conditionnel simple
                if (!is_connected()){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL; ?>/connexion.php">Se connecter</a>
                    </li>
                    <?php
                }
                

                // La page profil apparait uniquement si on est connecté
                if (is_connected()){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL; ?>/profil.php">Mon Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL; ?>/index.php?action=deconnexion">Deconnexion</a>
                    </li>

                    <?php
                }

                if (is_connected_and_is_admin()){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL; ?>/admin/gestion-membres.php">Administration</a>
                    </li>

                    <?php
                }
                

                ?>
                
            </ul>
        </div>
    </div>
</nav>
</header>
<div class="message m-5">
    <?= $msg ?>
</div>