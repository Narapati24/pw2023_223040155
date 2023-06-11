<?php
require '../../_asset/views/partial/account/_header.php';
?>

<style>
  body {
    overflow-x: hidden;
  }
</style>
<!-- content -->
<h4 class="container">Hello <b>Admin</b> <?= $profile[0]['first_name']; ?>!</h4>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="list-group pe-2 mb-3" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
        <a class="list-group-item list-group-item-action" id="list-article-list" data-bs-toggle="list" href="#list-article" role="tab" aria-controls="list-article">Article</a>
        <a class="list-group-item list-group-item-action" id="list-users-list" data-bs-toggle="list" href="#list-users" role="tab" aria-controls="list-users">Users</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="tab-content" style="background-color: whitesmoke;" id="nav-tabContent">
        <!-- tabs profile -->
        <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
          <!-- info error -->
          <?php if (isset($edit['error']) && !$edit['error']) : ?>
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
              <strong><?= $edit['massage']; ?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php elseif (isset($edit['error']) && $edit['error']) : ?>
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
              <strong><?= $edit['massage']; ?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
          <div class="tab-pane fade show active p-5" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div id="viewProfile">
              <div class="d-flex justify-content-between">
                <div>
                  <p>Username : <?= $profile[0]['username']; ?></p>
                  <p>Email Address : <?= $profile[0]['email']; ?></p>
                  <p>Name : <?= $profile[0]['first_name'] . ' ' . $profile[0]['last_name']; ?></p>
                  <p>Gender : <?= $profile[0]['gender']; ?></p>
                  <p>birthdate : <?= $profile[0]['birthdate']; ?></p>
                </div>
                <img src="<?= base_url('_asset/img/profile/') . $profile[0]['img']; ?>" class="rounded-circle border border-success" style="object-fit: cover;" width="200" height="200" alt="profile">
              </div>
              <button id="editButton" type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Edit
              </button>
            </div>
            <!-- edit menu -->
            <form method="post" id="editProfile" class="d-none" enctype="multipart/form-data">
              <div class="d-flex justify-content-between" style="overflow-y: auto;">
                <div>
                  <input name="id" type="text" value="<?= $profile[0]['id']; ?>" hidden>
                  <div class="form-floating mb-3">
                    <input name="username" type="text" class="form-control" id="floatingInput" value="<?= $profile[0]['username']; ?>" placeholder="Username" autocomplete="off" required>
                    <label for="floatingInput">Username</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" value="<?= $profile[0]['email']; ?>" placeholder=" name@example.com" autocomplete="off" required>
                    <label for="floatingInput">Email Address</label>
                  </div>
                  <div class="row mb-3">
                    <div class="col form-floating">
                      <input name="first_name" type="text" class="form-control" id="firstName" value="<?= $profile[0]['first_name']; ?>" placeholder="First name" autocomplete="off" required autofocus>
                      <label style="margin-left: 12px;" for="firstName">First Name</label>
                    </div>
                    <div class="col form-floating">
                      <input name="last_name" type="text" class="form-control" id="lastName" value="<?= $profile[0]['last_name']; ?>" placeholder="Last name" autocomplete="off" required>
                      <label style="margin-left: 12px;" for="lastName">Last Name</label>
                    </div>
                  </div>
                  <select name="gender" class="form-select mb-3" aria-label="Default select example" required>
                    <option value="<?= $profile[0]['gender']; ?>" selected><?= $profile[0]['gender']; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <div class="form-floating mb-3">
                    <input name="birthdate" type="date" class="form-control" id="floatingInput" value="<?= $profile[0]['birthdate']; ?>" placeholder="Username" required>
                    <label for="floatingInput">Date of birth</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Confirmation Password</label>
                  </div>
                </div>
                <input name="former-img" class="img-lama" type="hidden" value="<?= $profile[0]['img']; ?>">
                <label for="photo-edit">
                  <img src="<?= base_url('_asset/img/profile/') . $profile[0]['img']; ?>" class="rounded-circle border border-success img-preview" style="object-fit: cover;" width="200" height="200" alt="profile">
                </label>
                <input name="new-img" class="d-none img" id="photo-edit" type="file" onchange="previewImage()">
              </div>
              <div class="d-flex" style="width: 58%;">
                <button name="updateAccount" type="submit" class="btn btn-success m-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                  Apply
                </button>
                <div class="d-flex w-100 justify-content-between">

                  <button name="cancelButton" id="cancelProfileButton" type="button" class="btn btn-danger m-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Cancel
                  </button>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#changePassword" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Change Password
                  </button>
                </div>
              </div>
            </form>
            <!-- change password -->
            <form action="" method="post">
              <!-- Modal -->
              <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input name="id" type="hidden" value="<?= $profile[0]['id']; ?>">
                      <div class="form-floating mb-3">
                        <input name="password1" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Current password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="password2" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">New Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="password3" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Re-Type new password</label>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button name="changePassword" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Article -->
        <div class="tab-pane fade pb-1" id="list-article" role="tabpanel" aria-labelledby="list-profile-list">
          <form class="d-flex mb-2 pt-2" role="search" method="post">
            <select name="keyword" class="form-select ms-2 me-2 keywordArticle" aria-label="Default select example" style="width: 100px;">
              <option value="" selected>All</option>
              <option value="1">Private</option>
              <option value="2">Unlisted</option>
              <option value="3">Public</option>
            </select>
            <input name="keyword2" class="form-control me-2 keywordArticle2" type="text" placeholder="Search" autocomplete="off">
            <input name="keyword3" value="<?= $profile[0]['first_name']; ?>" class="form-control me-2 keywordArticle3" type="text" placeholder="Editor Name" autocomplete="off">
          </form>
          <div class="articleContainer">
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
          </div>
        </div>

        <!-- Users -->
        <div class="tab-pane fade" id="list-users" role="tabpanel" aria-labelledby="list-messages-list">
          <div class="p-2">
            <form class="d-flex mb-3" role="search" method="post">
              <input name="keyword" class="form-control me-2 keywordUsers" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
              <select name="keyword2" class="form-select keywordUsers2" aria-label="Default select example">
                <option value="" selected>All</option>
                <option value="1">Admin</option>
                <option value="2">Author</option>
                <option value="3">User</option>
              </select>
            </form>
            <div class="usersContainer">
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
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>Name: </td>
                              <td><?= $u['first_name'] . ' ' . $u['last_name']; ?></td>
                            </tr>
                            <tr>
                              <td>Birthdate: </td>
                              <td><?= $u['birthdate']; ?></td>
                            </tr>
                            <tr>
                              <td>Gender: </td>
                              <td><?= $u['gender']; ?></td>
                            </tr>
                            <tr>
                              <td>Email: </td>
                              <td><?= $u['email']; ?></td>
                            </tr>
                          </tbody>
                        </table>

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
            </div>
          </div>
        </div>

        <!-- tab setting -->
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list" style="overflow: hidden;">
          <!-- new category -->
          <form action="" class="text-center p-4 category-form" id="category-form" method="post">
            <select class="form-select mb-3 mt-4">
              <option>LIST CATEGORY</option>
              <?php foreach ($category as $c) : ?>
                <option><?= $c['category_name']; ?></option>
              <?php endforeach ?>
            </select>
            <div class="form-floating mb-3">
              <input name="nameCategory" type="text" class="form-control" id="floatingInput" placeholder="CATEGORY NAME" autocomplete="off" required>
              <label for="floatingInput">CATEGORY INPUT</label>
            </div>
            <button name="inputCategory" type="submit" class="btn badge rounded-pill text-bg-primary">INPUT CATEGORY</button>
          </form>

          <div class="text-center m-2">
            <button type="button" class="btn badge rounded-pill text-bg-warning" id="switchCategoryKeyword">CATEGORY <=> KEYWORD</button>
          </div>

          <!-- new keyword -->
          <form action="" class="text-center p-4 keyword-form hidden-form" id="keyword-form" method="post">
            <select name="category" class="form-select mb-3 mt-4">
              <option>SELECT CATEGORY</option>
              <?php foreach ($category as $c) : ?>
                <option value="<?= $c['id_category']; ?>"><?= $c['category_name']; ?></option>
              <?php endforeach ?>
            </select>
            <div class="form-floating mb-3">
              <input name="nameKeyword" type="text" class="form-control" id="floatingInput" placeholder="CATEGORY NAME" autocomplete="off" required>
              <label for="floatingInput">KEYWORD INPUT</label>
            </div>
            <button name="inputKeyword" type="submit" class="btn badge rounded-pill text-bg-primary">INPUT KEYWORD</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Java Script -->
<script src="<?= base_url('_asset/js/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('_asset/js/custom/searchBar/adminPage.js'); ?>"></script>
<script src="<?= base_url('_asset/js/custom/previewImg/dashboardPage.js'); ?>"></script>
<script>
  document.getElementById('editButton').onclick = function() {
    document.getElementById('viewProfile').classList.add("d-none");
    document.getElementById('editProfile').classList.remove("d-none");
    document.getElementById('list-article-list').classList.add("d-none");
    document.getElementById('list-users-list').classList.add("d-none");
    document.getElementById('list-settings-list').classList.add("d-none");
  };
  document.getElementById('cancelProfileButton').onclick = function() {
    if (confirm("Are you sure?")) {
      document.getElementById('viewProfile').classList.remove("d-none");
      document.getElementById('editProfile').classList.add("d-none");
      document.querySelector('form').reset();
      location.reload();
    }
  }

  // category keyword
  document.getElementById('switchCategoryKeyword').onclick = function() {
    document.getElementById('category-form').classList.toggle('hidden-form');
    document.getElementById('keyword-form').classList.toggle('hidden-form');
  }
</script>
</body>

</html>