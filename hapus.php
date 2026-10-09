<?php
include 'koneksi.php';
/** @var mysqli $conn */

if (isset($_GET['nomor_kartu'])) {
    $nomor_kartu = $_GET['nomor_kartu'];
    mysqli_query($conn, "DELETE FROM anggota WHERE nomor_kartu = '$nomor_kartu'");
}

header("Location: index.php");
exit();
?>