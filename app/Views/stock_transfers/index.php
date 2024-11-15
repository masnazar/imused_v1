<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Stok Transfer
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stok Transfer</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Stok Transfer</h1>
    </div>
    <div class="btn-list">
        <a href="<?= base_url('stock_transfers/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Stok Transfer
        </a>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Stok Transfer</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="stock-transfer-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Gudang Asal</th>
                                <th>Gudang Tujuan</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        $('#stock-transfer-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('stock_transfers/getTransfers') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "product_name" },
                { "data": "from_warehouse" },
                { "data": "to_warehouse" },
                { "data": "quantity" },
                { "data": "status" },
                { "data": "actions", "orderable": false, "searchable": false }
            ],
            "dom": 'Bfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>
<?= $this->endSection() ?>
