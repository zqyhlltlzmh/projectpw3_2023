<?php 
// Include file koneksi database
require_once 'dbkoneksi.php';

// Ambil data dari form
$_kode = $_POST['id'];
$_nama = $_POST['name'];
$_diskon = $_POST['discount'];
$_iuran = $_POST['member_fee'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_id;
$ar_data[]=$_name;
$ar_data[]=$_discount * $_iuran/100;
$ar_data[]=$_member_fee;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO card (id,name,discount,member_fee) 
    VALUES (?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE card SET id=?,name=?,discount=?,member_fee=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_card.php');
?>
