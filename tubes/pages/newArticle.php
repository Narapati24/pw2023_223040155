<?php
require '../_backend/function.php';

if (isset($_POST['submit'])) {
  $article = inputArticle($_POST);
};

// header
$title = 'New Article';
require_once '../_header.php';
?>

<style>
  .ck-editor__editable {
    height: 30vh;
  }
</style>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container">
  <?php if (isset($article['error']) && !$article['error']) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><?= $article['massage']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php elseif (isset($article['error']) && $article['error']) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><?= $article['massage']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <form action="" method="post" enctype="multipart/form-data">
    <input name="idAuthor" type="hidden" value="<?= $_SESSION['ids']; ?>">
    <div class="form-floating mb-3">
      <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Title" required maxlength="490">
      <label for="floatingInput">Title</label>
    </div>
    <div class="form-floating mb-3">
      <input name="img" type="file" class="form-control img" id="floatingInput" placeholder="img" onchange="previewImage()" required>
      <label for="floatingInput">img</label>
      <img src="../img/" alt="" style="max-height: 300px;" class="d-block m-auto img-preview">
    </div>
    <div class="form-floating mb-3">
      <input name="shortContentArticle" type="text" class="form-control" id="floatingInput" placeholder="Short Description" required maxlength="490" autocomplete="off">
      <label for="floatingInput">Short Description</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="contentArticle" type="textarea" class="form-control text-editor" id="floatingInput" placeholder="Description" cols="80" rows="100"></textarea>
    </div>
    <select name="visibility" class="form-select mb-3" aria-label="Default select example" required>
      <option value="3" selected>Public</option>
      <option value="2">Unlisted</option>
      <option value="1">Private</option>
    </select>
    <button name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</div>

<!-- Java Script -->
<!-- img Preview -->
<script src="../js/custom/previewImg/newArticlePage.js"></script>
<!-- ckEditor -->
<script src="../js/CKEditor/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('.text-editor'), {
      ckfinder: {
        uploadUrl: '../_backend/fileupload.php'
      },
      mediaEmbed: {
        previewsInData: true
      },
    })
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });
</script>

<!-- footer -->
<?php require_once '../_footer.php'; ?>