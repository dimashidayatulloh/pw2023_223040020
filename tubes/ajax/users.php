<?php
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM user 
    WHERE 
        username LIKE '%$keyword%' OR
        email LIKE '%$keyword%'";
$users = query($query);
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="img/<?= $user['gambar']; ?>" alt="" class="img img-thumbnail rounded-circle" width="50px" height="50px"></td>
                <td><?= $user["username"]; ?></td>
                <td><?= $user["email"]; ?></td>
                <td><?= $user["level"]; ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="ubah.php?id=<?= $user['id']; ?>">Ubah</a>
                    <a class="btn btn-sm btn-danger" href="hapus.php?id=<?= $user['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>