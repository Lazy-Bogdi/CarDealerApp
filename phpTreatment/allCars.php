<?php

require "../classes/MyDealerCrud.php";
require "../classes/myDb.php";



$db = Db::getInstance();

//On selectionne chaque ID dans un premier temps
$stmt = $db->prepare('SELECT id FROM cars');
$stmt->execute();
$rows = $stmt->fetchAll();

$cars = [];
$i = 0;

//On boucle sur chaque id récupéré pour les appliquer à la méthode read($id) qui retourne une voiture et ses propriétés
foreach ($rows as $row) {
    $readCar = new MyDealerCrud($db);
    $carInfo = $readCar->read($row['id']);
    
    $cars[$i] = [
        "id" => $carInfo->getId(),
        "brand" => $carInfo->getBrand(), 
        "model" => $carInfo->getModel(), 
        "fuelType" => $carInfo->getFuelType(), 
        "year" => $carInfo->getYear(),
        "kilometer" => $carInfo->getKilometer(),
        "price" => $carInfo->getPrice()
    ];
     $i++;
}

// var_dump($cars);