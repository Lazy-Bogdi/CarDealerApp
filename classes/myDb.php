<?php

class Db {
  private static $instance = null;

  private function __construct() {}
  private function __clone() {}

  public static function getInstance() {
    if (!self::$instance) {
      $dsn = "mysql:host=localhost;dbname=carDealerApp";
      self::$instance = new PDO($dsn, "root", "");
    }
    return self::$instance;
  }
}

