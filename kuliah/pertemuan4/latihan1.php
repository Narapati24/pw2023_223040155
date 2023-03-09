<?php 

function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
        echo "$angka adalah bilangan genap <br>";
    } else {
        echo "$angka adalah bilangan ganjil <br>";
    }
}

cekGanjilGenap(10);
cekGanjilGenap(5);
cekGanjilGenap(20034);

?>