<?php
require '../_asset/views/partial/_header.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= base_url('_asset/js/custom/screenshot/html2canvas.js'); ?>"></script>
<script src="<?= base_url('_asset/js/custom/screenshot/detailArticle.js'); ?>"></script>
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
<div class="container ww rounded article" style="background-color: white; border: 5px solid whitesmoke;" id="screenshot-container">
  <!-- info error -->
  <?php if (isset($error['error']) && !$error['error']) : ?>
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      <strong><?= $error['massage']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php elseif (isset($error['error']) && $error['error']) : ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
      <strong><?= $error['massage']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
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
            <?php if (isset($_SESSION['ids']) && $c['id'] == $_SESSION['ids'] && $c['id'] == $editor['user_id']) : ?>
              <p class="user-name d-inline-block rounded ps-1 pe-1" style="background-color: #40798C; color: white;"><strong><?= $c['username']; ?></strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                </svg>
              </p>
            <?php elseif (isset($_SESSION['ids']) && $c['id'] == $_SESSION['ids']) : ?>
              <p class="user-name d-inline-block rounded ps-1 pe-1" style="background-color: #e6e1e1;"><strong><?= $c['username']; ?></strong></p>
            <?php elseif ($c['id'] == $editor['user_id']) : ?>
              <p class="user-name d-inline-block rounded ps-1 pe-1" style="background-color: #40798C; color: white;"><strong><?= $c['username']; ?> </strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                </svg></p>
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

<?php if (isset($_SESSION['login'])) {
  if (isset($_SESSION['ids']) && $_SESSION['ids'] === $editor['user_id']) : ?>
    <a href="<?= base_url('pages/editArticle.php?id=') . $id; ?>" class="p-2 rounded-circle" style="position: fixed; right: 5px; bottom: 65px ;background-color: white; border: #40798C 5px solid;">
      <img src="<?= base_url('_asset/img/logo/editLogo.png'); ?>" alt="" width="30" height="30">
    </a>
  <?php else : ?>
    <button class="p-2 rounded-circle" style="position: fixed; right: 5px; bottom: 65px ;background-color: white; border: #40798C 5px solid;" id="capture-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
        <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" />
      </svg>
    </button>
  <?php endif; ?>
  <a href="<?= base_url('_backend/cetak.php?id=') . $id; ?>" class="p-2 rounded-circle" style="position: fixed; right: 5px; bottom: 5px ;background-color: white; border: #40798C 5px solid;" target="_blank">
    <img src="<?= base_url('_asset/img/logo/downloadLogo.png'); ?>" alt="" width="30" height="30">
  </a>


  <!-- modal report -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Reporting</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input name="idArticle" type="hidden" value="<?= $article['id']; ?>">
          <div class="" id="livePreview"></div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <input name="idUser" type="hidden" value="<?= $_SESSION['ids']; ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button name="report" type="submit" class="btn btn-danger">REPORT</button>
        </div>
      </form>
    </div>
  </div>
<?php }; ?>
<!-- script -->
<script>
  $(document).ready(function() {
    const capture = document.getElementById("capture-btn");
    capture.addEventListener("click", function() {
      console.log("success");
      $("#exampleModal").modal("show");
    });
  });
</script>

<!-- footer -->
<?php require_once '../_asset/views/partial/_footer.php'; ?>