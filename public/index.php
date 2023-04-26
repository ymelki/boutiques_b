<?php

// var_dump($_SERVER);
// si je veux afficher le catalogue produit alors affiche moi le catalogue
// produit

// ancienne solution : $page=$_GET['uc'];
// echo $_SERVER['PATH_INFO'];
// gestion de la variable path_info
// include "header.php";
session_start();

// var_dump($_SESSION);
// on considere que l'on est deconnecte par défaut
$connexion=false;
$admin=false;

// on verifie si la variable session user qui determine notre authentification
// existe
if(isset($_SESSION['user'])) {
    // si on est connecte alors connexion <= true
    $connexion=true;
    // par défaut on n'est pas admin
    // recuperer les fonction de l'entité USER
    include_once __DIR__.'/../src/Entity/User.php';
    // getDetailUser permet de recuperer toutes les informations concernant
    // le user de la session
    $user_complet=getDetailUser($_SESSION['user']);
    if ($user_complet['admin']==1) {
        // si le champs admin contient 1 alors admin <= true
        $admin=true;
    }
}  

//include_once __DIR__.'/../src/Entity/User.php';
//echo $_SESSION['user'];
// $user=getDetailUser($_SESSION['user']);


 //var_dump($user);
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
    include __DIR__.'/../src/Controller/UserController.php';
    getUser();

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
elseif ($page=="/ajouter_produit"){
    include __DIR__.'/../src/Controller/ProduitController.php';
    nouveauproduit();
    // include __DIR__.'/../templates/ajouter_produit.php';
} 

elseif ($page=="/enregistrer_produit"){
    include __DIR__.'/../src/Controller/ProduitController.php';
    enregistrer_produit();
}

// afficher tout les user
elseif ($page=="/liste_user"){ 
    include __DIR__.'/../src/Controller/UserController.php';
    getUser();
}

// creer un nouveau user
elseif ($page=="/nouveau_user"){ 
    include __DIR__.'/../src/Controller/UserController.php';
    nouveauuser();

}

// enregistrement / insertion user
elseif ($page=="/enregistrer_user"){ 
    include __DIR__.'/../src/Controller/UserController.php';
    enregistrer_user();
}

// supprimer un user en particulier
elseif ($page=="/supprimer_user"){ 
}
// afficher un user en particulier
elseif ($page=="/detail_user"){
    include __DIR__.'/../src/Controller/UserController.php';
    detail_user();

}


// gestion authentification
// afficher un user en particulier
elseif ($page=="/connexion"){ 
    include __DIR__.'/../src/Controller/AuthentificationController.php';
    // fonction qui ramene du vue  
    form_connexion();
}
// afficher un user en particulier
elseif ($page=="/verifie_authentication"){ 
    include __DIR__.'/../src/Controller/AuthentificationController.php';
    // fonction qui va verifie les identifiants de connexion
    verifie_authentication();
}


// deconnexion
elseif ($page=="/deconnexion"){ 
    include __DIR__.'/../src/Controller/AuthentificationController.php';
    // fonction qui va verifie les identifiants de connexion
    deconnexion();
}

// ajouter au panier
elseif ($page=="/ajouter_panier_produit"){ 
    include __DIR__.'/../src/Controller/PanierController.php';
    // fonction qui va verifie les identifiants de connexion
    add() ;
}

// ajouter au panier
elseif ($page=="/vider_panier"){ 
    include __DIR__.'/../src/Controller/PanierController.php';
    // fonction qui va verifie les identifiants de connexion
    vider_panier() ;
}
// voir le panier
// ajouter au panier
elseif ($page=="/panier"){ 
    include __DIR__.'/../src/Controller/PanierController.php';
    // fonction qui va verifie les identifiants de connexion
    voir_panier() ;
}
elseif ($page=="/commandez"){ 
    include __DIR__.'/../src/Controller/CommandeController.php';
    // fonction qui va verifie les identifiants de connexion
    commande();
}

else {
    // syslog(1,"test");
    echo "ERROR 404";
}