<?php
// Include the MyDealerCrud class
require "../classes/MyDealerCrud.php";
require "../classes/myDb.php";


// Connect to the database
$db = Db::getInstance();

$stmt = $db->prepare('SELECT id FROM cars');
$stmt->execute();
$rows = $stmt->fetchAll();

$cars = [];
$i = 0;
foreach ($rows as $row) {
    $readCar = new MyDealerCrud($db);
    $carInfo = $readCar->read($row['id']);
    
    $cars[$i] = [
        "brand" => $carInfo->getBrand(), 
        "model" => $carInfo->getModel(), 
        "fuelType" => $carInfo->getFuelType(), 
        "year" => $carInfo->getYear(),
        "kilometer" => $carInfo->getKilometer(),
        "price" => $carInfo->getPrice()
    ];
     $i++;
}

var_dump($cars);