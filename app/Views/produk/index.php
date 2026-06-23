<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
    if (session()->getFlashData('success')) {
?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <?= session()->getFlashData('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
?>
<?php
    if (session()->getFlashData('failed')) {
?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashData('failed') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
    Tambah Data
</button>
<br>
<br>

<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Makanan<span></span></h5>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto Menu</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $noMakanan = 1; 
                            foreach ($products as $produk) :
                                if (stripos($produk['kategori'], 'makanan') !== false) : 
                            ?>
                                <tr>
                                    <th scope="row"><?= $noMakanan ?></th>
                                    <td>
                                        <a href="#">
                                            <?php if ($produk['foto'] != '' && file_exists("img/" . $produk['foto'])) : ?>
                                                <img src="<?= base_url() . "img/" . $produk['foto'] ?>" width="100">
                                            <?php else : ?>
                                                <img src="<?= base_url() ?>NiceAdmin/assets/img/product-1.jpg" alt="Default">
                                            <?php endif; ?>
                                        </a>
                                    </td>
                                    <td><a href="#" class="text-primary fw-bold"><?= $produk['nama'] ?></a></td>
                                    <td><?= $produk['harga'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                            Ubah
                                        </button>
                                        <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini ?')">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php 
                                $noMakanan++;
                                endif; 
                            endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Minuman<span></span></h5>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto Menu</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $noMinuman = 1; 
                                foreach ($products as $produk) :
                                    if (stripos($produk['kategori'], 'minuman') !== false) : 
                            ?>
                                        <tr>
                                            <th scope="row"><?= $noMinuman ?></th>
                                            
                                            <td>
                                                <a href="#">
                                                    <?php if ($produk['foto'] != '' && file_exists("img/" . $produk['foto'])) : ?>
                                                        <img src="<?= base_url() . "img/" . $produk['foto'] ?>" width="100">
                                                    <?php else : ?>
                                                        <img src="<?= base_url() ?>NiceAdmin/assets/img/product-2.jpg" alt="Default">
                                                    <?php endif; ?>
                                                </a>
                                            </td>
                                            <td><a href="#" class="text-primary fw-bold"><?= $produk['nama'] ?></a></td>
                                            <td><?= $produk['harga'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                                    Ubah
                                                </button>
                                                <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini ?')">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                            <?php 
                                        $noMinuman++;
                                    endif; 
                                endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this -> include('produk/modal_add') ?>
<?= $this->include('produk/modal_edit') ?>

<?= $this->endSection() ?>