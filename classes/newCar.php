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