<?php

// Connexion a a base de données

// Connexion à la BDD
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=UTF8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

// Demarrer une session

session_start(); // Permet de demarrer une nouvelle session

// On initie la variable message
$msg="";

// On définit la racine du site
// define('RACINE_SERVEUR', $_SERVER['SERVER_NAME'] . "/php-wf3/projet");


// On définit l'URL du site web
define("URL", "http://localhost/php-wf3/projet");


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";