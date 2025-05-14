<?php

$mysqli = mysqli_connect("localhost", "root", "", "kevin");

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $result = mysqli_query($mysqli, "INSERT INTO produk(nama, harga, deskripsi) VALUES('$nama', $harga, '$deskripsi')");

    echo "Users added successfully. <a href='index.php'>View Products</a>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Kevin Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    
    <a href="index.php">Kembali Ke Halaman Utama</a>

    <form action="add.php" method="POST" name="form1">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <label for="harga">Harga</label>
        <input type="number" name="harga">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi"></textarea>
        <button type="submit" name="submit">Add New Product</button>
    </form>
</body>
</html>