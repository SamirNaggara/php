<?php
    // Si je ne suis pas connecté (is connect n'existe pas ou is connect different de true) alors je vais une redirection vers la page index

    session_start(); // La session doit être redémarré sur chaque page

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    if (!isset($_SESSION["is_connected"]) OR $_SESSION['is_connected'] != true){
        header("location:index.php");

    }

?>
<p>Je suis sur la page membre, c'est donc forcement que je suis connecté !</p>