<?php

// var_dump($_SERVER);
// si je veux afficher le catalogue produit alors affiche moi le catalogue
// produit

// ancienne solution : $page=$_GET['uc'];
// echo $_SERVER['PATH_INFO'];
// gestion de la variable path_info
// include "header.php";
include __DIR__.'/../templates/header.php';
// si on a rien apres le / de l'url alors
// le chemin sera = catalogue
if (empty($_SERVER['PATH_INFO'])){
    $page="/catalogue";
}
// si non la page sera = au chemin de l'url
else {
$page=$_SERVER['PATH_INFO'];
}

// gestion des pages
if ($page=="/catalogue"){
      include __DIR__.'/../src/Controller/ProduitController.php';
      getProduit();

   // recuperation des produits
 /*  include __DIR__.'/../src/Entity/Produit.php';
   $resultat=getProduit();
   // Renvoie vue 
   include __DIR__.'/../templates/catalogue.php';
   */
}

elseif ($page=="/user"){
    // recuperation des user
   include __DIR__.'/../src/Entity/User.php';
   // Renvoie vue 
   include __DIR__.'/../templates/user.php';
}

elseif ($page=="/ajouter_produit"){
    include __DIR__.'/../templates/ajouter_produit.php';
}

elseif ($page=="/test"){
    include __DIR__.'/../src/Entity/Produit.php';
    var_dump($resultat);
}

elseif ($page=="/supprimer_produit"){
    include __DIR__.'/../src/Entity/Produit.php';
    supprimer_produit();  
    // rediriger vers le catalogue 
    header('Location: index.php');
}
else {
    echo "ERROR 404";
}