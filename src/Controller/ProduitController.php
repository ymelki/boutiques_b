<?php
// LIRE LES PRODUITS
function getProduit(){
   include __DIR__.'/../Entity/Produit.php';
   $resultat=getProduit_Entity();
   // Renvoie vue 
   include __DIR__.'/../../templates/catalogue.php';
}

// MODIFIER LES PRODUITS


// SUPPRIMER UN PRODUIT
function deleteProduit(){
    
}

?>