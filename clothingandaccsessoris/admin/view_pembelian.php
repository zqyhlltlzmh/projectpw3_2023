<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pembelian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clothing and Acsessoris | order View</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
 
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
 
  <link rel="stylesheet" href="../css/all.min.css" />
 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
 
  <link rel="stylesheet" href="../css/bootstrap-4.min.css" />
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css" />

  <link rel="stylesheet" href="../css/jqvmap.min.css" />
  
  <link rel="stylesheet" href="../css/adminlte.css" />

  <link rel="stylesheet" href="../css/OverlayScrollbars.min.css" />
  
  <link rel="stylesheet" href="../css/daterangepicker.css" />
  
  <link rel="stylesheet" href="../css/summernote-bs4.min.css" />
  <link rel="shortcut icon" href="../img/logo 1.png">
</head>
<table class="table table-striped">
    <tbody>
        <tr><td>ID</td>
        <td><?=$row['id']?></td></tr>
        <tr><td>SKU</td>
        <td><?=$row['order_number']?></td></tr>
        <tr><td>Nama </td>
        <td><?=$row['date']?></td></tr>
        <tr><td>purchase_price</td>
        <td><?=$row['qty']?></td></tr>
        <tr><td>sell_price</td>
        <td><?=$row['total_price']?></td></tr>
        <tr><td>Stock</td>
        <td><?=$row['customer_id']?></td></tr>
        <tr><td>Minimum Stock</td>
        <td><?=$row['product_id']?></td></tr>
    </tbody>
</table>
</html>