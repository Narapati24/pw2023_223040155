<?php
require '../function.php';
require '../searchBar.php';
$query = findUserArticle($_GET['keyword']);
?>

<?php foreach ($query as $a) { ?>
  <div class="d-flex">
    <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#articleInfo" aria-expanded="false" aria-controls="collapseExample">
      <img src="../../img/article/<?= $a['img']; ?>" width="100" height="60" alt="profile">
    </button>
    <div style="line-height: 3px; margin-top: 12px;">
      <p><?= $a['title']; ?></p>
      <p>Editor : <?= $a['first_name'] . ' ' . $a['last_name']; ?></p>
      <p style="font-size: 12px; margin-top: 20px;"><?= $a['insert_date']; ?></p>
    </div>
  </div>
<?php }; ?>