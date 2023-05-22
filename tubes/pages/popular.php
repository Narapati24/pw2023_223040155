<?php
require '../_backend/function.php';
require '../_backend/config.php';
require '../_backend/searchBar.php';

$articleTrendingToday = query("SELECT * FROM article,popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.daily DESC LIMIT 4");
$articleTrendingMonth = query("SELECT * FROM article,popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.monthly DESC LIMIT 4");
$articleTrendingWeek = query("SELECT * FROM article,popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.weekly DESC LIMIT 4");

// Search bar
if (isset($_POST['search'])) {
  $articleTrendingToday = findPopularToday($_POST['keyword']);
  $articleTrendingMonth = findPopularMonth($_POST['keyword']);
}

// header
$title = 'Popular';
require_once '../_header.php';
?>

<link rel="stylesheet" href="<?= base_url('_asset/css/custom/news.css'); ?>">

<!-- content -->
<!-- today -->
<div class="container">
  <form class="d-flex mb-3" role="search" method="post">
    <input name="keyword" class="form-control me-2" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
    <button name="search" class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <div class="">
    <h4>Trending Today</h4>
    <section class="row justify-content-evenly">
      <?php foreach ($articleTrendingToday as $a) : ?>
        <div class="d-inline-block card col-4 mb-4 pl-wave" style="width: 18rem; height: 420px; overflow: hidden;">
          <div class="other-news pl">
            <img src="<?= base_url('_asset/img/article/') . $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
          </div>
          <div class="card-body" style="width: 290px; margin-left: -15px;">
            <h5 class="card-title pl"><?= substr($a['title'], 0, 38); ?>...</h5>
            <p class="card-text pl"><?= substr($a['shortContent'], 0, 90); ?>...</p>
            <a href="pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute ;bottom: 10px; left: 15px;" class="btn btn-primary stretched-link pl">More Details</a>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
  </div>
  <br>
  <!-- week -->
  <div class="">
    <h4>Trending This Week</h4>
    <section class="row justify-content-evenly">
      <?php foreach ($articleTrendingWeek as $a) : ?>
        <div class="d-inline-block card col-4 mb-4 pl-wave" style="width: 18rem; height: 420px; overflow: hidden;">
          <div class="other-news pl">
            <img src="<?= base_url('_asset/img/article/') . $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
          </div>
          <div class="card-body" style="width: 290px; margin-left: -15px;">
            <h5 class="card-title pl"><?= substr($a['title'], 0, 38); ?>...</h5>
            <p class="card-text pl"><?= substr($a['shortContent'], 0, 90); ?>...</p>
            <a href="pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute ;bottom: 10px; left: 15px;" class="btn btn-primary stretched-link pl">More Details</a>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
  </div>
  <br>
  <!-- month -->
  <div class="">
    <h4>Trending This Month</h4>
    <section class="row justify-content-evenly">
      <?php foreach ($articleTrendingMonth as $a) : ?>
        <div class="d-inline-block card col-4 mb-4 pl-wave" style="width: 18rem; height: 420px; overflow: hidden;">
          <div class="other-news pl">
            <img src="<?= base_url('_asset/img/article/') . $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
          </div>
          <div class="card-body" style="width: 290px; margin-left: -15px;">
            <h5 class="card-title pl"><?= substr($a['title'], 0, 38); ?>...</h5>
            <p class="card-text pl"><?= substr($a['shortContent'], 0, 90); ?>...</p>
            <a href="detail.php?id=<?= $a['id']; ?>" style="position: absolute ;bottom: 10px; left: 15px;" class="btn btn-primary stretched-link pl">More Details</a>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
  </div>
</div>

<script>
  document.getElementById('popular').classList.add('active')
</script>
<script src="<?= base_url('_asset/js/custom/script.js'); ?>"></script>

<!-- footer -->
<?php require_once '../_footer.php'; ?>