<?php 
// Include file koneksi database
require_once 'dbkoneksi.php';

// Ambil data dari form
$_kode = $_POST['id'];
$_nama = $_POST['restock_number'];
$_diskon = $_POST['date'];
$_diskon = $_POST['qty'];
$_diskon = $_POST['price'];
$_iuran = $_POST['supplier_id'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_id;
$ar_data[]=$_restock_number;
$ar_data[]=$_date;
$ar_data[]=$_qty;
$ar_data[]=$_price;
$ar_data[]=$_supplier_id;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO restock (id,restock_number,date,qty,price,supplier_id) 
    VALUES (?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE restock SET id=?,restock_number=?,date=?,qty=?,price=?,supplier_id=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_restock.php');
?>
