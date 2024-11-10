<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Brand
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Brand</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Brand</h1>
    </div>
    <div class="btn-list">
        <a href="<?= base_url('brands/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Brand
        </a>
    </div>
</div>
<!-- Page Header Close -->

<!-- Start:: row-4 -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Brand</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="brand-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Brand</th>
                                <th>Kode Brand</th>
                                <th>Supplier</th>
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

<!-- SweetAlert & DataTables Script -->
<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#brand-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('brands/getBrands') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "brand_name" },
                { "data": "brand_code" },
                { "data": "supplier_name" },
                { 
                    "data": "actions",
                    "orderable": false,
                    "searchable": false
                }
            ],
            "dom": 'Bfrtip',
            "buttons": [
    {
        extend: 'copy',
        exportOptions: {
            columns: ':not(:last-child)' // Mengabaikan kolom terakhir (kolom aksi) saat export
        }
    },
    {
        extend: 'csv',
        exportOptions: {
            columns: ':not(:last-child)' // Mengabaikan kolom terakhir
        }
    },
    {
        extend: 'excel',
        exportOptions: {
            columns: ':not(:last-child)' // Mengabaikan kolom terakhir
        }
    },
    {
        extend: 'pdf',
        exportOptions: {
            columns: ':not(:last-child)' // Mengabaikan kolom terakhir
        }
    },
    {
        extend: 'print',
        exportOptions: {
            columns: ':not(:last-child)' // Mengabaikan kolom terakhir
        }
    }
]

        });

        // SweetAlert notifications
        <?php if (session()->getFlashdata('swal_success')): ?>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?= session()->getFlashdata('swal_success') ?>',
                showConfirmButton: false,
                timer: 2000
            });
        <?php elseif (session()->getFlashdata('swal_error')): ?>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '<?= session()->getFlashdata('swal_error') ?>',
                showConfirmButton: true
            });
        <?php endif; ?>
    });
</script>
<?= $this->endSection() ?>
