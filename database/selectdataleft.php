<?php require_once "database.php"?>

<?php  
$stmt = $conn->prepare("SELECT * FROM restaurant.products") ;
$stmt->execute() ;
$stmt->setFetchMode(PDO::FETCH_ASSOC) ;
$resultt = $stmt->fetchAll() ;


?>