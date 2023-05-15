<?php 
require_once 'dbkoneksi.php';
$_id=$_GET['id'];
$sql="DELETE FROM product WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);

header('location:list_product.php');
?>