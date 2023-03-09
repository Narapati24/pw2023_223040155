<?php 

// ARRAY
$hari = ["Senin",
        "Selasa",
        "Rabu"];
$bulan = array('Januari',
                'Februari',
                'Maret',
                'April');
$myArray = ["Narapati",39, false];
$binatang = ['🐈','🐇','🐤','🦈'];

// Mencetak array
echo $hari[1];
echo "<br>";

// Mencetak seluruh
print_r($hari);
echo "<br>";
var_dump($myArray);
echo "<br>";

echo "<hr>";

// mencetak hanya nilainya
foreach($hari as $day){
    echo "$day <br>";
}

echo "<hr>";

// Manipulasi Array
// Menggunakan index
$hari[3] = "Kamis";

// Menambahkan elemen di akhir
$hari[] = "Jumat";

// Menambahkan element di akhir menggunakan array_push
array_push($bulan, 'April','Mei');

foreach($hari as $day){
    echo "$day <br>";   
}
echo "<hr>";
foreach($bulan as $day){
    echo "$day <br>";   
}

?>