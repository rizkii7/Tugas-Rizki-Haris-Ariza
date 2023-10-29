<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
        .ubahGayaTulisan {
    font-size: 28px;
    font-family: Arial;
    color: #1A0547;
    font-style: italic;
    font-weight: bold;
}
    </style>
    <?php
    function ubahGayaTulisan($tulisan, $kelas) {
        return '<p class="' . $kelas . '">' . $tulisan . '</p>';
    }

    $teks = "Hello world! Here I come !";
    $kelas = "ubahGayaTulisan";

    echo ubahGayaTulisan($tulisan, $kelas);
    ?>
</body>
</html>