<?php
include 'database.php';
$db = new Database();

$query = "SELECT * FROM merk";
$result = mysqli_query($db->conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Merk Kosmetik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Merk Kosmetik</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Merk</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id_merk'] ?></td>
                <td><?= $row['nama_merk'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>