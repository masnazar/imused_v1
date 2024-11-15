<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Approve Transfer Stok
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <h1 class="page-title fw-medium fs-18 mb-0">Approve Transfer Stok</h1>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <p><strong>Nama Produk:</strong> <?= esc($transfer['product_name']) ?></p>
        <!-- Detail lainnya -->
        <form action="<?= base_url('stock_transfers/approveTransfer/' . $transfer['id']) ?>" method="post">
            <?= csrf_field() ?>
            <button type="submit" class="btn btn-success">Approve</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>