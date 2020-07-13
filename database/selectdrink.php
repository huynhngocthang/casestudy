<?php require_once "database.php"  ?>

<?php
$stmt = $conn->prepare("SELECT * FROM restaurant.dinks ;") ;
$stmt->execute() ;
$stmt->setFetchMode(PDO::FETCH_ASSOC) ;
$resul3 = $stmt->fetchAll() ;
