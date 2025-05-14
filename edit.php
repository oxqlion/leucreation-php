<?php

$mysqli = mysqli_connect("localhost", "root", "", "kevin");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id = $id");
$product = mysqli_fetch_assoc($result);

?>

<?php

if(isset($_POST['update'])) {
    $id = $_GET['id'];

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $update = mysqli_query($mysqli, "UPDATE produk SET nama = '$nama', harga = '$harga', deskripsi = '$deskripsi' WHERE id = $id");

    if ($update) {
        header("Location: index.php");
        exit();
    } else {
        echo "Update failed: " . mysqli_error($mysqli);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kepin</title>
</head>
<body>
    <h1>Edit Produk <?php echo $product['nama'] ?></h1>

    <a href="index.php">Kembali ke halaman utama</a>

    <p>Nama Produk : <?php echo $product['nama'] ?></p>
    <p>Harga Produk : <?php echo $product['harga'] ?></p>
    <p>Deskripsi Produk : <?php echo $product['deskripsi'] ?></p>
    
    <h2>Edit Produk</h2>

    <form action="edit.php?id=<?php echo $product['id'] ?>" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?php echo $product['nama'] ?>">
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="<?php echo $product['harga'] ?>">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" value="<?php echo $product['deskripsi'] ?>">
        <button type="submit" name="update">Update Product</button>
    </form>

</body>
</html>