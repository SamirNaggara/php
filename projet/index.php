<?php 
    include_once("inc/init.inc.php");
    include_once("inc/functions.inc.php");

    // Si il y a un get action deconnexion, alors on detruit la session

    if (isset($_GET["action"]) AND $_GET["action"] == "deconnexion"){
        session_destroy();
        header("location:index.php");
    }


    include_once("inc/head.inc.php");
    include_once("inc/header.inc.php");









    include_once("inc/footer.inc.php");


?>
