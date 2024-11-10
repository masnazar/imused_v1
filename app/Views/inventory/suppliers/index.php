<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Supplier
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- SweetAlert for Flash Messages -->
<?php if (session()->getFlashdata('swal_success')): ?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= session()->getFlashdata('swal_success') ?>',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
<?php elseif (session()->getFlashdata('swal_error')): ?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: '<?= session()->getFlashdata('swal_error') ?>',
            showConfirmButton: true
        });
    </script>
<?php endif; ?>
<!-- SweetAlert End -->

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
        <a href="<?= base_url('suppliers') ?>" class="btn btn-white btn-wave">
            <i class="ri-close-line align-middle me-1 lh-1"></i> Batal
        </a>
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
                    "searchable": false,
                    "render": function(data, type, row) {
                        return `
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= base_url('suppliers/edit/') ?>${row.id}">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="javascript:void(0);" onclick="deleteSupplier(${row.id})">Hapus</a></li>
                                </ul>
                            </div>`;
                    }
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
    });

    function deleteSupplier(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data supplier ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `<?= base_url('suppliers/delete/') ?>${id}`;
            }
        });
    }
</script>
<?= $this->endSection() ?>
