<?php
require '../_backend/function.php';

if (isset($_POST['submit'])) {
  if (inputArticle($_POST) > 0) {
    echo "success";
  } else {
    echo "Failed to Register";
  }
}

// header
$title = 'New Article';
require_once '../_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
    <input name="idAuthor" type="hidden" value="<?= $_SESSION['ids']; ?>">
    <div class="form-floating mb-3">
      <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Title" required>
      <label for="floatingInput">Title</label>
    </div>
    <div class="form-floating mb-3">
      <input name="img" type="file" class="form-control img" id="floatingInput" placeholder="img" onchange="previewImage()" required>
      <label for="floatingInput">img</label>
      <img src="../img/" alt="" style="max-height: 300px;" class="d-block m-auto img-preview">
    </div>
    <div class="form-floating mb-3">
      <input name="shortContentArticle" type="text" class="form-control" id="floatingInput" placeholder="Short Description" required maxlength="500" autocomplete="off">
      <label for="floatingInput">Short Description</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="contentArticle" type="textarea" class="form-control text-editor" id="floatingInput" placeholder="Description"></textarea>
    </div>
    <select name="visibility" class="form-select mb-3" aria-label="Default select example" required>
      <option value="3" selected>Public</option>
      <option value="2">Unlisted</option>
      <option value="1">Private</option>
    </select>
    <button name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</div>

<div style="height: 223px;"></div>

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
      }
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