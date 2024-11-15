<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Histori Stok Masuk
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Histori Stok Masuk</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Histori Stok Masuk</h1>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Histori Stok Masuk</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="stock-receive-history-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Gudang</th>
                                <th>Jenis</th>
                                <th>Diterima Oleh</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stock_receives as $receive): ?>
                                <tr>
                                    <td><?= date('d-m-Y H:i', strtotime($receive['received_at'])) ?></td>
                                    <td><?= esc($receive['product_name']) ?></td>
                                    <td><?= esc($receive['quantity']) ?></td>
                                    <td><?= esc($receive['warehouse_name']) ?></td>
                                    <td><?= ucfirst(esc($receive['type'])) ?></td>
                                    <td><?= esc($receive['received_by']) ?></td>
                                    <td><?= esc($receive['remarks']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
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
        $('#stock-receive-history-table').DataTable({
            "order": [[0, 'desc']],
            "dom": 'Bfrtip',
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<?= $this->endSection() ?>
