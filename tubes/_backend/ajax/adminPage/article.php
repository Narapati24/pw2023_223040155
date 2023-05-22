<?php
require '../../function.php';
require '../../config.php';
require '../../searchBar.php';

// pagination
// konfigurasi
$data = $_GET['keyword'];
$data2 = $_GET['keyword2'];
$data3 = $_GET['keyword3'];
$jumlahDataPerhalaman = 6;
$jumlahData = count(query("SELECT * FROM users, article WHERE users.id = article.user_id && article.visibility_id LIKE '%$data%' && (article.title LIKE '%$data2%' || article.content LIKE '%$data2%') && (users.first_name LIKE '%$data3%' || users.last_name LIKE '%$data3%')"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$query = findAdminArticle($_GET['keyword'], $_GET['keyword2'], $_GET['keyword3'], $awalData, $jumlahDataPerhalaman);

?>

<?php foreach ($query as $a) { ?>
  <div class="d-flex">
    <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#articleInfo" aria-expanded="false" aria-controls="collapseExample">
      <img src="<?= base_url('_asset/img/article/') . $a['img']; ?>" width="100" height="60" alt="profile">
    </button>
    <div style="line-height: 3px; margin-top: 12px;">
      <p><?= substr($a['title'], 0, 90) ?>
        <?= strlen($a['title']) > 90 ? '...' : ''; ?></p>
      <p>Editor : <?= $a['first_name'] . ' ' . $a['last_name']; ?></p>
      <p style="font-size: 12px; margin-top: 20px;"><?= $a['insert_date']; ?></p>
    </div>
  </div>
<?php }; ?>

<!-- pagination -->
<div aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous" onclick="pageClick(<?= ($halamanAktif > 1) ? $halamanAktif - 1 : $halamanAktif . '#';; ?>)">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) { ?>
      <?php if ($halamanAktif == $i) { ?>
        <li class="page-item"><a class="page-link active" href="#" onclick="pageClick(<?= $i; ?>)"><?= $i; ?></a></li>
      <?php } else { ?>
        <li class="page-item"><a class="page-link" href="#" onclick="pageClick(<?= $i; ?>)"><?= $i; ?></a></li>
      <?php }; ?>
    <?php }; ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next" onclick="pageClick(<?= ($halamanAktif < $jumlahHalaman) ? $halamanAktif + 1 : $halamanAktif . '#'; ?>)">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</div>