<?php require "../phpTreatment/allCars.php";


?>
<head>
    <link rel="stylesheet" type="text/css" href="../style/gridStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Car Dealer App</title>
</head>

<?php


// Set the number of articles to display per page
$perPage = 8;

// Determine the current page number
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Comptage du nombre de grille placée
$startIndex = ($page - 1) * $perPage;
$endIndex = $startIndex + $perPage - 1;


echo '<div class="container">';
echo '<div class="grid">';
for ($i = $startIndex; $i <= $endIndex; $i++) {
    if (isset($cars[$i])) {
        echo '<div class="grid-item">';
        // Output the article title and content
        echo '<img src="../assets/pictures/car.png">';
        echo '<h2> Marque : ' . $cars[$i]['brand'] . '</h2>';
        echo '<p> Modèle : ' . $cars[$i]['model'] . '</p>';
        echo '<p> Carburant : ' . $cars[$i]['fuelType'] . '</p>';
        echo '<p> Année de mise en circulation : ' . $cars[$i]['year'] . '</p>';
        echo '<p Kilomètre au compteur : >' . $cars[$i]['kilometer'] . '</p>';
        echo '<p> Prix de vente : ' . $cars[$i]['price'] . '</p>';
        echo '
            <div> 
                <form action="see_car.php" method="POST">
                    <input type="hidden" name="idCar" value="' . $cars[$i]['id'] . '"> 
                    <button type = "submit"> Voir </button>
                </form> 
            </div>';
        echo '</div>';

    }
}
echo '</div>';



// Calculate the total number of pages
$totalPages = ceil(count($cars) / $perPage);

// Output the "Previous" and "Next" links
echo '<div class="pagination">';
if ($page > 1) {
    echo '<a href="?page=' . ($page - 1) . '">Previous</a> ';
}
if ($page < $totalPages) {
    echo '<a href="?page=' . ($page + 1) . '">Next</a>';
}
echo '</div>';

// Output the page numbers
echo '<div class="page-numbers">';
for ($i = 1; $i <= $totalPages; $i++) {
    if ($i == $page) {
        echo '<span class="current-page">' . $i . '</span> ';
    } else {
        echo '<a href="?page=' . $i . '">' . $i . '</a> ';
    }
}
echo '</div>';
echo '</div>';