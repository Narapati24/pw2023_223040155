<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group mb-3">
          <input id="keyword" name="keyword" type="search" class="form-control" placeholder="Search Student" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
          <button name="btn-search" class="btn btn-success" type="submit" id="btn-search">Search</button>
        </div>
      </form>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody id="container">
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
    </tbody>
  </table>
</div>

<script src="js/script.js"></script>

<?php require('partials/footer.php'); ?>