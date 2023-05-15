<?php 
    require_once 'dbkoneksi.php';
?>

<?php 
    $sql = "SELECT * FROM supplier";
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
<a class="btn btn-success" href="form_supplier.php" role="button">Create Kartu</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>phone</th>
            <th>address</th>
            <th>contact_name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['contact_name']?></td>
            <td>
                <a class="btn btn-primary" href="view_supplier.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_supplier.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_supplier.php?id=<?=$row['id']?>">Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $id++;   
            } 
        ?>
    </tbody>
</table>
</html