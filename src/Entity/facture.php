<?php 

    include_once "function.php";


    function insert_facture($user){
        // connexion à la B.D.
        $dbh=connect_bd();
        // 2 la requete d'insertion
        $id_user=$user['id'];
        
        $info=$dbh->query(
            "INSERT INTO factures (id, user_id, date)
             VALUES (NULL,$id_user, now())"
        ); 
        
    }

    function getLastFacture(){
        /* 1. Connexion à une base MySQL avec l'invocation de pilote */
        $dbh=connect_bd();
        //2. RECUPERER LES DONNEES 
        $resultat = $dbh->query("select * from factures order by id desc limit 1")->fetch();
        // print_r($resultat);
        return $resultat;
    }