<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5b</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 90%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            text-align: center;
            padding: 20px;
        }
    </style>
<body>

<?php
$dataArray = [
[
    "Nama" => "Lionel Messi",
    "Negara" => "Argentina",
    "Club" => "Inter Miami",
    "Posisi" => "Attacking Midfielder",
    "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjXLxAZqBi9Cv4GiTTyJ0ANuTM2gm6nyDoXV_fPBbe3QHsufuG-VspGrhLPvPQeTgzvLw&usqp=CAU"
],
[
    "Nama" => "Frenkie De Jong",
    "Negara" => "Belanda",
    "Club" => "FC Barcelona",
    "Posisi" => "Defensife Midfilder",
    "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdygi-SffsSAuaHS_PHMhukgX33MHZgCBz51Sw1D0_b_jwtlpNYmlWEbHEPlhzhdtG6jk&usqp=CAU",
],
[
    "Nama" => "Jude Bellingham",
    "Negara" => "Inggris",
    "Club" => "Real Madrid",
    "Posisi" => "Attacking Midfielder",
    "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtU5Wn1ziMcHiD3eoagZZl0kip8yIMUxN2Zg&usqp=CAU",
],
[
    "Nama" => "Neymar JR",
    "Negara" => "Brazil",
    "Club" => "Al Hilal",
    "Posisi" => "Left Wing Forward",
    "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUL1ywGy4Z4MWV2Fn7t2DeQYhHPyABOBRiRLP7QdHSy-Ai4zia4ufGDs7ALJRcfmFtwYs&usqp=CAU",
],
[
    "Nama" => "Marc Andre Ter Stegen",
    "Negara" => "Germany",
    "Club" => "Barcelona",
    "Posisi" => "Goal Keeper",
    "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnk4LvzxYlPaZNpnOZbyVVGHJKcpC8vN1BpQ&usqp=CAU",
],
];


echo '<table border="1">';
echo '<tr><th>Nama</th><th>Negara</th><th>Club</th><th>Posisi</th><th>Gambar</th></tr>';
foreach ($dataArray as $data) {
    echo '<tr>';
    echo '<td><a href="latihan5c.php?' . http_build_query($data) . '">' . $data['Nama'] . '</a></td>';
    echo '<td>' . $data['Negara'] . '</td>';
    echo '<td>' . $data['Club'] . '</td>';
    echo '<td>' . $data['Posisi'] . '</td>';
    echo '<td><img src="' . $data['Gambar'] . '" alt=""></td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>