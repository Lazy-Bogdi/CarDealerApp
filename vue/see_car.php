<?php require "../phpTreatment/seeCar.php";

?>

<head>
    <link rel="stylesheet" type="text/css" href="../style/seeCarStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Car Dealer App</title>
</head>

<body>

    <div class='container'>
        <div class="car">
            <h1><?= $car['brand'] . " " . $car['model'] ?></h1>
            <h4>Modèle : <?= $car['model'] ?></h3>
            <h4>Carburant : <?= $car['fuelType'] ?></h3>
            <h4>Année de mise en circulation : <?= $car['year'] ?></h3>
            <h4>Kilomètres : <?= $car['kilometer'] ?></h3>
            <h4>Prix : <?= $car['price'] ?></h3>
        </div>
        <diV><img src="../assets/pictures/car.png" class="carImg"></div>

    </div>

</body>

