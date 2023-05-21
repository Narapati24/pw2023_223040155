<?php
require '../_backend/function.php';
require '../_backend/searchBar.php';

// pagination
// konfigurasi
$jumlahDataPerhalaman = 16;
$jumlahData = count(query("SELECT * FROM article WHERE visibility_id = 3"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$article = query("SELECT * FROM article WHERE visibility_id = 3 ORDER BY id DESC LIMIT $awalData, $jumlahDataPerhalaman");

// Search bar
if (isset($_POST['search'])) {
  $article = find($_POST['keyword']);
}

// header
$title = 'Newest';
require_once '../_header.php';
?>

<link rel="stylesheet" href="<?= base_url('css/custom/news.css'); ?>">

<!-- content -->
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
        <p class="card-text"><?= substr($a['shortContent'], 0, 90); ?>...</p>
        <a href="detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
      </div>
    </div>
  <?php endforeach; ?>

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

<!-- footer -->
<?php require_once '../_footer.php'; ?>