<?php

    // echo "<pre>";
    // print_r($_SERVER); // La superglobale $_SERVER contient pleins d'informations sur le serveur
    // echo "</pre>";

    // echo $_SERVER["PHP_SELF"];  // On recupère l'url stcoké dans la superglobale 

    $nomFichierActuel = basename($_SERVER["PHP_SELF"]); // basename permet de extraire la fin d'url d'une chaine de caractère 

    // echo $nomFichierActuel;






    ?>
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo-php.png" width="60">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nomFichierActuel == "page1.php"){echo "active";} ?>" aria-current="page" href="page1.php" >Page 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nomFichierActuel == "page2.php"){echo "active";} ?>" href="page2.php">Page 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nomFichierActuel == "page3.php"){echo "active";} ?>" href="page3.php">Page 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nomFichierActuel == "page4.php"){echo "active";} ?>" href="page4.php">Page 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>