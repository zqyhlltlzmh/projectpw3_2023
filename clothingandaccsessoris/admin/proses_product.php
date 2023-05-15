<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_sku = $_POST['sku'];
   $_name = $_POST['name'];
   $_purchase_price = $_POST['purchase_price'];
   $_sell_price = $_POST['sell_price'];
   $_stock = $_POST['stock'];
   $_min_stock = $_POST['min_stock'];
   $_product_type_id = $_POST['product_type_id'];
   $_restock_id = $_POST['restock_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_sku; // ? 2
   $ar_data[]=$_name; 
   $ar_data[]=$_purchase_price;
   $ar_data[]=$_sell_price;
   $ar_data[]=$_stock;
   $ar_data[]=$_min_stock;
   $ar_data[]=$_product_type_id;
   $ar_data[]=$_restock_id; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO product (id,sku,name,purchase_price,sell_price,stock,
    min_stock,product_type_id,restock_id) VALUES (?,?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE product SET id=?,sku=?,name=?,purchase_price=?,sell_price=?,
    stock=?,min_stock=?,product_type_id=?,restock_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_product.php');
?>