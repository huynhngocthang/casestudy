<?php

    $host = "mysql:host=localhost;dbname=restaurant" ;
    $user = 'root' ;
    $password = '0913465343';

    try {
        $conn = new PDO($host,$user,$password) ;
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    }
    catch(PDOException $e) {
       echo $e->getMessage() ;
    }




?>