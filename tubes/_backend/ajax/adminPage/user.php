<?php
require '../../config.php';
require '../../searchBar.php';
$users = findAdminUsers($_GET['keyword'], $_GET['keyword2']);
?>

<?php foreach ($users as $u) { ?>
  <div class="d-inline-block text-center col-sm-2" style="width: min-content;">
    <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#profile-<?= $u['id']; ?>" aria-expanded="false" aria-controls="collapseExample">
      <img src="<?= base_url('_asset/img/profile/') . $u['img']; ?>" class="rounded-circle border border-success" style="object-fit: cover;" width="100" height="100" alt="profile">
    </button>
    <p><?= $u['username']; ?></p>
    <p style="font-size: 12px; margin-top: -10px;"><?= $u['role_name']; ?></p>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="profile-<?= $u['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $u['username']; ?></h1>
          <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $u['role_name']; ?></h1>
        </div>
        <div class="modal-body">
          <img class="w-25 mb-3" src="<?= base_url('_asset/img/profile/') . $u['img']; ?>">
          <p><?= $u['first_name']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php }; ?>