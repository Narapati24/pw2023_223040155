<?php
require '../_backend/function.php';
require '../_backend/config.php';

if (isset($_POST['update'])) {
  $error = UpdateArticle($_POST);
}

if (isset($_POST['delete'])) {
  $error = deleteArticle($_POST);
  header('Location:' . base_url());
}

// header
$id = $_GET['id'];
$title = 'Edit Article';
$article = query("SELECT * FROM article, article_category, popularity WHERE article.id = article_category.article_id && article.id = popularity.article_id && article.id = '$id'");
if (!$article) {
  $article = query("SELECT * FROM article, popularity WHERE article.id = popularity.article_id && article.id = '$id'")[0];
} else {
  $article = $article[0];
}
$category = query("SELECT * FROM category");
$visibility = query("SELECT * FROM visibility");
require_once '../_header.php';
?>

<style>
  .ck-editor__editable {
    height: 30vh;
  }
</style>

<!-- content -->
<div class="container w-50">
  <?php if (isset($error['error']) && !$error['error']) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><?= $error['massage']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php elseif (isset($error['error']) && $error['error']) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><?= $error['massage']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <form action="" method="post" enctype="multipart/form-data">
    <input name="idAuthor" type="hidden" value="<?= $article['user_id']; ?>">
    <input name="id" type="hidden" value="<?= $article['id']; ?>">
    <div class="form-floating mb-3">
      <input name="title" value="<?= $article['title']; ?>" type="text" class="form-control" id="floatingInput" placeholder="Title" required maxlength="490">
      <label for="floatingInput">Title</label>
    </div>
    <input name="former-img" type="hidden" value="<?= $article['img']; ?>">
    <div class="form-floating mb-3">
      <input name="img" type="file" class="form-control img" id="floatingInput" placeholder="img" onchange="previewImage()">
      <label for="floatingInput">img</label>
      <img src="<?= base_url('_asset/img/article/') . $article['img']; ?>" alt="" style="max-height: 300px;" class="d-block m-auto img-preview">
    </div>
    <div class="form-floating mb-3">
      <input name="shortContentArticle" value="<?= $article['shortContent']; ?>" type="text" class="form-control" id="floatingInput" placeholder="Short Description" required maxlength="490" autocomplete="off">
      <label for="floatingInput">Short Description</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="contentArticle" type="textarea" class="form-control text-editor" id="floatingInput" placeholder="Description" cols="80" rows="100"><?= html_entity_decode($article['content'], ENT_QUOTES); ?></textarea>
    </div>
    <select name="category" class="form-select mb-3" aria-label="Default select example" required>
      <?php if (!$article['category_id']) { ?>
        <option>Category</option>
        <?php foreach ($category as $c) { ?>
          <option value="<?= $c['id_category']; ?>"><?= $c['category_name']; ?></option>
        <?php } ?>
      <?php } else { ?>
        <?php foreach ($category as $c) {
          if ($c['id_category'] == $article['category_id']) { ?>
            <option value="<?= $c['id_category']; ?>" selected><?= $c['category_name']; ?></option>
          <?php } else { ?>
            <option value="<?= $c['id_category']; ?>"><?= $c['category_name']; ?></option>
      <?php };
        };
      }; ?>
    </select>
    <select name="visibility" class="form-select mb-3" aria-label="Default select example" required>
      <?php foreach ($visibility as $v) {
        if ($v['id'] == $article['visibility_id']) { ?>
          <option value="<?= $v['id']; ?>" selected><?= $v['visibility']; ?></option>
        <?php } else { ?>
          <option value="<?= $v['id']; ?>" selected><?= $v['visibility']; ?></option>
      <?php };
      }; ?>
    </select>
    <button name="update" type="submit" class="btn btn-success mb-3">Update</button>
    <button name="delete" type="submit" class="btn btn-danger mb-3" onclick="return confirm('are you sure?')">Delete</button>
  </form>
</div>

<a href="detail.php?id=<?= $id; ?>" class="p-2 rounded-circle" style="position: fixed; right: 5px; bottom: 5px ;background-color: white; border: #40798C 5px solid;">
  <img src="<?= base_url('_asset/img/logo/backArrowLogo.png'); ?>" alt="" width="30" height="30">
</a>

<!-- Java Script -->
<!-- img Preview -->
<script src="<?= base_url('_asset/js/custom/previewImg/newArticlePage.js'); ?>"></script>
<!-- ckEditor -->
<script src="<?= base_url('_asset/js/CKEditor/ckeditor.js'); ?>"></script>
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
<?php require_once '../_footer.php'; ?>