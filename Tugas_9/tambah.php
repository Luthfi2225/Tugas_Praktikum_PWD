<?php
require_once 'class/Merk.php';
$merk = new Merk();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_merk'];
    $merk->tambah($nama);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Merk</title>
    <!-- ✅ GANTI path jika file CSS kamu beda folder -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="form-container">
        <h1>Tambah Merk Make Up</h1>
        <form method="post">
            <label for="nama_merk">Nama Merk:</label>
            <input type="text" name="nama_merk" id="nama_merk" required>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>