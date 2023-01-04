<?php require "../phpTreatment/CreateCar.php"; ?>


<form action="create_car.php" method="POST">
  <label for="brand">Marque:</label><br>
  <input type="text" id="brand" name="brand"><br>

  <label for = "model"> Modèle</label><br>
  <input type="text" id="model" name="model"><br>

  <label for="fuelType">Carburant</label><br>
  <select type="text" id="fuelType" name="fuelType">
    <option>Diesel</option>
    <option>Essence</option>
    <option>Hybride</option>
    <option>Electrique</option>
  </select><br>

  <label for="year">Année de mise en circulation:</label><br>
  <input type="number" id="year" name="year"><br>

  <label for="kilometer">Kilometers:</label><br>
  <input type="number" id="kilometer" name="kilometer"><br>

  <label for="price">Price:</label><br>
  <input type="number" id="price" name="price"><br><br>

  <input type="submit" value="Submit">
</form>