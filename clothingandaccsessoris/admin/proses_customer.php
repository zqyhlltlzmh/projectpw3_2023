<?php
require_once 'dbkoneksi.php';
?>
<?php
$_name = $_POST['name'];
$_gender = $_POST['gender'];
$_phone = $_POST['phone'];
$_email = $_POST['email'];
$_address = $_POST['address'];
$_card_id = $_POST['card_id'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_name; // ? 1
$ar_data[] = $_gender; // ? 2
$ar_data[] = $_phone; // 3
$ar_data[] = $_email;
$ar_data[] = $_address;
$ar_data[] = $_card_id;

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO customer (name,gender,phone,email,address,card_id) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE customer SET name=?,gender=?,phonek=?,email=?,address=?,card_id=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:list_customer.php');
?>