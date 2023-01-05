<?php
// Include the MyDealerCrud class
require "../classes/MyDealerCrud.php";
require "../classes/myDb.php";

$id = $_POST['idCar'];

$db = Db::getInstance();
$readCar = new MyDealerCrud($db);

$carInfo = $readCar->read($id);

$car = [
    "id" => $carInfo->getId(),
    "brand" => $carInfo->getBrand(), 
    "model" => $carInfo->getModel(), 
    "fuelType" => $carInfo->getFuelType(), 
    "year" => $carInfo->getYear(),
    "kilometer" => $carInfo->getKilometer(),
    "price" => $carInfo->getPrice()
];

//  var_dump($carInfo);