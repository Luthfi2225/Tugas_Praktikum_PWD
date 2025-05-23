<?php
require_once 'class/Merk.php';
$merk = new Merk();
$data = $merk->getById($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_merk'];
    $merk->ubah($_GET['id'], $nama);
    header("Location: index.php");
}
?>
<h2>Ubah Merk</h2>
<form method="post">
    <label>Nama Merk:</label>
    <input type="text" name="nama_merk" value="<?= $data['nama_merk']; ?>" required>
    <button type="submit">Update</button>
</form>