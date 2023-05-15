<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM product";
   $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clothing and Acessoris| Login</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <link rel="stylesheet" href="../css/all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.css" />
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../css/bootstrap-4.min.css" />
  <link rel="shortcut icon" href="../img/logo 1.png">
</head>
      <a class="btn btn-success" href="form_product.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Harga Beli</th>
                    <th>Sell Price</th>
                    <th>stock</th>
                    <th>Min Stock</th>
                    <th>Tipe Product</th>
                    <th>Restock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['purchase_price']?></td>
                        <td><?=$row['sell_price']?></td>
                        <td><?=$row['stock']?></td>
                        <td><?=$row['min_stock']?></td>
                        <td><?=$row['product_type_id']?></td>
                        <td><?=$row['restock_id']?></td>
                        <td>
                            <a class="btn btn-primary" href="view_product.php?id=<?=$row['id']?>">View</a>
                            <a class="btn btn-primary" href="edit_product.php?id=<?=$row['id']?>">Edit</a>
                            <a class="btn btn-primary" href="delete_product.php?id=<?=$row['id']?>">Delete</a>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
</html>