<?php



function debug($liste){
    echo "<pre>";
    echo print_r($liste);
    echo "</pre>";
}


function is_connected(){
    // Renvoie true si la personne est connecté, false sinon

    if (isset($_SESSION["is_connected"]) AND $_SESSION["is_connected"] == "connected"){
        return true;
    }else{
        return false;
    }
}


function is_connected_and_is_admin(){
    // Renvoie true si la personne est connecté et admin, renvoie false sinon

    if (is_connected()){
        // On vérifie que la personne est connectée
        if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}