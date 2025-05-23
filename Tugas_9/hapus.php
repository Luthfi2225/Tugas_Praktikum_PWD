<?php
require_once 'class/Merk.php';
$merk = new Merk();
$merk->hapus($_GET['id']);
header("Location: index.php");
?>