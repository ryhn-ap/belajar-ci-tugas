<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="row mb-4">

        <div class="col-12">
            <h4 class="fw-bold mb-3 text-secondary pb-2">Menu Makanan</h4>
        </div>

        <?php 
            $hasMakanan = false;
            foreach ($products as $item) : 
                if ($item['kategori'] === 'Makanan') : 
                    $hasMakanan = true;
        ?>         
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100 shadow-md border-0">
                            <div class="text-center p-2 rounded-top">
                                <img src="<?= base_url("img/" . ($item['foto'] ?: 'default.jpg')) ?>" 
                                    class="img-fluid rounded" 
                                    alt="<?= $item['nama'] ?>" 
                                    style="height: 200px; object-fit: contain; width: 100%;">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between p-3">
                                <div>
                                    <span class="badge bg-success-light text-success mb-2"><?= $item['kategori'] ?></span>
                                    <h5 class="card-title p-0 m-0 fs-5 text-dark fw-bold"><?= $item['nama'] ?></h5>
                                </div>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <p class="text-primary fw-bold fs-5 m-0">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                                    <?php if (session()->get('role') == 'admin' || session()->get('role') == 'user') : ?>
                                    <a href="<?= base_url('pesan/' . $item['id']) ?>" class="btn btn-sm btn-success rounded-pill px-3">
                                        <i class="bi bi-cart-plus me-1"></i> Pesan
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div> 
        <?php 
                endif;
            endforeach; 
            
            if (!$hasMakanan) : 
        ?>
            <div class="col-12">
                <p class="text-muted italic text-center py-3">Belum ada menu makanan tersedia.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="row">

        <div class="col-12">
            <h4 class="fw-bold mb-3 text-secondary pb-2">Menu Minuman</h4>
        </div>

        <?php 
            $hasMinuman = false;
            foreach ($products as $item) : 
                if ($item['kategori'] === 'Minuman') : 
                    $hasMinuman = true;
        ?>         
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100 shadow-md border-0">
                            <div class="text-center p-2 rounded-top">
                                <img src="<?= base_url("img/" . ($item['foto'] ?: 'default.jpg')) ?>" 
                                    class="img-fluid rounded" 
                                    alt="<?= $item['nama'] ?>" 
                                    style="height: 200px; object-fit: contain; width: 100%;">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between p-3">
                                <div>
                                    <span class="badge bg-info-light text-info mb-2"><?= $item['kategori'] ?></span>
                                    <h5 class="card-title p-0 m-0 fs-5 text-dark fw-bold"><?= $item['nama'] ?></h5>
                                </div>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <p class="text-primary fw-bold fs-5 m-0">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                                    <?php if (session()->get('role') == 'admin' || session()->get('role') == 'user') : ?>
                                    <a href="<?= base_url('pesan/' . $item['id']) ?>" class="btn btn-sm btn-success rounded-pill px-3">
                                        <i class="bi bi-cart-plus me-1"></i> Pesan
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div> 
        <?php 
                endif;
            endforeach; 
            
            if (!$hasMinuman) :
        ?>
                <div class="col-12">
                    <p class="text-muted italic text-center py-3">Belum ada menu minuman tersedia.</p>
                </div>
        <?php endif; ?>
    </div>

</div>

<?= $this->endSection() ?>
