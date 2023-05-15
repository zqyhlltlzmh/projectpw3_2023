<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clothing and Acsessoris | form</title>

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
<body>
    <h2>Data ORDE</h2>
    <br/>
    <a href="list_pembelian.php">Kembali</a>
    <br/>
    <br/>
    <h3>EDIT DATA order</h3>

    <?php
    include 'dbkoneksi.php';
    $_id = $_GET['id'];
    if(!empty($_id)){
        $sql = "SELECT * FROM pembelian WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
    ?>
        <form method="post" action="proses_pembelian.php">
            <table>
                <tr class="form-group row">
                    <td for="id" class="col-4 col-form-label">ID</td>
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-anchor"></i>
                        </div>
                    </div> 
                    <td>
                        <input id="id" name="id" type="number" class="form-control" value="<?=$row['id']?>">
                    </td>
                </tr>
                <tr class="form-group row">
                    <td for="nama" class="col-4 col-form-label">Order Number</td>
                    <td>
                        <input id="order_number" name="order_number" type="text" class="form-control" value="<?=$row['order_number']?>">
                    </td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>
                    <input id="date" name="date" type="date" class="form-control" value="<?=$row['date']?>">
                    </td>
                </tr>
                <tr>
                    <td>QTY</td>
                    <td>
                    <input id="qty" name="qty" type="text" class="form-control" value="<?=$row['qty']?>">
                    </td>
                </tr>
                <tr>
                    <td>Total price</td>
                    <td>
                    <input id="total_price" name="total_price" type="text" class="form-control" value="<?=$row['total_price']?>">
                    </td>
                </tr>
                <tr>
                    <td>Id Customer</td>
                    <td>
                    <input id="customer_id" name="customer_id" type="text" class="form-control" value="<?=$row['customer_id']?>">
                    </td>
                </tr>
                <tr>
                    <td>Id product</td>
                    <td>
                    <input id="product_id" name="product_id" type="text" class="form-control" value="<?=$row['product_id']?>">
                    </td>
                </tr>
                <tr>
			        <td> 
                        <?php
                            $button = (empty($_id)) ? "Simpan":"Update"; 
                        ?>
                            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>"/>
                            <input type="hidden" name="id" value="<?=$_id?>"/>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>