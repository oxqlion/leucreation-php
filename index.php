<?php

$mysqli = mysqli_connect("localhost", "root", "", "kevin");
$result = mysqli_query($mysqli, "SELECT * FROM produk"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin</title>
</head>
<body>
    <h1>Welcome to Kevin Website</h1>
    <a href="add.php">Add New Product</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        <?php
        while($produk = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>{$produk['id']}</td>";
            echo "<td>{$produk['nama']}</td>";
            echo "<td>{$produk['harga']}</td>";
            echo "<td>{$produk['deskripsi']}</td>";
            echo "<td><a href='edit.php?id=$produk[id]'>Edit Produk</a> | <a href='delete.php?id=$produk[id]'>Hapus Produk</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>