<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group my-3">
          <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Search data.." autofocus autocomplete="off">
          <button class="btn btn-outline-primary" type="submit" name="search" id="search-button">Search</button>
        </div>
      </form>
    </div>
  </div>

  <div id="search-container">

    <?php if ($students) : ?>

      <table class="table border">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($students as $student) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><img src="img/<?= $student['gambar']; ?>" alt="" class="img img-thumbnail" width="50px" height="50px"></td>
              <td><?= $student['nim']; ?></td>
              <td><?= $student['nama']; ?></td>
              <td><?= $student['email']; ?></td>
              <td><?= $student['jurusan']; ?></td>
              <td>
                <a href="ubah.php?id=<?= $student['id']; ?>" class="nav-link badge text-bg-warning p-2">Ubah</a> |
                <a href="hapus.php?id=<?= $student['id']; ?>" class="nav-link badge text-bg-danger p-2" onclick="return confirm('yakin?');">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-danger" role="alert">
            Data tidak ditemukan!
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>