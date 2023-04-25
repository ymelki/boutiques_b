<?php

function commande(){ 

    //1. stocké dans la bd une nouvelle facture

    // recupere l'entité user pour stocké le user_id
    include_once __DIR__."/../Entity/User.php";
    // getDetailUser me permet de recuperer tout les infos du user dont son ID
    // en lui envoyant en parametre l'email
    // issue de la session
    $user=getDetailUser($_SESSION['user']);

    include_once __DIR__."/../Entity/facture.php";

    insert_facture($user);
    //2. stocké dans la bd les lignes de commandes

    //3. supprimer la session panier
}