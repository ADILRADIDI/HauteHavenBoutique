<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page PHP</title>
</head>
<body>
<?php
$fileP = 'products.csv';
$file = fopen($fileP, 'r');
$test = true;
$categories = ['Women'];

if ($file === false) {
    echo "Failed to open file: $fileP";
} else {
    echo "<table border='1'>";
    while (($row = fgetcsv($file)) !== false) {
        if ($test) {
            echo "<thead>";
            echo "<tr>";
            foreach ($row as $value) {
                echo "<th>".$value."</th>";
            }
            echo "</tr>";
            echo "</thead>\n";
            $test = false;
            continue;
        }
        echo json_encode($row[0]);
        if (in_array($row[1], $categories)) {
            echo "<tr>";
            foreach ($row as $index => $cell) {
                if ($index === 5 && !empty($cell)) {
                    echo "<td><img src='" . htmlspecialchars($cell) . "' alt='Image'></td>";
                } else {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    fclose($file);
}
?>
    <script src="main.js"></script>
</body>
</html>