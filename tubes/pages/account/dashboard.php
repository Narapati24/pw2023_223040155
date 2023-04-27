<?php
session_start();
require '../../_backend/function.php';
require '../../_backend/searchBar.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['roles'])) {
    header("Location: login.php");
}

if ($_SESSION['roles'] === 'Author' || $_SESSION['roles'] === 'User') {
    header("Location: profile.php");
}

$id = $_SESSION['ids'];

// Search bar
if (isset($_POST['search'])) {
    $query = findAdminArticle($_POST['keyword']);
}

$query = query("SELECT * FROM users, article WHERE users.id = '$id' && article.user_id = '$id'");
$users = query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- reset css -->
    <link rel="stylesheet" href="../../css/reset.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../../css/custom/universal.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a href="../../index.php">
                <img src="../../img/logo/P-news-logo.png" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../popular.php">Popular</a>
                    </li>
                </ul>
                <a class="d-flex ms-auto btn btn-danger" href="logout.php">
                    <img src="../../img/logo/loginLogo.png" style="-webkit-transform: scaleX(-1);
                transform: scaleX(-1); 
                filter: brightness(0) invert(1);" alt="" width="22" height="24">
                    Logout
                </a>
            </div>
        </div>
    </nav>
    <!-- content -->
    <div class="container" style="height: 70px;"></div>
    <h4 class="container">Hello Admin <?= $query[0]['first_name']; ?>!</h4>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="list-group pe-2 mb-3" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Profile</a>
                    <a class="list-group-item list-group-item-action id=" list-profile-list" data-bs-toggle="list" href="#list-article" role="tab" aria-controls="list-profile">Article</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-users" role="tab" aria-controls="list-messages">Users</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                </div>
                <!-- User Info -->
                <div class="collapse text-center border border-primary pt-2" id="profileUser" role="tabpanel">
                    <img src="../../img/sample/sample.png" class="rounded-circle" width="100" height="100" alt="profile">
                    <p>Username : lio_keysa24</p>
                    <p>Email Address : lioingrid2016@gmail.com</p>
                    <p>Name : Narapati Anandi</p>
                    <p>Gender : Male</p>
                    <p>Age : 19</p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="tab-content" style="background-color: whitesmoke;" id="nav-tabContent">
                    <!-- tabs profile -->
                    <div class="tab-pane fade show active text-center" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <img src="../../img/sample/sample.png" class="rounded-circle" width="200" height="200" alt="profile">
                            <p>Username : <?= $query[0]['username']; ?></p>
                            <p>Email Address : <?= $query[0]['email']; ?></p>
                            <p>Name : <?= $query[0]['first_name'] . ' ' . $query[0]['last_name']; ?></p>
                            <p>Gender : <?= $query[0]['gender']; ?></p>
                            <p>birthdate : <?= $query[0]['birthdate']; ?></p>
                            <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Edit
                            </button>
                        </div>
                    </div>
                    <!-- Article -->
                    <div class="tab-pane fade" id="list-article" role="tabpanel" aria-labelledby="list-profile-list">
                        <form class="d-flex mb-3" role="search" method="post">
                            <input name="keywordArticle" class="form-control me-2 keyword" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
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
                                        <p><?= $a['insert_date']; ?></p>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                    <!-- Users -->
                    <div class="tab-pane fade" id="list-users" role="tabpanel" aria-labelledby="list-messages-list">
                        <?php foreach ($users as $u) { ?>
                            <div class="d-inline-block text-center col-sm-2">
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#profileUser" role="tab" aria-expanded="false" aria-controls="collapseExample">
                                    <img src="../../img/sample/sample.png" class="rounded-circle" width="100" height="100" alt="profile">
                                </button>
                                <p><?= $u['username']; ?></p>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Java Script -->
    <script src="../../js/bootstrap/bootstrap.min.js"></script>
    <script src="../../js/custom/searchBar/adminPage.js"></script>
</body>

</html>