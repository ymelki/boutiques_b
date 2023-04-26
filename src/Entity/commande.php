<?php 

    include_once "function.php";

    function insert_commande($facture_id,$id_produit,$quantite){
        // connexion à la B.D.
        $dbh=connect_bd();
        // 2 la requete d'insertion
        $id_facture=$facture_id['id'];
         
        $info=$dbh->query(
            "INSERT INTO commande (id, facture_id, produit_id,quantite)
             VALUES (NULL,
                    $id_facture,
                    $id_produit,
                    $quantite 
             
             )"
        );
        
    }

    function getCommande($id_user){
        $dbh=connect_bd();
        //2. RECUPERER LES DONNEES 
        $resultat = $dbh->query("SELECT * FROM commande C LEFT JOIN factures F ON C.facture_id=F.id LEFT JOIN PRODUIT P on C.produit_id = P.id where f.user_id=$id_user;
        ")->fetchAll();
        // print_r($resultat);
        return $resultat;

    }