<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="styles1c.css">
    <title>segitiga siku-siku dengan huruf dan kotak</title>
</head>

<body>
    <div class="container">
        <h1></h1>
        <div class="triangle">
            <?php
            $TinggiSegitiga =3;
            for ($x =1; $x<= $TinggiSegitiga; $x++) {
                $KodeAscii = 65;
                for ($y =1; $y <=$x; $y++) {
                    $huruf = chr ($KodeAscii);
                    echo "<div class='box'> $huruf</div>";
                    $KodeAscii++;

                }
                echo "<br>";
            }
            ?>
        </div>
    </div>
 </body>
 </html>