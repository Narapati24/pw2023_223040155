<?php
require '../_backend/function.php';
require '../_backend/updateClicks.php';

// return pages if no id
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

$id = $_GET['id'];
$up = updateClicks($id);
clicks("UPDATE popularity SET daily = daily + 1, monthly = monthly + 1, lifetime = lifetime + 1, update_data = now() WHERE article_id = $id");
$article = query("SELECT * FROM article WHERE id = $id")[0];

$title = $article['title'];
require_once '../_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container">
  <h1>
    <?= $article['title']; ?>
  </h1>
  <img src="../img/article/<?= $article['img']; ?>" alt="">
  <p><?= $article['content']; ?></p>
</div>

<!-- footer -->
<footer>
  <div class="footer">
    <p>&copy; 2023 My Company. All Rights Reserved.</p>
  </div>
</footer>

<!-- Java Script -->
<script src="../js/bootstrap/bootstrap.min.js"></script>
</body>

</html>