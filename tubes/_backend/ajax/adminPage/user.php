<?php
require '../../config.php';
require '../../searchBar.php';


$data = $_GET['keyword'];
$data2 = $_GET['keyword2'];
$jumlahDataPerhalamanUser = 12;
$jumlahDataUser = count(query("SELECT users.id AS uid, users.*, roles.* FROM users, roles WHERE users.id_role = roles.id && (users.username LIKE '%$data%' && users.id_role LIKE '%$data2%')"));
$jumlahHalamanUser = ceil($jumlahDataUser / $jumlahDataPerhalamanUser);
$halamanAktifUser = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalDataUser = ($jumlahDataPerhalamanUser * $halamanAktifUser) - $jumlahDataPerhalamanUser;
$users = findAdminUsers($_GET['keyword'], $_GET['keyword2'], $awalDataUser, $jumlahDataPerhalamanUser);

$roleRequest = query("SELECT * FROM roles, role_request WHERE role_request.status_id = '3' && role_request.role_id = roles.id");
$report = query("SELECT reporting.*, article.title, article.user_id FROM reporting, article WHERE status_id = '3' AND reporting.article_id = article.id");
?>


<?php foreach ($users as $u) { ?>
  <div class="d-inline-block text-center col-sm-2" style="width: min-content;">
    <button class="btn position-relative" type="button" data-bs-toggle="modal" data-bs-target="#profile-<?= $u['uid']; ?>" aria-expanded="false" aria-controls="collapseExample">
      <?php foreach ($report as $r) :
        if ($r['user_id'] == $u['uid']) {
          $count[] = $r ?>
          <span class="position-absolute translate-middle badge rounded-pill bg-danger" style="margin-left: 15px; margin-top: 15px;">
            <?= count($count); ?>
            <span class="visually-hidden">unread messages</span>
          </span>
      <?php };
      endforeach ?>
      <img src="<?= base_url('_asset/img/profile/') . $u['img']; ?>" class="rounded-circle border border-success" style="object-fit: cover;" width="100" height="100" alt="profile">
      <?php foreach ($roleRequest as $rR) {
        if ($rR['user_id'] === $u['uid']) { ?>
          <span class="position-absolute translate-middle p-2 bg-warning border border-light rounded-circle" style="margin-top: 10px; margin-left: -15px;">
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
          <button class="badge rounded-pill text-bg-danger position-absolute" type="button" data-bs-toggle="offcanvas" data-bs-target="#report-<?= $u['uid']; ?>" aria-controls="offcanvasRight" style="right: 10px;">Report</button>
          <button class="btn badge rounded-pill text-bg-warning position-absolute" type="button" data-bs-toggle="offcanvas" data-bs-target="#requestRole-<?= $u['uid']; ?>" aria-controls="offcanvasRight" style="top: 50px;right: 10px;">Request</button>
          <p><?= $u['first_name']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Canvas Request-->
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

  <!-- Canvas Report-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="report-<?= $u['uid']; ?>" aria-labelledby="offcanvasRightLabel" style="position: absolute; z-index: 9999;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Report</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="background-color: whitesmoke;">
      <?php foreach ($report as $r) {
        if ($r['user_id'] === $u['uid']) { ?>
          <form method="post" class="d-flex justify-content-between border p-3 m-2 bg-white">
            <img class="w-25 col me-2" src="<?= base_url('_asset/img/reporting/') . $r['img_reporting']; ?>" alt="" style="object-fit: cover;">
            <input name="id" type="hidden" value="<?= $r['id_reporting']; ?>">
            <input name="idProfile" type="hidden" value="<?= $profile[0]['id']; ?>">
            <span class="col"><?= $r['desc_reporting']; ?></span>
            <div class="col-2">
              <button name="acceptReport" type="submit" class="btn badge rounded-pill text-bg-success">Accept</button>
              <button name="dennyReport" type="submit" class="btn badge rounded-pill text-bg-danger">Denny</button>
            </div>
          </form>
      <?php };
      }; ?>
    </div>
  </div>
<?php
}; ?>
<!-- pagination -->
<div aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous" onclick="pageClick(<?= ($halamanAktifUser > 1) ? $halamanAktifUser - 1 : $halamanAktifUser . '#';; ?>)">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for ($i = 1; $i <= $jumlahHalamanUser; $i++) { ?>
      <?php if ($halamanAktifUser == $i) { ?>
        <li class="page-item"><a class="page-link active" href="#" onclick="pageClick(<?= $i; ?>)"><?= $i; ?></a></li>
      <?php } else { ?>
        <li class="page-item"><a class="page-link" href="#" onclick="pageClick(<?= $i; ?>)"><?= $i; ?></a></li>
      <?php }; ?>
    <?php }; ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next" onclick="pageClick(<?= ($halamanAktifUser < $jumlahHalamanUser) ? $halamanAktifUser + 1 : $halamanAktifUser . '#'; ?>)">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</div>