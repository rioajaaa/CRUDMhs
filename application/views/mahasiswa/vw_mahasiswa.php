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
                <div class="col-md-6"><a href="<?= base_url()?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
                <div class="col-md-12">
                    <?= $this->session->flashdata('message');?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Mahasiswa</td>
                                <td>Nim</td>
                                <td>Email</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($mahasiswa as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['nim']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td>
                                    <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger px-3">Hapus</a>
                                    <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning px-3">Edit</a>
                                    <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info px-3">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>