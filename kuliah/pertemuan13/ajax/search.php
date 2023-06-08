<?php
require('../functions.php');
$keyword = $_GET['keyword'];
$students = query("SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'");
?>

<?php $i = 1;
if ($students) { ?>
  <?php foreach ($students as $student) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td>
        <img src="img/<?= $student['gambar']; ?>" width="50">
      </td>
      <td><?= $student['nim']; ?></td>
      <td><?= $student['nama']; ?></td>
      <td><?= $student['email']; ?></td>
      <td><?= $student['jurusan']; ?></td>
      <td>
        <a href="" class="badge text-bg-warning">ubah</a> |
        <a href="" class="badge text-bg-danger">hapus</a>
      </td>
    </tr>
  <?php endforeach;
} else { ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        Student Not Found!
      </div>
    </div>
  </div>
<?php } ?>