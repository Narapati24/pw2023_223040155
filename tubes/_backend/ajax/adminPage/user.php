<?php
require '../../config.php';
require '../../searchBar.php';
$users = findAdminUsers($_GET['keyword'], $_GET['keyword2']);
?>

<?php foreach ($users as $u) { ?>
  <div class="d-inline-block text-center col-sm-2" style="width: min-content;">
    <button class="btn position-relative" type="button" data-bs-toggle="modal" data-bs-target="#profile-<?= $u['uid']; ?>" aria-expanded="false" aria-controls="collapseExample">
      <span class="position-absolute translate-middle badge rounded-pill bg-danger" style="margin-left: 15px; margin-top: 15px;">
        99+
        <span class="visually-hidden">unread messages</span>
      </span>
      <img src="<?= base_url('_asset/img/profile/') . $u['img']; ?>" class="rounded-circle border border-success" style="object-fit: cover;" width="100" height="100" alt="profile">
      <?php foreach ($roleRequest as $rR) {
        if ($rR['user_id'] === $u['uid']) { ?>
          <span class="position-absolute translate-middle p-2 bg-warning border border-light rounded-circle" style="margin-top: 10px; margin-left: -10px;">
            <span class="visually-hidden">New alerts</span>
          </span>
      <?php };
      }; ?>
    </button>
    <p><?= $u['username']; ?></p>
    <p style="font-size: 12px; margin-top: -10px;"><?= $u['role_name']; ?></p>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="profile-<?= $u['uid']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $u['username']; ?></h1>
          <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $u['role_name']; ?></h1>
        </div>
        <div class="modal-body">
          <img class="mb-3" src="<?= base_url('_asset/img/profile/') . $u['img']; ?>" width="100" height="100" style="object-fit: cover; overflow: hidden;">
          <button class="badge rounded-pill text-bg-danger position-absolute" style="right: 10px;">Report</button>
          <button class="btn badge rounded-pill text-bg-warning position-absolute" type="button" data-bs-toggle="offcanvas" data-bs-target="#requestRole-<?= $u['uid']; ?>" aria-controls="offcanvasRight" style="top: 50px;right: 10px;">Request</button>
          <p><?= $u['first_name']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Canvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="requestRole-<?= $u['uid']; ?>" aria-labelledby="offcanvasRightLabel" style="position: absolute; z-index: 9999;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Request</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="background-color: whitesmoke;">
      <?php foreach ($roleRequest as $rR) {
        if ($rR['user_id'] === $u['uid']) { ?>
          <form method="post" class="d-flex justify-content-between border p-3 m-2 bg-white">
            <?= $rR['role_name']; ?>
            <input name="id" type="hidden" value="<?= $rR['id_request_role']; ?>">
            <input name="roleRequest" type="hidden" value="<?= $rR['role_id']; ?>">
            <input name="idProfile" type="hidden" value="<?= $profile[0]['id']; ?>">
            <div>
              <button name="acceptRequest" type="submit" class="btn badge rounded-pill text-bg-success">Accept</button>
              <button name="dennyRequest" type="submit" class="btn badge rounded-pill text-bg-danger">Denny</button>
            </div>
          </form>
      <?php };
      }; ?>
    </div>
  </div>
<?php
}; ?>