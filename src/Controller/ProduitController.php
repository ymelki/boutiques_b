<?php
// LIRE LES PRODUITS
function getProduit(){
   include __DIR__.'/../Entity/Produit.php';
   $resultat=getProduit_Entity();
   // Renvoie vue 
   include __DIR__.'/../../templates/catalogue.php';
}

// aficher formulaire nouveau produit
function nouveauproduit(){
    include __DIR__.'/../../templates/ajouter_produit.php';
}

// enregistrer un produit
function enregistrer_produit(){
    // on recupere les données en POST via le formulaire
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    include __DIR__.'/../Entity/Produit.php';
    // on lancer la fonction insert
    enregistrer_produit_entite($titre,$description,$prix);
    // charge la page catalogue
    header('Location: index.php');
}

// MODIFIER LES PRODUITS


// SUPPRIMER UN PRODUIT
function deleteProduit(){
    
}

?>