<?php

// var_dump($_SERVER);
// si je veux afficher le catalogue produit alors affiche moi le catalogue
// produit

// ancienne solution : $page=$_GET['uc'];
// echo $_SERVER['PATH_INFO'];
// gestion de la variable path_info
include "header.php";
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
    echo "Vous etes sur la pages catalogue";
}
elseif ($page=="/user"){
    echo "Vous etes sur la pages user";
}
elseif ($page=="/ajouter_produit"){
    echo "Vous etes sur la pages user";
}
else {
    echo "ERROR 404";
}