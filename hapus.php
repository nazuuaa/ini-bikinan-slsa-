<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $koneksi->query("DELETE FROM db_bale WHERE id_hewan = $id");

    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>

