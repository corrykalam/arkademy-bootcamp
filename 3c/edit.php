<?php
require 'koneksi.php';
$id = $_POST['id'];
$cashier = $_POST['cashier_id'];
$category = $_POST['category_id'];
$product = $_POST['product_name'];
$price = substr($_POST['price'], 4);
$sql = "UPDATE product SET id_cashier=$cashier, id_category=$category, name='$product', price=$price WHERE id=$id";
$result = mysqli_query($conn, $sql);

header('Location: index.php');
?>