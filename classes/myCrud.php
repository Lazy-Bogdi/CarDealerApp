<?php

class Car {
  private $id;
  private $brand;
  private $model;
  private $fuelType;
  private $year;
  private $kilometer;
  private $price;

  public function __construct($newBrand, $newModel, $newFuelType,$newYear,$newKilometer,$newPrice) {
    $this->brand = $newBrand;
    $this->model = $newModel;
    $this->fuelType = $newFuelType;
    $this->year = $newYear;
    $this->kilometer = $newKilometer;
    $this->price = $newPrice;
  }

  // Getters et setters
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getBrand() { return $this->brand; }
  public function setBrand($brand) { $this->brand = $brand; }

  public function getModel() { return $this->model; }
  public function setModel($model) { $this->model = $model; }

  public function getYear() { return $this->year; }
  public function setYear($year) { $this->year = $year; }

  public function getKilometer() { return $this->kilometer; }
  public function setKilometer($kilometer) { $this->kilometer = $kilometer; }

  public function getFuelType() { return $this->fuelType; }
  public function setFuelType($fuelType) { $this->fuelType = $fuelType; }

  public function getPrice() { return $this->$price; }
  public function setPrice($price) { $this->price = $fuelType; }
}

class MyDealerCrud {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  // Create a new user
  public function create($brand, $model, $fuelType, $year, $kilometer, $price) {
    // Generate a new ID

    // Insert the new user into the database
    $stmt = $this->db->prepare("INSERT INTO cars (brand, model, year, kilometer, fuelType, price) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $brand,
        $model,
        $year,
        $kilometer,
        $fuelType,
        $price
    ]);

    return new Car($brand, $model, $fuelType, $year, $kilometer, $price);
  }

  // Lecture de la voiture par son id
  public function read($id) {
    $stmt = $this->db->prepare("SELECT * FROM cars WHERE id = ?");
    $stmt->execute([$id]);
    $result = $stmt->get_result();
    $carSpecs = $result->fetch_object();

    return new Car($carSpecs->brand, $carSpecs->model, $carSpecs->fuelType, $carSpecs->year,$carSpecs->kilometer,$carSpecs->price);
  }

  // Maj de la voiture
  public function update($brand, $model, $fuelType, $year, $kilometer, $price) {

    $stmt = $this->db->prepare("UPDATE cars SET brand = ?, model = ?, year = ?, kilometer = ?, fuelType = ?, price = ?");
    $stmt->execute([
        $brand,
        $model,
        $year,
        $kilometer,
        $fuelType,
        $price
    ]);

    return new Car($brand, $model, $fuelType, $year, $kilometer, $price);
  }
  // Supprimer une voiture
  public function delete($id) {
    $stmt = $this->db->prepare("DELETE FROM cars WHERE id = ?");
    $stmt->execute([$id]);
  }
}

