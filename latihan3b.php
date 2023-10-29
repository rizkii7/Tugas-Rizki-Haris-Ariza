<! HTML DOCTYPE>
<html lang = "en">
<kepala>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <gaya>
 . bingkai luar {
            batas: 2px hitam pekat;
            tampilan: blok sebaris;
            bantalan: 10piksel;
         }
    </gaya>
</kepala>
<badan>
<?php
$jawabanIsset ="Isset adalah = Untuk menentukan apakah suatu variabel dideklarasikan dan berbeda dari null.<br><br>";
$jawabanEmpty ="Empty adalah = Digunakan untuk menentukan apakah variabel ada dan nilai variabel tidak bernilai false.";

function soal($jawabanIsset,$jawabanEmpty){
    $style = "Aturstyle";
    "<span class='$style'>$jawabanIsset$jawabanEmpty</span>";
}

echo '<div class="bingkai luar">' . soal($jawabanIsset, $jawabanEmpty) . '</div>';
?>
</badan>
</.html>