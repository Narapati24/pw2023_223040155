<?php
require '../_backend/function.php';

if (isset($_POST['submit'])) {
  if (inputArticle($_POST) > 0) {
    echo "succest";
  } else {
    echo "Failed to Register";
  }
}

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

<div style="height: 110px;"></div>

<!-- footer -->
<div class="container" style="height: 115px;"></div>
<footer>
  <div class="footer">
    <p>&copy; 2023 My Company. All Rights Reserved.</p>
  </div>
</footer>

<!-- Java Script -->
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/CKEditor/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('.text-editor'))
    .catch(error => {
      console.error(error);
    });
</script>
</body>

</html>