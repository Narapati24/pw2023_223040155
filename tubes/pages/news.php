<?php
require '../_backend/function.php';
require '../_backend/searchBar.php';

$article = query("SELECT * FROM article ORDER BY id DESC");

// Search bar
if (isset($_POST['search'])) {
  $article = find($_POST['keyword']);
}

// header
$title = 'PeNEWS';
require_once '../_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container">
  <form class="d-flex mb-3" role="search" method="post">
    <input name="keyword" class="form-control me-2" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
    <button name="search" class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <h4>Newes</h4>
  <?php foreach ($article as $a) : ?>
    <div class="card d-inline-block ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
      <img src="../img/article/<?= $a['img']; ?>" class="card-img-top" alt="..." height="160px">
      <div class="card-body">
        <h5 class="card-title"><?= substr($a['title'], 0, 38); ?>...</h5>
        <p class="card-text"><?= substr($a['content'], 0, 90); ?>...</p>
        <a href="detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<br>

<!-- footer -->
<?php require_once '../_footer.php'; ?>