<?php
require 'koneksi.php';
$cashier = $_POST['cashier_id'];
$category = $_POST['category_id'];
$product = $_POST['product_name'];
$price = $_POST['price'];
$sql = "INSERT INTO product values ('','$product',$price,$category,$cashier)";
$result = mysqli_query($conn, $sql);
echo($sql);
header('Location: index.php');
?>