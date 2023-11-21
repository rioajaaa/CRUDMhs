<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<div class="container-fluid py-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Data Prodi</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Prodi</td>
                        <td>Ruangan</td>
                        <td>Jurusan</td>
                        <td>Akreditasi</td>
                        <td>Nama Kaprodi</td>
                        <td>Tahun Berdiri</td>
                        <td>Output Lulusan</td>
                        <td>Gambar</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['prodi']; ?></td>
                            <td><?= $us['ruangan']; ?></td>
                            <td><?= $us['jurusan']; ?></td>
                            <td><?= $us['akre']; ?></td>
                            <td><?= $us['nk']; ?></td>
                            <td><?= $us['tb']; ?></td>
                            <td><?= $us['ol']; ?></td>
                            <td><img src="<?= base_url('assets/assets/img/prodi/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>