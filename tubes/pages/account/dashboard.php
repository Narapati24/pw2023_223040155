<?php
require '../../_backend/function.php';
require '../../_backend/searchBar.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['roles'])) {
    header("Location: login.php");
}

if ($_SESSION['roles'] === 'Author' || $_SESSION['roles'] === 'User') {
    header("Location: profile.php");
}

if (isset($_POST['updateAccount'])) {
    if (updateAccount($_POST) > 0) {
        echo "Change Success";
    } else {
        echo "Failed to Change";
    }
}

$id = $_SESSION['ids'];

$profile = query("SELECT * FROM users WHERE id = $id");
$query = query("SELECT * FROM users, article WHERE users.id = '$id' && article.user_id = '$id' ORDER BY article.id DESC");
$users = query("SELECT * FROM users, roles WHERE users.id_role = roles.id");

$title = 'Profile';
require_once '_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<h4 class="container">Hello Admin <?= $query[0]['first_name']; ?>!</h4>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="list-group pe-2 mb-3" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-article" role="tab" aria-controls="list-article">Article</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-users" role="tab" aria-controls="list-users">Users</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
            </div>
            <!-- User Info -->
            <?php foreach ($users as $u) { ?>
                <div class="collapse text-center border border-primary pt-2" id="profileUser-<?= $u['username']; ?>" role="tabpanel">
                    <img src="../../img/profile/<?= $u['img']; ?>" class="rounded-circle" width="100" height="100" alt="profile">
                    <p>Username : <?= $u['username']; ?></p>
                    <p>Email Address : <?= $u['email']; ?></p>
                    <p>Name : <?= $u['first_name'] . ' ' . $u['last_name']; ?></p>
                    <p>Gender : <?= $u['gender']; ?></p>
                    <p>Birthdate : <?= $u['birthdate']; ?></p>
                </div>
            <?php }; ?>
        </div>
        <div class="col-sm-8">
            <div class="tab-content" style="background-color: whitesmoke;" id="nav-tabContent">
                <!-- tabs profile -->
                <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="tab-pane fade show active p-5" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div id="viewProfile">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p>Username : <?= $query[0]['username']; ?></p>
                                    <p>Email Address : <?= $query[0]['email']; ?></p>
                                    <p>Name : <?= $query[0]['first_name'] . ' ' . $query[0]['last_name']; ?></p>
                                    <p>Gender : <?= $query[0]['gender']; ?></p>
                                    <p>birthdate : <?= $query[0]['birthdate']; ?></p>
                                </div>
                                <img src="../../img/profile/<?= $profile[0]['img']; ?>" class="rounded-circle border border-success" style="object-fit: cover;" width="200" height="200" alt="profile">
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
                                        <input name="username" type="text" class="form-control" id="floatingInput" value="<?= $query[0]['username']; ?>" placeholder="Username" autocomplete="off" required>
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="email" type="email" class="form-control" id="floatingInput" value="<?= $query[0]['email']; ?>" placeholder=" name@example.com" autocomplete="off" required>
                                        <label for="floatingInput">Email Address</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col form-floating">
                                            <input name="first_name" type="text" class="form-control" id="firstName" value="<?= $query[0]['first_name']; ?>" placeholder="First name" autocomplete="off" required autofocus>
                                            <label style="margin-left: 12px;" for="firstName">First Name</label>
                                        </div>
                                        <div class="col form-floating">
                                            <input name="last_name" type="text" class="form-control" id="lastName" value="<?= $query[0]['last_name']; ?>" placeholder="Last name" autocomplete="off" required>
                                            <label style="margin-left: 12px;" for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                    <select name="gender" class="form-select mb-3" aria-label="Default select example" required>
                                        <option value="<?= $query[0]['gender']; ?>" selected><?= $query[0]['gender']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="form-floating mb-3">
                                        <input name="birthdate" type="date" class="form-control" id="floatingInput" value="<?= $query[0]['birthdate']; ?>" placeholder="Username" required>
                                        <label for="floatingInput">Date of birth</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                        <label for="floatingPassword">Confirmation Password</label>
                                    </div>
                                </div>
                                <input name="former-img" class="img-lama" type="hidden" value="<?= $profile[0]['img']; ?>">
                                <label for="photo-edit">
                                    <img src="../../img/profile/<?= $profile[0]['img']; ?>" class="rounded-circle border border-success img-preview" style="object-fit: cover;" width="200" height="200" alt="profile">
                                    <!-- <img id="editLogo" src="../../img/logo/editLogo.png" class="rounded-circle border border-success" width="50" height="50" alt="profile"> -->
                                </label>
                                <input name="new-img" class="d-none img" id="photo-edit" type="file" onchange="previewImage()">
                            </div>
                            <button name="updateAccount" type="submit" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Apply
                            </button>
                            <button name="cancelButton" id="cancelProfileButton" type="button" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Cancel
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Article -->
                <div class="tab-pane fade" id="list-article" role="tabpanel" aria-labelledby="list-profile-list">
                    <form class="d-flex mb-2 pt-2" role="search" method="post">
                        <select name="keyword" class="form-select ms-2 me-2 keywordArticle" aria-label="Default select example" style="width: 100px;">
                            <option value="" selected>All</option>
                            <option value="1">Private</option>
                            <option value="2">Unlisted</option>
                            <option value="3">Public</option>
                        </select>
                        <input name="keyword2" class="form-control me-2 keywordArticle2" type="text" placeholder="Search" autocomplete="off">
                        <input name="keyword3" value="<?= $query[0]['first_name']; ?>" class="form-control me-2 keywordArticle3" type="text" placeholder="Editor Name" autocomplete="off">
                    </form>
                    <div class="articleContainer">
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
                                    <button class="btn" type="button" data-bs-toggle="collapse" href="#profileUser-<?= $u['username']; ?>" role="tablist" aria-expanded="false" aria-controls="collapseExample">
                                        <img src="../../img/profile/<?= $u['img']; ?>" class="rounded-circle border border-success" width="100" height="100" alt="profile">
                                    </button>
                                    <p><?= $u['username']; ?></p>
                                    <p style="font-size: 12px; margin-top: -10px;"><?= $u['role_name']; ?></p>
                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet.</div>
            </div>
        </div>
    </div>
</div>

<!-- Java Script -->
<script src="../../js/bootstrap/bootstrap.min.js"></script>
<script src="../../js/custom/searchBar/adminPage.js"></script>
<script src="../../js/custom/previewImg/dashboardPage.js"></script>
<script>
    document.getElementById('editButton').onclick = function() {
        document.getElementById('viewProfile').classList.add("d-none");
        document.getElementById('editProfile').classList.remove("d-none");
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