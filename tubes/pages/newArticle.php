<?php
require '../_backend/function.php';

if (isset($_POST['submit'])) {
  if (inputArticle($_POST) > 0) {
    echo "succest";
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
      <input name="img" type="file" class="form-control" id="floatingInput" placeholder="img" required>
      <label for="floatingInput">img</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="contentArticle" type="textarea" class="form-control text-editor" id="floatingInput" placeholder="Description"></textarea>
    </div>
    <button name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</div>

<div style="height: 223px;"></div>

<!-- Java Script -->
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