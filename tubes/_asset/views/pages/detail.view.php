<?php
require '../_asset/views/partial/_header.php';
?>

<style>
  .editor {
    line-height: 6px;
  }

  .image {
    margin: auto;
    text-align: center;
  }

  .image img {
    width: 100%;
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

  <div class="image">
    <img class="rounded" src="<?= base_url('_asset/img/article/') . $article['img']; ?>" alt="<?= $article['title']; ?>" width="730">
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
            <img class="d-inline-block mt-1 rounded-circle" style="object-fit: cover;" src="<?= base_url('_asset/img/profile/') . $c['img']; ?>" alt="" height="30" width="30">
            <!-- check id comment -->
            <?php if (isset($_SESSION['ids']) && $c['id'] == $_SESSION['ids']) : ?>
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
  <hr>
  <div>
    <h5>POPULAR ABOUT <?= strtoupper($categoryArticle[0]['category_name']); ?></h5>
    <div class="row">
      <?php foreach ($categoryArticle as $cA) { ?>
        <div class="col m-2 text-center rounded" style="background-color: #e6e1e1;">
          <img class="m-2" src="<?= base_url('_asset/img/article/') . $cA['img']; ?>" alt="" width="120" height="120" style="object-fit: cover;">
          <h6><?= substr($cA['title'], 0, 70); ?></h6>
        </div>
      <?php }; ?>
    </div>
  </div>
</div>

<?php if (isset($_SESSION['ids']) && $_SESSION['ids'] === $editor['user_id']) { ?>
  <a href="editArticle.php?id=<?= $id; ?>" class="p-2 rounded-circle" style="position: fixed; right: 5px; bottom: 65px ;background-color: white; border: #40798C 5px solid;">
    <img src="<?= base_url('_asset/img/logo/editLogo.png'); ?>" alt="" width="30" height="30">
  </a>
<?php }; ?>
<a href="<?= base_url('_backend/cetak.php?id=') . $id; ?>" class="p-2 rounded-circle" style="position: fixed; right: 5px; bottom: 5px ;background-color: white; border: #40798C 5px solid;" target="_blank">
  <img src="<?= base_url('_asset/img/logo/downloadLogo.png'); ?>" alt="" width="30" height="30">
</a>

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
<?php require_once '../_asset/views/partial/_footer.php'; ?>