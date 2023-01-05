<?php require "../phpTreatment/allCars.php";


?>
<head>
    <!-- Other head elements -->
    <link rel="stylesheet" type="text/css" href="../style/gridStyle.css">
</head>

<?php


// Set the number of articles to display per page
$perPage = 7;

// Determine the current page number
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Calculate the start and end indices for the current page
$startIndex = ($page - 1) * $perPage;
$endIndex = $startIndex + $perPage - 1;

// Output the articles in a 4x4 grid
echo '<div class="grid">';
for ($i = $startIndex; $i <= $endIndex; $i++) {
    if (isset($cars[$i])) {
        echo '<div class="grid-item">';
        // Output the article title and content
        echo '<h2>' . $cars[$i]['brand'] . '</h2>';
        echo '<p>' . $cars[$i]['model'] . '</p>';
        echo '<p>' . $cars[$i]['fuelType'] . '</p>';
        echo '<p>' . $cars[$i]['year'] . '</p>';
        echo '<p>' . $cars[$i]['kilometer'] . '</p>';
        echo '<p>' . $cars[$i]['price'] . '</p>';
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
