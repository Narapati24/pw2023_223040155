<?php

$fName = 'Narapati ';
$lName = 'Keysa';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        echo $fName . $lName . '<br>';
    } elseif ($i % 5 == 0) {
        echo $lName . '<br>';
    } elseif ($i % 3 == 0) {
        echo $fName . '<br>';
    } else {
        echo $i . '<br>';
    }
}

?>

