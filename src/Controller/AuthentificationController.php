<?php

// fonction ramenant le form de connexion
function form_connexion(){
    include __DIR__.'/../../templates/form_connexion.php';
}

// fonction qui verifie les identifiant
function verifie_authentication(){
    // recuperer l'email envoyé via le form en POST
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    //je veux les infos correspondant au envoyé dans le form
    include __DIR__.'/../Entity/User.php';
    $unuser=getDetailUser($email);

    //CAS 1 : Le mail n'existe pas !soit $unuser ramene une erreur : l'email n'existe pas
    // $unuser si il existe pas => false
    if ($unuser==false){
        echo "cet email n'existe pas";
        include __DIR__.'/../../templates/form_connexion.php';
        return; 
    }
    //CAS 2 l'email existe et il faut verifier si le mot de passe
   if (password_verify(  $pwd    , $unuser['password']   ) && $unuser['email']==$email) {
        // 1 creation de la session
        $_SESSION["user"]=$email;
        include __DIR__.'/../../templates/espace_membre.php';
        return; 



        // 2 redirection vers l'espace membre

    }
    else {
        // cas 3 : Mot de passe incorrect
        echo "Mot de passe incorect";
        include __DIR__.'/../../templates/form_connexion.php';
    }
}




// fonction de deconnexion
function deconnexion(){
    // on detruit la session
    session_destroy();
    // on redirige notre site vers la page d'accueil
    header('Location: index.php');

}