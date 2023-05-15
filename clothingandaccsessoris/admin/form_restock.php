<?php 
require_once 'dbkoneksi.php';
?>

<?php 
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        $sql = "SELECT * FROM restock WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        $row = [];
    }
?>

<form method="POST" action="proses_restock.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="id" name="id" type="text" class="form-control"
        value="<?php if(isset($row['id'])) echo $row['id']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Restock Number</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="date" name="date" type="text" class="form-control" 
        value="<?php if(isset($row['date'])) echo $row['date']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">QTY</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="qty" name="qty" value="<?php if(isset($row['qty'])) echo $row['qty']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="price" name="price" value="<?php if(isset($row['price'])) echo $row['price']; ?>"
        type="text" class="form-control">
      </div>
    </div>
</div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Supplier ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="supplier_id" name="supplier_id" value="<?php if(isset($row['supplier_id'])) echo $row['supplier_id']; ?>"
        type="text" class="form-control">
      </div>
    </div>
</div>
<div class="form-group row">
    <div class="offset-4 col-8">
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
</form>