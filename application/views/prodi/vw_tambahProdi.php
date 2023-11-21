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
                <h5 class="card-title">Form Tambah Data Prodi</h5><br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-outline mb-3">
                        <select name="prodi" id="prodi" class="form-control">
                            <option value="" selected disabled>Program Studi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Rekayasa Komputer">Teknik Rekayasa Komputer</option>
                            <option value="Teknik Elektronika Telekomunikasi">Teknik Elektronika Telekomunikasi</option>
                        </select>
                        <?= form_error('prodi', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="ruangan" name="ruangan" placeholder="Ruangan">
                        <?= form_error('ruangan', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                        <?= form_error('jurusan', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="akre" name="akre" placeholder="Akreditasi">
                        <?= form_error('akre', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="nk" name="nk" placeholder="Nama Kaprodi">
                        <?= form_error('nk', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="tb" name="tb" placeholder="Tahun Berdiri">
                        <?= form_error('tb', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" id="ol" name="ol" placeholder="Output Lulusan">
                        <?= form_error('ol', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar" placeholder="Choose File">

                        </div>
                    </div>
                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-info float-right">Tambah Prodi</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Memuat script JavaScript Bootstrap 5 (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>