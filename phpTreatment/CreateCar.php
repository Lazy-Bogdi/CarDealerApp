<?php

// Include the MyDealerCrud class
require "./classes/MyDealerCrud.php";
require "./classes/myDb.php";


// Connect to the database
$db = Db::getInstance();

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $fuelType = $_POST['fuelType'];
  $year = $_POST['year'];
  $kilometer = $_POST['kilometer'];
  $price = $_POST['price'];

  // Create a new MyDealerCrud object
  $dealerCrud = new MyDealerCrud($db);

  // Insert the new car into the database
  $dealerCrud->create($brand, $model, $fuelType, $year, $kilometer, $price);

  // Redirect to the homepage
//   header("Location: /index.php");
//   exit;
}

?>

