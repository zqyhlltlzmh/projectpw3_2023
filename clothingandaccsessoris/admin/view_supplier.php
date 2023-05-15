<?php 
require_once 'dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM supplier WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>name</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>phone</td>
            <td><?=$row['phone']?></td>
        </tr>
        <tr>
            <td>address</td>
            <td><?=$row['address']?></td>
        </tr>
        <tr>
            <td>contact Name</td>
            <td><?=$row['contact_name']?></td>
        </tr>
    </tbody>
</table>
