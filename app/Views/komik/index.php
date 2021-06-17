<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Komik/create/" class="btn btn-primary mt-3">Tambah Data Komik</a>
            <h1 class="mt-2">Daftar Komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <?= session()->getFlashdata('pesan'); ?>
                <div>
                <?php endif; ?>
                </div>
                <?php if (session()->getFlashdata('hapus')) : ?>
                    <?= session()->getFlashdata('hapus'); ?>
                    <div>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($komik as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                                    <td><?= $k['judul']; ?></td>
                                    <td>
                                        <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
        </div>
    </div>
    <?= $this->endSection(); ?>