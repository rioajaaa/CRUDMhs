<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Esport/tambah" class="btn btn-info mb-2">Tambah Data Esport Team</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Team</td>
                        <td>Nama Captain</td>
                        <td>Jumlah Member</td>
                        <td>Nomor Pendaftaran</td>
                        <td>Logo Team</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($esport as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nama_team']; ?></td>
                            <td><?= $us['nama_captain']; ?></td>
                            <td><?= $us['jumlah_member']; ?></td>
                            <td><?= $us['nomor_daftar']; ?></td>
                            <td><img src="<?= base_url('assets/assets/img/esport/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Esport/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                <a href="<?= base_url('Esport/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>