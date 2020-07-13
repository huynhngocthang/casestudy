<?php require_once "database.php" ?> 

<?php  

$stmt = $conn->prepare("SELECT products.name,products.price,products.introduce,products.image
FROM productline
LEFT JOIN products ON productline.id_productline = products.id_productline
WHERE productline.id_productline = '2' ;") ;
$stmt->execute() ;
$stmt->setFetchMode(PDO::FETCH_ASSOC) ;
$resul2 = $stmt->fetchAll() ;

?>