<?php

function fak($j){
    $faktorial_hasil = 1;

    for($i=1 ; $i<=$j ; $i++){
        $faktorial_hasil = $faktorial_hasil * $i;
}

echo "Faktorial dari $j ialah : $faktorial_hasil";
}
$angka = 5;

fak($angka);