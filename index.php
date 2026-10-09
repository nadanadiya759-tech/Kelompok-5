<?php 
include 'koneksi.php'; 
/** @var mysqli $conn */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container kotak my-4">
        <h1 class="mb-3">Sistem Manajemen Perpustakaan Digital</h1>
        
        <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Anggota</a>

        <table class="table table-bordered table-striped bg-white">
            <thead>
                <tr>
                    <th>Nama Anggota</th>
                    <th>Nomor Kartu</th>
                    <th>Tipe Keanggotaan</th>
                    <th>Status ID Card</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM anggota");
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td><?= $row['nama_anggota']; ?></td>
                        <td><?= $row['nomor_kartu']; ?></td>
                        <td><?= $row['tipe_keanggotaan']; ?></td>
                        <td><?= $row['status_id_card']; ?></td>
                        <td>
                            <a href="edit.php?nomor_kartu=<?= $row['nomor_kartu']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?nomor_kartu=<?= $row['nomor_kartu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>