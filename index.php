<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page PHP</title>
</head>
<body>
<?php

function displayDProduct($row){
    $id = htmlspecialchars($row[0]);
    $categorie = htmlspecialchars($row[1]);
    $title = htmlspecialchars($row[2]);
    $description = htmlspecialchars($row[3]);
    $price = htmlspecialchars($row[4]);
    $picture = htmlspecialchars($row[5]);

    echo "<h2>$title $price</h2>";
    echo "<img src='$picture' alt='' />";
}


function getDataProduct(){
$fileP = 'products.csv';
$file = fopen($fileP, 'r');
$test = true;
$categories = ['Men'];
if ($file === false) {
    echo "Failed to open file: $fileP";
} else {
    while (($row = fgetcsv($file)) !== false) {
        if ($test) {
            $test = false;
            continue;
        }
        $category = htmlspecialchars($row[1]);
        if (in_array($category, $categories)) {
                displayDProduct($row);
            }
    }
    fclose($file);
};
}
getDataProduct();
?>
<script src="main.js"></script>
</body>
</html>