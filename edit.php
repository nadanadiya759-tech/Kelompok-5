<?php
include 'koneksi.php';
/** @var mysqli $conn */

$nomor_kartu_lama = $_GET['nomor_kartu'];
$result = mysqli_query($conn, "SELECT * FROM anggota WHERE nomor_kartu = '$nomor_kartu_lama'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nomor = $_POST['nomor_kartu'];
    $nama = $_POST['nama_anggota'];
    $tipe = $_POST['tipe_keanggotaan'];
    $id_card = $_POST['status_id_card'];

    $query = "UPDATE anggota SET 
                nomor_kartu = '$nomor',
                nama_anggota = '$nama', 
                tipe_keanggotaan = '$tipe', 
                status_id_card = '$id_card' 
              WHERE nomor_kartu = '$nomor_kartu_lama'";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">
    <div class="custom-card-box">
        <h1 class="mb-4">Edit Data Anggota</h1>

        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Nomor Kartu</label>
                <input type="text" class="form-control" name="nomor_kartu" value="<?= $data['nomor_kartu']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" name="nama_anggota" value="<?= $data['nama_anggota']; ?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Tipe Keanggotaan</label>
                <input type="text" class="form-control" name="tipe_keanggotaan" value="<?= $data['tipe_keanggotaan']; ?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Status ID Card</label>
                <input type="text" class="form-control" name="status_id_card" value="<?= $data['status_id_card']; ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-warning">Update Data</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>