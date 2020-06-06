<?php
require 'koneksi.php';
$id = $_POST['id'];
$sql = "DELETE FROM product WHERE id=$id";
$result = mysqli_query($conn, $sql);
header('Location: index.php');
?>