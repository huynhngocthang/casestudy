<?php require_once "database.php" ?>

<?php
$stmt = $conn->prepare("SELECT name,introduce,price,image FROM restaurant.products
WHERE name IN ('Gan ngỗng áp chảo với trái phỉ ngâm Cognac','Bồ câu quay ngũ vị','Cơm thố gà quay','Gà nướng lá thơm tây','Hàu nướng sốt bơ chanh','Mì Ý cá hồi tươi sốt kem thì là','Nghêu hấp rượu vang','Nghêu nướng bơ tỏi','Pizza cá hồi','Salad kiểu Caesar','Sườn cừu Úc nướng kiểu Địa Trung Hải') ") ;
$stmt->execute() ;
$stmt->setFetchMode(PDO::FETCH_ASSOC) ;
$result = $stmt->fetchAll() ;

?>
