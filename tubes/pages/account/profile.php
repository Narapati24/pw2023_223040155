<?php
require '../../_backend/function.php';
require '../../_backend/config.php';

if (isset($_POST['updateAccount'])) {
    $edit = updateAccount($_POST);
}

if (isset($_POST['changePassword'])) {
    $edit = changePassword($_POST);
}

$id = $_SESSION['ids'];
$profile = query("SELECT * FROM users WHERE id = $id");
$query = query("SELECT * FROM users,article WHERE users.id = '$id' && users.id = article.user_id ORDER BY article.id LIMIT 0, 6");

// pagination
// konfigurasi
$jumlahDataPerhalaman = 7;
$jumlahData = count(query("SELECT * FROM users, article WHERE users.id = '$id' && users.id = article.user_id"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$title = 'Profile';
require_once '_header.php';
?>

<!-- content -->
<h4 class="container">Hello <?= $profile[0]['first_name']; ?>!</h4>
<div class="container">
    <div class="row">
        <div class="row col-sm-4">
            <div class="list-group pe-2 mb-3" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-home">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-article" role="tab" aria-controls="list-profile">Article</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
            </div>
            <!-- Article Info -->
            <div class="collapse text-center border border-primary pt-2" id="articleInfo" role="tabpanel">
                <img src="<?= base_url('_asset/img/sample/sample.png'); ?>" class="rounded-circle" width="100" height="100" alt="profile">
                <p>Title : Tugas Besar Pemrograman Web</p>
                <p>Writter : Narapati Anandi</p>
                <p>Desc : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, necessitatibus tempore ex ullam, numquam quae dolores ratione iste nisi quas laudantium reiciendis. Velit unde, dolor ullam rerum deleniti sunt voluptate vero est similique? Incidunt dicta libero ipsam non nam illo!</p>
                <button type="button" class="btn btn-primary mb-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Edit
                </button>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="tab-content" id="nav-tabContent" style="background-color: whitesmoke;">
                <!-- Tab Profile -->
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
                            <div class="d-flex justify-content-between">
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
                <!-- Tab Article -->
                <div class="tab-pane fade" id="list-article" role="tabpanel" aria-labelledby="list-profile-list">
                    <form class="d-flex mb-2 pt-2" role="search" method="post">
                        <select name="keywordArticle" class="form-select ms-2 me-2 keywordArticle" aria-label="Default select example" style="width: 100px;">
                            <option value="" selected>All</option>
                            <option value="1">Private</option>
                            <option value="2">Unlisted</option>
                            <option value="3">Public</option>
                        </select>
                        <input name="keywordArticle2" class="form-control me-2 keywordArticle2" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
                    </form>
                    <div class="articleContainer">
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
                    </div>
                </div>
                <!-- Tab Setting -->
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet.</div>
            </div>
        </div>
    </div>
</div>

<!-- Java Script -->
<script src="<?= base_url('_asset/js/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('_asset/js/custom/searchBar/userPage.js'); ?>"></script>
<script src="<?= base_url('_asset/js/custom/previewImg/profilePage.js'); ?>"></script>
<script>
    document.getElementById('editButton').onclick = function() {
        document.getElementById('viewProfile').classList.add("d-none");
        document.getElementById('editProfile').classList.remove("d-none");
        document.getElementById('list-profile-list').classList.add("d-none");
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
</script>
</body>

</html>