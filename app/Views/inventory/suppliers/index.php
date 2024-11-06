<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Supplier
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Supplier</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Supplier</h1>
    </div>
    <div class="btn-list">
        <!-- Tombol Batal -->
        <a href="<?= base_url('suppliers') ?>" class="btn btn-white btn-wave">
            <i class="ri-close-line align-middle me-1 lh-1"></i> Batal
        </a>
        <!-- Tombol Tambah Supplier -->
        <a href="<?= base_url('suppliers/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Supplier
        </a>
    </div>
</div>
<!-- Page Header Close -->

<!-- Start:: row-4 -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Supplier</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="file-export" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Supplier</th>
                                <th>Kode Supplier</th>
                                <th>Alamat</th>
                                <th>PIC</th>
                                <th>Nomor WhatsApp PIC</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-4 -->

<?= $this->endSection() ?>

<!-- Script untuk mengaktifkan DataTables dengan server-side processing dan fitur export -->
<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        $('#file-export').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('suppliers/getSuppliers') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "supplier_name" },
                { "data": "supplier_code" },
                { "data": "address" },
                { "data": "pic_name" },
                { "data": "pic_whatsapp" },
                { 
                    "data": "actions",
                    "orderable": false,
                    "searchable": false
                }
            ],
            "dom": 'Bfrtip',  // Menampilkan fitur export di atas tabel
            "buttons": [  // Opsi export yang diaktifkan
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<?= $this->endSection() ?>