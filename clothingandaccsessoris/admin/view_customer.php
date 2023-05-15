<?php 
require_once 'dbkoneksi.php';
?>

<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM customer WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$row['gender']?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?=$row['phone']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$row['email']?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?=$row['address']?></td>
        </tr>
        <tr>
            <td>IDCard</td>
            <td><?=$row['card_id']?></td>
        </tr>
    </tbody>
</table>
