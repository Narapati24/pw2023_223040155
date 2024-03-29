<?php
require '../../config.php';
require '../../searchBar.php';

// pagination
// konfigurasi
$data = $_GET['keyword'];
$data2 = $_GET['keyword2'];
$data3 = $_GET['keyword3'];
$jumlahDataPerhalamanArticle = 6;
$jumlahDataArticle = count(query("SELECT * FROM users, article WHERE users.id = article.user_id && article.visibility_id LIKE '%$data%' && (article.title LIKE '%$data2%' || article.content LIKE '%$data2%') && (users.first_name LIKE '%$data3%' || users.last_name LIKE '%$data3%')"));
$jumlahHalamanArticle = ceil($jumlahDataArticle / $jumlahDataPerhalamanArticle);
$halamanAktifArticle = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$awalDataArticle = ($jumlahDataPerhalamanArticle * $halamanAktifArticle) - $jumlahDataPerhalamanArticle;

$query = findAdminArticle($_GET['keyword'], $_GET['keyword2'], $_GET['keyword3'], $awalDataArticle, $jumlahDataPerhalamanArticle);

?>

<?php foreach ($query as $a) { ?>
  <div class="d-flex">
    <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#article-<?= $a['id']; ?>" aria-expanded="false" aria-controls="collapseExample">
      <img src="<?= base_url('_asset/img/article/') . $a['img']; ?>" width="100" height="60" alt="profile">
    </button>
    <div style="line-height: 3px; margin-top: 12px;">
      <p><?= substr($a['title'], 0, 90) ?>
        <?= strlen($a['title']) > 90 ? '...' : ''; ?></p>
      <p>Editor : <?= $a['first_name'] . ' ' . $a['last_name']; ?></p>
      <p style="font-size: 12px; margin-top: 20px;"><?= $a['insert_date']; ?></p>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="article-<?= $a['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $a['title']; ?></h1>
        </div>
        <div class="modal-body">
          <img class="w-100 mb-3" src="<?= base_url('_asset/img/article/') . $a['img']; ?>">
          <p><?= $a['shortContent']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="<?= base_url('pages/editArticle.php?id=') . $a['id']; ?>" class="btn btn-primary">Edit</a>
        </div>
      </div>
    </div>
  </div>
<?php };
if (!$query) { ?>
  <h5 style="text-align: center; margin-top: 200px; margin-bottom: 200px;">NO ARTICLE</h5>
<?php }; ?>

<!-- pagination -->
<div aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous" onclick="pageClick(<?= ($halamanAktifArticle > 1) ? $halamanAktifArticle - 1 : $halamanAktifArticle . '#';; ?>)">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for ($i = 1; $i <= $jumlahHalamanArticle; $i++) { ?>
      <?php if ($halamanAktifArticle == $i) { ?>
        <li class="page-item"><a class="page-link active" href="#" onclick="pageClick(<?= $i; ?>)"><?= $i; ?></a></li>
      <?php } else { ?>
        <li class="page-item"><a class="page-link" href="#" onclick="pageClick(<?= $i; ?>)"><?= $i; ?></a></li>
      <?php }; ?>
    <?php }; ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next" onclick="pageClick(<?= ($halamanAktifArticle < $jumlahHalamanArticle) ? $halamanAktifArticle + 1 : $halamanAktifArticle . '#'; ?>)">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</div>