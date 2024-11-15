<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Detail Transfer Stok
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <h1 class="page-title fw-medium fs-18 mb-0">Detail Transfer Stok</h1>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <p><strong>Nama Produk:</strong> <?= esc($transfer['product_name']) ?></p>
        <!-- Tambahkan detail lain sesuai kebutuhan -->
    </div>
</div>

<?= $this->endSection() ?>