<?php

$id = $_GET['id'];

$mysqli = mysqli_connect("localhost", "root", "", "kevin");
$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id = $id");

if($result) {
    header("Location: index.php");
    exit();
} else {
    echo "gabisa dihapus bang";
}

?>