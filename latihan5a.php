<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
</head>
<body>
    
<?php
// Periksa apakah parameter 'angka' ada pada URL
$angka = isset($_GET['angka']) ? $_GET['angka'] : 10;

// Membuat rangkaian angka terurut
for ($i = 0; $i < $angka; $i++) {
    for ($j = 1; $j <= $angka - $i; $j++) {
        echo $j . ' ';
    }
    echo '<br>';
}
?>

</body>
</html>