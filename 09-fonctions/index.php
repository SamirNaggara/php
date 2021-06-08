<!DOCTYPE html>
<html lang="fr">
    <head> <!-- La balise head contient des informations méta sur le site -->
        <meta charset="UTF-8" />
        <meta name="description" content="Cette page est la base d'une page en HTML" />
        <meta name="keywords" content="HTML,CSS,JavaScript" />
        <meta name="author" content="Naggara Samir" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les fonctions en PHP</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <h2>Les fonctions en PHP</h2>

        <?php

        function echo_pre($liste){
            /* Fonction qui permet d'afficher un echo pre de la liste */

            echo "<pre>";
            print_r($liste);
            echo "</pre>";

        }
        $liste = ["Khaled", "Pierre", "Melanie", "Kim", "Colin", "Timoté", "Nidhal", "Gabriel"];


        echo_pre($liste);

        function nombre_de_cheveux($age){
            /* Calcule le nombre de cheveux en fonctions de l'age */

            if ($age <= 50){
                $nombre_cheveux = 150000;
            }elseif ($age > 50 AND $age <= 70){
                $nombre_cheveux = 100000;
            }elseif ($age > 70){
                $nombre_cheveux = 0;
            }

            return $nombre_cheveux;
        }

        $resultat = nombre_de_cheveux(60);

        echo "<br>Ceci est mon resultat" . $resultat;



        // Exercice : Créé une Fonction promo, qui baisse un prix donné de 20%
        // Puis afficher le resultat de la fonction avec un exemple


        function promo($prix){
            $prix_promo = $prix - $prix * 20/100; // Calcul du nouveau prix
            
            return $prix_promo; // On retourne le nouveau prix

        }

        echo "<br>Pour un prix de 100, la promo est de " . promo(1264);


        // J'ai 2 types de promos dans mon magasin, j'ai la promo habituel, à 20%, et j'ai aussi la promo "client fidele", de 50%;
        // Exercice, améliorer la fonction promo, pour qu'elle baisse de 20% si c'est un "client habituel", ou de 50% si c'est un "client fidele"

        function promoAmeliore($prix, $type_promo = "client_habituel"){
            if ($type_promo == "client_habituel"){ // Si c'est un client habituel
                $prix_promo = $prix - $prix * 20/100; // On calcul 20% du prix
            }elseif ($type_promo == "client_fidele"){ // SI c'est un client fidele
                $prix_promo = $prix/2;  // On divise le prix par 2
            }else{
                $prix_promo = false;
            }

            return $prix_promo;
        }

        echo "<br>La promo pour un client habituel et pour un prix de 100€ : " . promoAmeliore(100);

        echo "<br>La promo pour un client fidele et pour un prix de 100€ : " . promoAmeliore(100,"client_fidele");


        // Espace locale et espace globale

        
        $surface = 500;

        $compteur = 0;

        function calcul_surface($longueur){
            // Toutes les variables definies dans une fonction sont dans un espace "locale"
            $surface = $longueur * $longueur;
            // echo "<br><br>ma variable surface est egal à : $surface";

            // echo "<br>Ceci est ma variable compteur : $compteur";

            global $compteur; // J'amene $compteur dans l'espace locale pour le manipuler

            $compteur++; // Je manipule globale en l'incrementant


            return $surface;

            

            // Le code après return n'est pas executé
        }

        echo "<br>Calcul de la surface pour 10m -> " . calcul_surface(10) . "m²";
        echo "<br>Calcul de la surface pour 10m -> " . calcul_surface(10) . "m²";
        echo "<br>Calcul de la surface pour 10m -> " . calcul_surface(10) . "m²";
        echo "<br>Calcul de la surface pour 10m -> " . calcul_surface(10) . "m²";
        echo "<br>Calcul de la surface pour 10m -> " . calcul_surface(10) . "m²";

        echo "<br>ma variable compteur est egal à : $compteur";




        ?>
    </body>
</html>






