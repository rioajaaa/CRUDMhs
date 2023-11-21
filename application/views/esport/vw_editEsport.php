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
                <h5 class="card-title">Form Edit Esport</h5><br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $esport['id']; ?>">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $esport['nama_team']; ?>" class="form-control" id="nama_team" name="nama_team" placeholder="Nama Team">
                        <?= form_error('nama_team', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $esport['nama_captain']; ?>" class="form-control" id="nama_captain" name="nama_captain" placeholder="Nama Captain">
                        <?= form_error('nama_captain', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $esport['jumlah_member']; ?>" class="form-control" id="jumlah_member" name="jumlah_member" placeholder="Jumlah Member">
                        <?= form_error('jumlah_member', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" value="<?= $esport['nomor_daftar']; ?>" class="form-control" id="nomor_daftar" name="nomor_daftar" placeholder="Nomor Pendaftaran">
                        <?= form_error('nomor_daftar', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <img src="<?= base_url('assets/assets/img/esport/') . $esport['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                        <input type="file" class="custom-file-input row col-lg-12" name="gambar" id="gambar">
                        <?= form_error('gambar', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('Esport') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Edit Esport Team</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>