<?php
require '../function.php';

$id = $_GET['id'];
$article = query("SELECT * FROM article WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $article['title']; ?></title>
</head>

<body>
  <h1>
    <?= $article['title']; ?>
  </h1>
  <img src="../img/article/<?= $article['img']; ?>" alt="">
  <p><?= $article['content']; ?></p>
</body>

</html>