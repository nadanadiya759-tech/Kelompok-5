<?php 
include 'koneksi.php'; 
/** @var mysqli $conn */

if (isset($_POST['submit'])) {
    $nomor = $_POST['nomor_kartu'];
    $nama = $_POST['nama_anggota'];
    $tipe = $_POST['tipe_keanggotaan'];
    $id_card = $_POST['status_id_card'];

    $query = "INSERT INTO anggota (nomor_kartu, nama_anggota, tipe_keanggotaan, status_id_card) 
              VALUES ('$nomor', '$nama', '$tipe', '$id_card')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambah data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">
    <div class="custom-card-box">
        <h1 class="mb-4">Tambah Data Anggota</h1>

        <form action="" method="POST"> 
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" name="nomor_kartu" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" name="nama_anggota" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Tipe Keanggotaan</label>
                <input type="text" class="form-control" name="tipe_keanggotaan" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Status ID Card</label>
                <input type="text" class="form-control" name="status_id_card" required>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>