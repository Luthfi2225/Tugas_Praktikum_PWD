<?php
require_once 'class/Merk.php';
$merk = new Merk();
$data = $merk->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Merk Make Up</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer></script>
</head>
<body>
    <h1>Daftar Merk Make Up</h1>
    <div class="button-container">
    <a href="tambah.php" class="tambah-button">+ Tambah Merk</a></div>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama Merk</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $data->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id_merk']; ?></td>
            <td><?= $row['nama_merk']; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id_merk']; ?>">Ubah</a> |
                <a href="#" onclick="confirmHapus(<?= $row['id_merk']; ?>)">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>