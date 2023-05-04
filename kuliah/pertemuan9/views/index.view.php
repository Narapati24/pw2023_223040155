<?php include 'partials/header.php';
include 'partials/nav.php'; ?>
<div class="container">
  <h1>Halaman Home</h1>
  <h3>Daftar Mahasiswa</h3>
  <ul>
    <?php foreach ($students as $student) { ?>
      <div class="card">
        <li class="card-body">
          <p>Nama: <?= $student['nama']; ?></p>
          <p>NPM: <?= $student['npm']; ?></p>
          <p>Email: <?= $student['email']; ?></p>
        </li>
      </div>
    <?php }; ?>
  </ul>
</div>

<?php include 'partials/footer.php'; ?>