<?php
echo "test";
// la variable $_SESSION['panier'] elle n'existe pas
// on met dans la variable panier un tableau vide

// on met dans $id l'information du produit issue de l'URL
$id= $_GET['id'];
$_SESSION['panier']=array();

// variable $_SESSION['panier'] je le met dans la variable $panier
$panier = $_SESSION['panier'];

// on met dans la variable panier pour un produit par ex : 5 ce sera la clé
// on met la quantité 1
$panier[$id]=1;

var_dump($panier);
