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
                <h5 class="card-title">Form Tambah Data Mahasiswa</h5><br>
                <form action="" method="POST">
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        <?= form_error('nama', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim">
                        <?= form_error('nim', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin">
                        <?= form_error('jk', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <?= form_error('email', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <select name="prodi" id="prodi" class="form-control">
                            <option value="">Prodi</option>
                            <?php foreach ($prodi as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('prodi', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="as" name="as" placeholder="Asal Sekolah">
                        <?= form_error('as', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="nh" name="nh" placeholder="No Handphone">
                        <?= form_error('nh', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                        <?= form_error('alamat', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Tambah Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>