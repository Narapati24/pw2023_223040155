<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pati News Right</title>
    <!-- reset css -->
    <link rel="stylesheet" href="../../css/reset.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-primary navbar-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="../../img/sample/sample.png" alt="Logo" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Popular</a>
            </li>
        </ul>
        <a class="d-flex ms-auto btn btn-danger" href="login.php">
            <img src="../../img/logo/loginLogo.png" 
                style="-webkit-transform: scaleX(-1);
                transform: scaleX(-1); 
                filter: brightness(0) invert(1);" 
                alt="" width="22" height="24"
            >
            Logout
        </a>
    </div>
    </div>
</nav>
<!-- content -->
<div class="container" style="height: 70px;"></div>
<h4 class="container">Hello Nama!</h4>
<div class="container">
    <div class="row">
        <div class="row col-sm-4 m-auto">
            <div class="list-group pe-2 mb-3" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-article" role="tab" aria-controls="list-profile">Article</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
            </div>
            <!-- Article Info -->
            <div class="collapse text-center border border-primary pt-2" id="articleInfo" role="tabpanel">
                <img src="../../img/sample/sample.png" class="rounded-circle" width="100" height="100" alt="profile">
                <p>Title : Tugas Besar Pemrograman Web</p>
                <p>Writter : Narapati Anandi</p>
                <p>Desc : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, necessitatibus tempore ex ullam, numquam quae dolores ratione iste nisi quas laudantium reiciendis. Velit unde, dolor ullam rerum deleniti sunt voluptate vero est similique? Incidunt dicta libero ipsam non nam illo!</p>
                <button type="button" class="btn btn-primary mb-2"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Edit
                </button>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="tab-content" id="nav-tabContent">
                <!-- Tab Profile -->
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <img src="../../img/sample/sample.png" class="rounded-circle" width="200" height="200" alt="profile">
                    <p>Username : lio_keysa24</p>
                    <p>Email Address : lioingrid2016@gmail.com</p>
                    <p>Name : Narapati Anandi</p>
                    <p>Gender : Male</p>
                    <p>Age : 19</p>
                    <button type="button" class="btn btn-primary"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        Edit
                    </button>
                </div>
                <!-- Article -->
                <div class="tab-pane fade" id="list-article" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="d-inline-block text-center col-sm-2">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#articleInfo" aria-expanded="false" aria-controls="collapseExample">
                            <img src="../../img/sample/sample.png" class="rounded-circle" width="100" height="100" alt="profile">
                        </button>
                        <p>Title</p>
                    </div>
                </div>
                <!-- Setting -->
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet.</div>
            </div>
        </div>
    </div>
</div>

<!-- Java Script -->
<script src="../../js/bootstrap/bootstrap.min.js"></script>
</body>
</html>