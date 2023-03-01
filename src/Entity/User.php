 
    <?php 
    /* 1. Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:dbname=boutiques;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $dbh = new PDO($dsn, $user, $password);

    //2. RECUPERER LES DONNEES 
    $resultat = $dbh->query("select * from user")->fetchAll();
   // print_r($resultat);
    ?> 