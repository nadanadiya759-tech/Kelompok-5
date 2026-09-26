<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <div class="container mt-4">
        <div class="custom-card-box">
            <h2 class="mb-4">Tambah Anggota</h2>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="no_kartu" class="form-label">Nomor Kartu</label>
                    <input type="text" class="form-control" id="no_kartu" name="no_kartu" required>
                </div>

                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe Keanggotaan</label>
                    <select class="form-select" id="tipe" name="tipe" required>
                        <option value="" disabled selected>Pilih tipe</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="status_id_card" class="form-label">Status ID Card</label>
                    <select class="form-select" id="status_id_card" name="status_id_card" required>
                        <option value="" disabled selected>Pilih status</option>
                        <option value="Dicetak">Dicetak</option>
                        <option value="Belum Dicetak">Belum Dicetak</option>
                    </select>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a href="index.html" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>