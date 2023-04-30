<?php
require '_backend/function.php';
require '_backend/updateClicks.php';

updateClicks();
// tampung ke variable
$article = query("SELECT * FROM article ORDER BY id DESC LIMIT 11");
$hotArticle = query("SELECT * FROM article, popularity WHERE article.id = popularity.article_id ORDER BY popularity.monthly DESC");

// header
$title = 'PeNEWS';
require_once '_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container">
  <h4>Hot This Week</h4>
  <div class="row g-0 bg-body-secondary position-relative mb-4" style="height: 450px;overflow: hidden;">
    <div class="col-md-6 mb-md-0 p-md-4">
      <img src="img/article/<?= $hotArticle[0]['img']; ?>" class="w-100" alt="<?= $hotArticle[0]['title']; ?>" style="object-fit: cover;" height="400">
    </div>
    <div class="col-md-6 p-4 ps-md-0">
      <h5 class="mt-0">
        <?= $hotArticle[0]['title']; ?>
      </h5>
      <p>
        <?= substr($hotArticle[0]['content'], 0, 500); ?>...
      </p>
      <a href="pages/detail.php?id=<?= $hotArticle[0]['id']; ?>" class="stretched-link">see more</a>
    </div>
  </div>

  <h4>Other News</h4>
  <?php foreach ($article as $a) : ?>
    <div class="d-inline-block card ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
      <img src="img/article/<?= $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
      <div class="card-body">
        <h5 class="card-title"><?= substr($a['title'], 0, 38); ?>...</h5>
        <p class="card-text"><?= substr($a['content'], 0, 90); ?>...</p>
        <a href="pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- see more news -->
  <div class="card d-inline-block ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
    <div class="d-flex" style="height: 100%; align-items: center; justify-content: center;">
      <a href="pages/news.php" style="text-align: center;">
        <img src="img/logo/rightArrow.png" alt="more logo" height="60" width="60">
        <p>see more news</p>
      </a>
    </div>
  </div>
</div>

<!-- footer -->
<?php require_once '_footer.php'; ?>