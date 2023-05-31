<?php
require '_backend/function.php';
require '_backend/config.php';
require '_backend/updateClicks.php';

updateClicks();
// tampung ke variable
$article = query("SELECT * FROM article WHERE visibility_id = 3 ORDER BY id DESC LIMIT 7");
$hotArticle = query("SELECT * FROM article, popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.daily DESC");
$kategory = query("SELECT * FROM category ORDER BY RAND()");
$articleKategory = query("SELECT * FROM article, article_category, category WHERE article.id = article_category.article_id && article_category.category_id = category.id_category ORDER BY article.id DESC");

if ($hotArticle[0]['daily'] === '0') {
  $hotArticle = query("SELECT * FROM article, popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY RAND()");
}

// header
$title = 'Home';
require_once '_header.php';
?>

<link rel="stylesheet" href="<?= base_url('_asset/css/custom/news.css'); ?>">

<!-- content -->
<section class="container">
  <h4>Hot Today</h4>
  <div class="row g-0 bg-body-secondary position-relative mb-4 pl-wave" style="overflow: hidden;">
    <div class="col-md-6 mb-md-0 p-md-4">
      <div class="pl">
        <img src="_asset/img/article/<?= $hotArticle[0]['img']; ?>" class="w-100" alt="<?= $hotArticle[0]['title']; ?>" style="object-fit: cover;" height="400">
      </div>
    </div>
    <div class="col-md-6 p-4 ps-md-0">
      <h3 class="mt-0 pl">
        <?= $hotArticle[0]['title']; ?>
      </h3>
      <p class="pl">
        <?= substr($hotArticle[0]['shortContent'], 0, 500); ?>...
      </p>
      <a href="pages/detail.php?id=<?= $hotArticle[0]['id']; ?>" class="stretched-link"></a>
    </div>
  </div>

  <h4>Other News</h4>
  <section class="row justify-content-evenly">
    <?php foreach ($article as $a) : ?>
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
    <!-- see more news -->
    <div class="card d-inline-block col-4 mb-4" style="width: 18rem; height: 420px; overflow: hidden;">
      <div class="d-flex" style="height: 100%; align-items: center; justify-content: center;">
        <a class="pl" href="pages/news.php" style="text-align: center;">
          <img src="_asset/img/logo/rightArrow.png" alt="more logo" height="60" width="60">
          <p>see more news</p>
        </a>
      </div>
    </div>
  </section>

  <!-- category list -->
  <section class="row bg-body-secondary rounded d-flex" style="justify-content: space-evenly;">
    <?php foreach (array_slice($kategory, 0, 3) as $k) { ?>
      <div class="col-4 border border-success rounded bg-light mt-3 mb-3" style="height: 540px; width: 400px; overflow: hidden;">
        <div class="d-flex p-4">
          <h4 class=""><?= $k['category_name']; ?></h4>
          <a href="" class="ms-auto btn btn-primary pl">More Details</a>
        </div>
        <?php foreach ($articleKategory as $ka) {
          if ($k['id_category'] == $ka['category_id']) { ?>
            <hr>
            <li class="row">
              <img class="col-4" src="<?= base_url('_asset/img/article/') . $ka['img']; ?>" alt="" width="100" height="100" style="object-fit: cover;">
              <a class="link-dark link-offset-2 col" style="text-decoration: none;" href="<?= base_url('pages/detail.php?id=') . $ka['id']; ?>">
                <?= substr($ka['title'], 0, 100); ?>...
              </a>
            </li>
            <hr>
        <?php };
        }; ?>
      </div>
    <?php }; ?>
  </section>
</section>

<script src="<?= base_url('_asset/js/custom/script.js'); ?>"></script>

<!-- footer -->
<?php require_once '_footer.php'; ?>