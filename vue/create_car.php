<?php require "../phpTreatment/CreateCar.php"; ?>


<form action="/create_car.php" method="POST">
  <label for="brand">Brand:</label><br>
  <input type="text" id="brand" name="brand"><br>
  <label for = "model">Model:</label><br>
  <input type="text" id="model" name="model"><br>
  <label for="fuelType">Fuel Type:</label><br>
  <input type="text" id="fuelType" name="fuelType"><br>
  <label for="year">Year:</label><br>
  <input type="number" id="year" name="year"><br>
  <label for="kilometer">Kilometers:</label><br>
  <input type="number" id="kilometer" name="kilometer"><br>
  <label for="price">Price:</label><br>
  <input type="number" id="price" name="price"><br><br>
  <input type="submit" value="Submit">
</form>