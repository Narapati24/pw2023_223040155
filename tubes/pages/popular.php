<?php
require '../_backend/function.php';
require '../_backend/searchBar.php';

// Search bar
if (isset($_POST['search'])) {
  $articleTrendingToday = findPopular($_POST['keyword']);
  $articleTrendingMonth = findPopular($_POST['keyword']);
}

$articleTrendingToday = query("SELECT * FROM article,popularity WHERE article.id = popularity.article_id ORDER BY popularity.daily DESC LIMIT 4");
$articleTrendingMonth = query("SELECT * FROM article,popularity WHERE article.id = popularity.article_id ORDER BY popularity.monthly DESC LIMIT 4");

// header
$title = 'PeNEWS';
require_once '../_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<!-- today -->
<div class="container">
  <form class="d-flex mb-3" role="search" method="post">
    <input name="keyword" class="form-control me-2" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
    <button name="search" class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <div class="">
    <h4>Trending Today</h4>
    <?php foreach ($articleTrendingToday as $a) { ?>
      <div class="d-inline-block card ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
        <img src="../img/article/<?= $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
        <div class="card-body">
          <h5 class="card-title"><?= substr($a['title'], 0, 38); ?>...</h5>
          <p class="card-text"><?= substr($a['short_content'], 0, 90); ?>...</p>
          <a href="detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
        </div>
      </div>
    <?php }; ?>
  </div>
  <br>
  <!-- week -->
  <div class="">
    <h4>Trending This Week</h4>
    <div class="card" style="width: 18rem;">
      <img src="../img/sample/sample.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card with stretched link</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
      </div>
    </div>
  </div>
  <br>
  <!-- month -->
  <div class="">
    <h4>Trending This Month</h4>
    <?php foreach ($articleTrendingMonth as $a) { ?>
      <div class="d-inline-block card ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
        <img src="../img/article/<?= $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
        <div class="card-body">
          <h5 class="card-title"><?= substr($a['title'], 0, 38); ?>...</h5>
          <p class="card-text"><?= substr($a['short_content'], 0, 90); ?>...</p>
          <a href="detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
        </div>
      </div>
    <?php }; ?>
  </div>
</div>

<script>
  document.getElementById('popular').classList.add('active')
</script>

<!-- footer -->
<?php require_once '../_footer.php'; ?>