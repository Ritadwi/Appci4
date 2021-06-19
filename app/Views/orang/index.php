<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="" method="post">
                <h1 class="mt-2">Daftar Orang</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="masukkan keyword pencarian.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit ">Cari</button>
                    </div>
                </div>
            </form>
            <div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">nama</th>
                                <th scope="col">alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 + (6 * ($currentPage - 1)); ?>
                            <?php foreach ($orang as $o) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $o['nama']; ?></td>
                                    <td><?= $o['alamat']; ?></td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Detail
                                        </button> -->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $o['id']; ?>">
                                            Detail
                                        </button>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $pager->links('orang', 'orang_pagination'); ?>
                </div>
            </div>
            <!-- modal -->
            <?php foreach ($orang as $o) : ?>
                <div class="modal fade" id="exampleModal<?= $o['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel ">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                        <input type="text" value="<?= $o['nama']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                        <input type="text" value="<?= $o['alamat']; ?>" class="form-control" id="exampleInputPassword1">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <?$o['nama']; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $this->endSection(); ?>