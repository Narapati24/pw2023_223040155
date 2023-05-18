<?php
require '../_backend/function.php';
require '../_backend/updateClicks.php';

// return pages if no id
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

// comment
if (isset($_POST['submit'])) {
  if (comment($_POST) > 0) {
    echo "Change Success";
  } else {
    echo "Failed to Change";
  }
}

$id = $_GET['id'];
clicks("UPDATE popularity SET daily = daily + 1, monthly = monthly + 1, lifetime = lifetime + 1, update_data = now() WHERE article_id = $id");
$article = query("SELECT * FROM article WHERE id = $id")[0];

// commentar
$comment = query("SELECT * FROM commentar, users WHERE users.id = commentar.user_id && commentar.article_id = $id ORDER BY id_comment DESC");

// header
$title = $article['title'];
require_once '../_header.php';
?>

<style>
  .images {
    margin: auto;
    text-align: center;
  }

  .image {
    margin: auto;
    text-align: center;
  }

  .image img {
    height: 400px;
  }

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
<div class="container w-50 rounded article" style="background-color: white; border: 5px solid whitesmoke;">
  <h1>
    <?= $article['title']; ?>
  </h1>
  <div class="images">
    <img src="../img/article/<?= $article['img']; ?>" alt="<?= $article['title']; ?>" width="730">
  </div>
  <p><?= html_entity_decode($article['content'], ENT_QUOTES); ?></p>
</div>
<!-- comment -->
<div class="container" id="comment">
  <h4 style="text-align: center;">Comment</h4>
  <div style="max-height: 400px; overflow-y: scroll;">
    <?php foreach ($comment as $c) { ?>
      <section class="container user-comment" style="border-radius: 10px;">
        <img class="d-inline-block mt-1" src="../img/profile/<?= $c['img']; ?>" alt="" height="30" width="30">
        <p class="user-name d-inline-block"><strong><?= $c['username']; ?></strong></p>
        <p class="user-commentar" style="margin-top: -15px;"><?= $c['description']; ?></p>
        <p class="user-time text-end" style="margin-top: -15px;"><?= $c['insert_date']; ?></p>
      </section>
    <?php }; ?>
  </div>
  <?php if (isset($_SESSION['login'])) { ?>
    <form action="" method="post" style="position: absolute; bottom: 0; text-align: center;">
      <input name="idUser" type="hidden" value="<?= $_SESSION['ids']; ?>">
      <input name="idArticle" type="hidden" value="<?= $id; ?>">
      <textarea name="description" type="text" placeholder="comment here" style="width: 260px; border-radius: 10px; resize: none; margin-bottom: -20px;"></textarea>
      <button name="submit" type="submit" style="border-radius: 50%; background-color: lightskyblue; margin-bottom: 14px;"><img src="../img/logo/sentLogo.png" width="30" height="30" alt="sent Logo"></button>
    </form>
  <?php } else {; ?>
    <p style="text-align: center; margin-top: 30px;">Login For Comment</p>
  <?php }; ?>
</div>

<!-- footer -->
<?php require_once '../_footer.php'; ?>