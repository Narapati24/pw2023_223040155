<?php
require '../../function.php';
require '../../config.php';
require '../../searchBar.php';
$users = findAdminUsers($_GET['keyword'], $_GET['keyword2']);
?>

<?php foreach ($users as $u) { ?>
  <div class="d-inline-block text-center col-sm-2" style="width: 150px;">
    <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#profileUser-<?= $u['username']; ?>" role="tab" aria-expanded="false" aria-controls="collapseExample">
      <img src="<?= base_url('_asset/img/profile/') . $u['img']; ?>" class="rounded-circle border border-success" width="100" height="100" alt="profile">
    </button>
    <p><?= $u['username']; ?></p>
    <p style="font-size: 12px; margin-top: -10px;"><?= $u['role_name']; ?></p>
  </div>
<?php }; ?>