<?php 
require_once 'dbkoneksi.php';
?>

<?php 
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        $sql = "SELECT * FROM supplier WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        $row = [];
    }
?>

<form method="POST" action="proses_supplier.php">
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
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" class="form-control" 
        value="<?php if(isset($row['name'])) echo $row['name']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">Phone</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="phone" name="phone" value="<?php if(isset($row['phone'])) echo $row['phone']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Address</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="address" name="address" value="<?php if(isset($row['address'])) echo $row['address']; ?>"
        type="text" class="form-control">
      </div>
    </div>
</div>
<div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Contact Name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="contact_name" name="contact_name" value="<?php if(isset($row['contact_name'])) echo $row['contact_name']; ?>"
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