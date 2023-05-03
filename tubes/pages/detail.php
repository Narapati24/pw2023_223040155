<?php
require '../_backend/function.php';
require '../_backend/updateClicks.php';

// return pages if no id
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

$id = $_GET['id'];
clicks("UPDATE popularity SET daily = daily + 1, monthly = monthly + 1, lifetime = lifetime + 1, update_data = now() WHERE article_id = $id");
$article = query("SELECT * FROM article WHERE id = $id")[0];

// header
$title = $article['title'];
require_once '../_header.php';
?>

<style>
  #comment {
    position: fixed;
    background-color: #e6e1e1;
    width: 330px;
    height: 500px;
    top: 90px;
    right: 0;
    border-radius: 10px;
  }

  .user-comment {
    background-color: white;
  }
</style>
<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container w-50 rounded" style="background-color: white; border: 5px solid whitesmoke;">
  <h1>
    <?= $article['title']; ?>
  </h1>
  <img src="../img/article/<?= $article['img']; ?>" alt="<?= $article['title']; ?>" width="730">
  <p><?= $article['content']; ?></p>
</div>
<div class="container" id="comment">
  <h4 style="text-align: center;">Comment</h4>
  <div style="max-height: 400px; overflow-y: scroll;">
    <section class="container user-comment" style="border-radius: 10px;">
      <img class="d-inline-block mt-1" src="../img/profile/no-profile.png" alt="" height="30" width="30">
      <p class="user-name d-inline-block"><strong>lio_keysa24</strong></p>
      <p class="user-commentar" style="margin-top: -15px;">article ini sangat membantu</p>
      <p class="user-time text-end" style="margin-top: -15px;">2023-5-2 14.00</p>
    </section>
    <section class="container user-comment" style="border-radius: 10px;">
      <img class="d-inline-block mt-1" src="../img/profile/no-profile.png" alt="" height="30" width="30">
      <p class="user-name d-inline-block"><strong>lio_keysa24</strong></p>
      <p class="user-commentar" style="margin-top: -15px;">article ini sangat membantu</p>
      <p class="user-time text-end" style="margin-top: -15px;">2023-5-2 14.00</p>
    </section>
    <section class="container user-comment" style="border-radius: 10px;">
      <img class="d-inline-block mt-1" src="../img/profile/no-profile.png" alt="" height="30" width="30">
      <p class="user-name d-inline-block"><strong>lio_keysa24</strong></p>
      <p class="user-commentar" style="margin-top: -15px;">article ini sangat membantu</p>
      <p class="user-time text-end" style="margin-top: -15px;">2023-5-2 14.00</p>
    </section>
    <section class="container user-comment" style="border-radius: 10px;">
      <img class="d-inline-block mt-1" src="../img/profile/no-profile.png" alt="" height="30" width="30">
      <p class="user-name d-inline-block"><strong>lio_keysa24</strong></p>
      <p class="user-commentar" style="margin-top: -15px;">article ini sangat membantu</p>
      <p class="user-time text-end" style="margin-top: -15px;">2023-5-2 14.00</p>
    </section>
    <section class="container user-comment" style="border-radius: 10px;">
      <img class="d-inline-block mt-1" src="../img/profile/no-profile.png" alt="" height="30" width="30">
      <p class="user-name d-inline-block"><strong>lio_keysa24</strong></p>
      <p class="user-commentar" style="margin-top: -15px;">article ini sangat membantu</p>
      <p class="user-time text-end" style="margin-top: -15px;">2023-5-2 14.00</p>
    </section>
  </div>
  <?php if (isset($_SESSION['login'])) { ?>
    <form action="" method="post" style="position: absolute; bottom: 0; text-align: center;">
      <input name="idUser" type="hidden" value="<?= $_SESSION['ids']; ?>">
      <input name="idArticle" type="hidden" value="<?= $id; ?>">
      <textarea type="text" placeholder="comment here" style="width: 260px; border-radius: 10px; resize: none; margin-bottom: -20px;"></textarea>
      <button style="border-radius: 50%; background-color: lightskyblue; margin-bottom: 14px;"><img src="../img/logo/sentLogo.png" width="30" height="30" alt="sent Logo"></button>
    </form>
  <?php } else {; ?>
    <p style="text-align: center; margin-top: 30px;">Login For Comment</p>
  <?php }; ?>
</div>

<!-- footer -->
<?php require_once '../_footer.php'; ?>