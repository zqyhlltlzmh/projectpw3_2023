<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clothing and Acsessoris | Edit</title>

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
    <h2>Data Product</h2>
    <br/>
    <a href="list_product.php">Kembali</a>
    <br/>
    <br/>
    <h3>EDIT DATA PRODUCT</h3>

    <?php
    include 'dbkoneksi.php';
    $_id = $_GET['id'];
    if(!empty($_id)){
        $sql = "SELECT * FROM product WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
    ?>
        <form method="post" action="proses_product.php">
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
                    <td for="nama" class="col-4 col-form-label">SKU</td>
                    <td>
                        <input id="sku" name="sku" type="text" class="form-control" value="<?=$row['sku']?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                    <input id="name" name="name" type="text" class="form-control" value="<?=$row['name']?>">

                    </td>
                </tr>
                <tr class="form-group row">
                    <td for="nama" class="col-4 col-form-label">Harga Beli</td>
                    <td>
                    <input id="purchase_price" name="purchase_price" type="text" class="form-control" value="<?=$row['purchase_price']?>">
                    </td>
                </tr>
                <tr>
                    <td>Sell Price</td>
                    <td>
                    <input id="sell_price" name="sell_price" type="text" class="form-control" value="<?=$row['sell_price']?>">
                    </td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td>
                    <input id="stock" name="stock" type="text" class="form-control" value="<?=$row['stock']?>">
                    </td>
                </tr>
                <tr>
                    <td>Min Stock</td>
                    <td>
                    <input id="min_stock" name="min_stock" type="text" class="form-control" value="<?=$row['min_stock']?>">
                    </td>
                </tr>
                <tr>
                    <td>Tipe Produk</td>
                    <td>
                    <input id="product_type_id" name="product_type_id" type="text" class="form-control" value="<?=$row['product_type_id']?>">
                    </td>
                </tr>
                <tr>
                    <td>Restock Id</td>
                    <td>
                    <input id="restock_id" name="restock_id" type="text" class="form-control" value="<?=$row['restock_id']?>">
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