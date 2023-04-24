<?php 
    function connect_bd() { 
        $dsn = 'mysql:dbname=boutiques;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    }