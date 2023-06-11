<?php
require '../_asset/views/partial/_header.php';
?>

<style>
  .ck-editor__editable {
    height: 30vh;
  }
</style>

<!-- content -->
<div class="container ww">
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
      <img src="<?= base_url('_asset/img/article/'); ?>" alt="" style="max-height: 300px;" class="d-block m-auto img-preview">
    </div>
    <div class="form-floating mb-3">
      <input name="shortContentArticle" type="text" class="form-control" id="floatingInput" placeholder="Short Description" required maxlength="490" autocomplete="off">
      <label for="floatingInput">Short Description</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="contentArticle" type="textarea" class="form-control text-editor" id="floatingInput" placeholder="Description" cols="80" rows="100"></textarea>
    </div>
    <div class="form-floating mb-3">
      <input name="category" type="text" class="form-control" id="floatingInput" placeholder="Category" required maxlength="20" autocomplete="off">
      <label for="floatingInput">Category</label>
    </div>
    <select name="visibility" class="form-select mb-3" aria-label="Default select example" required>
      <?php foreach ($visibility as $v) { ?>
        <option value="<?= $v['id']; ?>"><?= $v['visibility']; ?></option>
      <?php }; ?>
    </select>
    <button name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</div>

<!-- Java Script -->
<!-- img Preview -->
<script src="<?= base_url('_asset/js/custom/previewImg/newArticlePage.js'); ?>"></script>
<!-- ckEditor -->
<script src="<?= base_url('_asset/js/CKEDITOR/ckeditor.js'); ?>"></script>
<script>
  ClassicEditor
    .create(document.querySelector('.text-editor'), {
      ckfinder: {
        uploadUrl: '<?= base_url('_backend/fileupload.php'); ?>'
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
<?php require_once '../_asset/views/partial/_footer.php'; ?>