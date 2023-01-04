<?php

class MyDealerCrud {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  // Création voiture
  public function create($brand, $model, $fuelType, $year, $kilometer, $price) {

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

