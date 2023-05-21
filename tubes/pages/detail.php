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
  $commentInput = comment($_POST);
}

$id = $_GET['id'];
clicks("UPDATE popularity SET daily = daily + 1, monthly = monthly + 1, lifetime = lifetime + 1, update_data = now() WHERE article_id = $id");
$article = query("SELECT * FROM article WHERE id = $id")[0];
$editor = query("SELECT * FROM users INNER JOIN article WHERE article.user_id = users.id && article.id = $id")[0];

// commentar
$comment = query("SELECT * FROM commentar, users WHERE users.id = commentar.user_id && commentar.article_id = $id ORDER BY id_comment DESC");

// header
$title = $article['title'];
require_once '../_header.php';
?>

<style>
  .editor {
    line-height: 6px;
  }

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
    background-color: #e6e1e1;
    min-height: 540px;
    border-radius: 10px;
    margin-bottom: 10px;
  }

  .user-comment {
    margin-top: 10px;
    word-wrap: break-word;
    background-color: white;
  }
</style>
<!-- content -->
<div class="container w-50 rounded article" style="background-color: white; border: 5px solid whitesmoke;">
  <h4 class="fw-bolder mt-2">
    <?= strtoupper($article['title']); ?>
  </h4>
  <hr>
  <div class="editor">
    <p><strong>Editor:</strong> @<?= $editor['username']; ?></p>
    <p><?= $article['insert_date']; ?></p>
  </div>

  <div class="images">
    <img class="rounded" src="../img/article/<?= $article['img']; ?>" alt="<?= $article['title']; ?>" width="730">
  </div>

  <p><?= html_entity_decode($article['content'], ENT_QUOTES); ?></p>
  <hr>
  <!-- rating -->
  <div class="rating text-center">
    <h5>Rate</h5>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
      <input class="d-none ratingInput" type="radio" id="star<?= $i; ?>" name="rating" value="<?= $i; ?>">
      <label class="bi bi-star stars-rating" for="star<?= $i; ?>"></label>
    <?php }; ?>
  </div>
  <!-- comment -->
  <div class="container border" id="comment">
    <!-- alert -->
    <?php if (isset($commentInput['error']) && !$commentInput['error']) : ?>
      <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong><?= $commentInput['massage']; ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php elseif (isset($commentInput['error']) && $commentInput['error']) : ?>
      <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        <strong><?= $commentInput['massage']; ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <!-- comment fill -->
    <div style="height: 400px; overflow-y: auto;">
      <?php if (!$comment) : ?>
        <h5 style="text-align: center; margin-top: 200px;">NO COMMENT, BE THE FIRST</h5>
      <?php else : ?>
        <?php foreach ($comment as $c) { ?>
          <section class="container user-comment" style="border-radius: 10px;">
            <img class="d-inline-block mt-1 rounded-circle" style="object-fit: cover;" src="../img/profile/<?= $c['img']; ?>" alt="" height="30" width="30">
            <!-- check id comment -->
            <?php if ($c['id'] == $_SESSION['ids']) : ?>
              <p class="user-name d-inline-block rounded ps-1 pe-1" style="background-color: #40798C; color: white;"><strong><?= $c['username']; ?></strong></p>
            <?php else : ?>
              <p class="user-name d-inline-block"><strong><?= $c['username']; ?></strong></p>
            <?php endif ?>
            <p class="user-commentar" style="margin-top: -12px;"><?= $c['description']; ?></p>
            <p class="user-time text-end"><?= $c['insert_date']; ?></p>
          </section>
        <?php }; ?>
      <?php endif; ?>
    </div>
    <hr>
    <?php if (isset($_SESSION['login'])) { ?>
      <form class="d-inline" action="" method="post">
        <input name=" idUser" type="hidden" value="<?= $_SESSION['ids']; ?>">
        <input name="idArticle" type="hidden" value="<?= $id; ?>">
        <div class="form-floating">
          <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px; resize: none;" maxlength="100" required></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
          <button name="submit" class="btn btn-primary me-md-2 mt-md-2" type="submit">Submit</button>
        </div>
      </form>
    <?php } else {; ?>
      <p style="text-align: center; margin-top: 30px;">Login For Comment</p>
    <?php }; ?>
  </div>
</div>

<script>
  var checkboxes = document.querySelectorAll(".ratingInput");
  var ratingLabels = document.querySelectorAll(".stars-rating");
  var previousRating = 0;

  checkboxes.forEach(function(checkbox, index) {
    checkbox.addEventListener('change', function() {
      var currentRating = index + 1;

      for (var i = 0; i < ratingLabels.length; i++) {
        if (currentRating <= i) {
          ratingLabels[i].classList.remove("bi-star-fill");
          ratingLabels[i].classList.add("bi-star");
        } else {
          ratingLabels[i].classList.remove("bi-star");
          ratingLabels[i].classList.add("bi-star-fill");
        }
      }
      previousRating = currentRating;
      console.log(previousRating);
    });
  });
</script>

<!-- footer -->
<?php require_once '../_footer.php'; ?>