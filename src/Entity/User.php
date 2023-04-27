<?php 
        include_once "function.php";

    // recuperer tout les users
    function getUser_Entity(){
        /* 1. Connexion à une base MySQL avec l'invocation de pilote */
        $dbh=connect_bd();
        //2. RECUPERER LES DONNEES 
        $resultat = $dbh->query("select * from user")->fetchAll();
    // print_r($resultat);
        return $resultat;
    }

    // supprimer un user
    function supprimer_user(){
        $dbh=connect_bd();
        $id=$_GET['id']; 
        // 2 la requete de suppression
        $dbh->query(
            "delete from user where id=$id"
        );
    }

    // inserer un user
    function enregistrer_user_entite($email,$password,$image){
        $dbh=connect_bd();
        // 2 la requete d'insertion
        $info=$dbh->query(
            "INSERT INTO user (id, email, password, image)
             VALUES (NULL, '$email', '$password','$image')"
        );
        echo "\nPDO::errorCode(): ", $info->errorCode();

    }


        // inserer un user
        function enregistrer_user_entite_s($email,$password,$image){
            $dbh=connect_bd();
            $requetePrepare = $dbh->prepare(
                "INSERT INTO user (id, email, password, image)
                VALUES (NULL, :unemail, :unpwd, :uneimg)"
            );
            $requetePrepare->bindParam(':unemail', $email, PDO::PARAM_STR);
            $requetePrepare->bindParam(':unpwd', $password, PDO::PARAM_STR);
            $requetePrepare->bindParam(':uneimg', $image, PDO::PARAM_STR);
            $requetePrepare->execute();
    
        }


    function getDetailUser($email){
          $dbh=connect_bd();
          //2. RECUPERER LES DONNEES 
          $resultat = $dbh->query("select * from user where email='$email'")->fetch();
          // print_r($resultat);
          return $resultat;
    }
 
    ?>
