<?php
function faktorial ($a) {
    if ($a<=1){
        return 1;
    } else {
        return $a * faktorial ($a -1);
    }
}

$hasil = faktorial(5);
echo "Faktorial dari 5 adalah $hasil";
?>