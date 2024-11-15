<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Gudang
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Gudang</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Gudang</h1>
    </div>
    <div class="btn-list">
        <a href="<?= base_url('warehouses/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Gudang
        </a>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Gudang</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="warehouse-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Gudang</th>
                                <th>Lokasi</th>
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
        $('#warehouse-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('warehouses/getWarehouses') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "name" },
                { "data": "location" },
                { "data": "actions", "orderable": false, "searchable": false }
            ],
            "dom": 'Bfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>
<?= $this->endSection() ?>
