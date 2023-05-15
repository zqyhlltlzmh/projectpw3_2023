<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM customer";
   $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clothing and Acsessoris | customer</title>

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
      <a class="btn btn-success" href="form_customer.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Addres</th>
                    <th>IdCard</th>
                    <th>Acsion</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['gender']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['address']?></td>
                        <td><?=$row['card_id']?></td>
                    <td>
                        <a class="btn btn-primary" href="view_customer.php?id=<?=$row['id']?>">View</a>
                        <a class="btn btn-primary" href="form_customer.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn btn-primary" href="delete_customer.php?id=<?= $row['id'] ?>"> Delete </a> 
                    </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        
