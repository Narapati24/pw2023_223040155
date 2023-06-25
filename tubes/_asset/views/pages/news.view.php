<?php
require '../_asset/views/partial/_header.php';
?>
<link rel="stylesheet" href="<?= base_url('_asset/css/custom/news.css'); ?>">

<!-- content -->
<div class="container">
  <form class="d-flex mb-3" role="search" method="post">
    <select name="category" class="form-control w-25 me-2" id="">
      <option value="">All</option>
      <?php foreach ($category as $c) { ?>
        <option value="<?= $c['id_category']; ?>" <?= isset($_POST['category']) && $_POST['category'] === $c['id_category'] ? 'selected' : ''; ?>><?= $c['category_name']; ?></option>
      <?php }; ?>
    </select>
    <input name="keyword" class="form-control me-2" value="<?= isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
    <button name="search" class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <h4>Newes</h4>
  <section class="row justify-content-evenly">
    <?php foreach ($article as $a) : ?>
      <div class="d-inline-block card col-4 mb-4 pl-wave" style="width: 18rem; height: 420px; overflow: hidden;">
        <div class="other-news pl">
          <img src="<?= base_url('_asset/img/article/') . $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
        </div>
        <div class="card-body" style="width: 290px; margin-left: -15px;">
          <h5 class="card-title pl"><?= substr($a['title'], 0, 38); ?>...</h5>
          <p class="card-text pl"><?= substr($a['shortContent'], 0, 90); ?>...</p>
          <a href="<?= base_url('pages/detail.php?id=') . $a['id']; ?>" style="position: absolute ;bottom: 10px; left: 15px;" class="btn btn-primary stretched-link pl">More Details</a>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- pagination -->
  <div aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="?page=<?= ($halamanAktif > 1) ? $halamanAktif - 1 : $halamanAktif . '#'; ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php for ($i = 1; $i <= $jumlahHalaman; $i++) { ?>
        <?php if ($halamanAktif == $i) { ?>
          <li class="page-item"><a class="page-link active" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
        <?php } else { ?>
          <li class="page-item"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
        <?php }; ?>
      <?php }; ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= ($halamanAktif < $jumlahHalaman) ? $halamanAktif + 1 : $halamanAktif . '#'; ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<br>

<script>
  document.getElementById('news').classList.add('active')
</script>
<script src="<?= base_url('_asset/js/custom/script.js'); ?>"></script>

<!-- footer -->
<?php require_once '../_asset/views/partial/_footer.php'; ?>