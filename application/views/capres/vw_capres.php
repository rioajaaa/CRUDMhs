<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Capres/tambah" class="btn btn-info mb-2">Tambah Capres</a></div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nik</td>
                        <td>Nama Lengkap</td>
                        <td>Asal</td>
                        <td>Partai Pendukung</td>
                        <td>Riwayat Pekerjaan</td>
                        <td>Umur</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($capres as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nik']; ?></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['asal']; ?></td>
                            <td><?= $us['partai']; ?></td>
                            <td><?= $us['riwayat']; ?></td>
                            <td><?= $us['umur']; ?></td>
                            <td>
                                <a href="<?= base_url('Capres/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                <a href="<?= base_url('Capres/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>