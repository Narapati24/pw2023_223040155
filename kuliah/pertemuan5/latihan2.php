<?php 

$binatang = ['🐈','🐇','🐤','🦈','🐏'];
$makanan = ['🍉','🍒','🍓','🥝','🍌'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php foreach($binatang as $namaBinatang) { ?>
        <li> <?= $namaBinatang; ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar Makanan</h2>
    <ol>
        <?php foreach($makanan as $namaMakanan) { ?>
        <li><?= $namaMakanan; ?></li>
        <?php } ?>
    </ol>
</body>
</html>