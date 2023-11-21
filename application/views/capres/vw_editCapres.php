<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Memuat CSS Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="h2 mb-1 text-gray-800"><?php echo $judul; ?></h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">Form Edit Capres</h5><br>
                <form action="<?= base_url('Capres/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $capres['id']; ?>">
                    <div class="mb-3">
                        <label for="nik" class="form-label">Nik</label>
                        <input type="text" value="<?= $capres['nik']; ?>" class="form-control" id="nik" name="nik" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" value="<?= $capres['nama']; ?>" class="form-control" id="nama" name="nama" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="asal" class="form-label">Asal</label>
                        <input type="text" value="<?= $capres['asal']; ?>" class="form-control" id="asal" name="asal" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="partai" class="form-label">Partai Pndukung</label>
                        <input type="text" value="<?= $capres['partai']; ?>" class="form-control" id="partai" name="partai" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="riwayat" class="form-label">Riwayat Perkerjaan</label>
                        <input type="text" value="<?= $capres['riwayat']; ?>" class="form-control" id="riwayat" name="riwayat" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" value="<?= $capres['umur']; ?>" class="form-control" id="umur" name="umur" placeholder="...">
                    </div>
                    <a href="<?= base_url('Capres') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Edit Capres</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>