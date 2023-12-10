<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
    <style>
   
        .body{
          background-color:seagreen;
          width: 300px;
          color:black;
          margin: 20px auto;
          padding:15px;
          border-radius: 25px;
          text-align: center;
        }
    </style>
</head>
<body>
<div class="body">

<?php
$nama = $_GET['Nama'];
$umur = $_GET['Negara'];
$alamat = $_GET['Club'];
$pekerjaan = $_GET['Posisi'];
$gambar = $_GET['Gambar'];

echo '<h2>Pemain Sepak Bola Profesional</h2>';

echo '<img src="' . $gambar . '" alt="Gambar">';
echo '<p>Nama: ' . $nama . '</p>';
echo '<p>Negara: ' . $umur . '</p>';
echo '<p>Club: ' . $alamat . '</p>';
echo '<p>Posisi: ' . $pekerjaan . '</p>';

?>
<a href="latihan5b.php">Kembali</a>
</div>
</body>
</html>