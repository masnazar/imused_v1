<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Posisi
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Posisi</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Posisi</h1>
    </div>
    <div class="btn-list">
        <!-- Tombol Batal -->
        <a href="<?= base_url('positions') ?>" class="btn btn-white btn-wave">
            <i class="ri-close-line align-middle me-1 lh-1"></i> Batal
        </a>
        <!-- Tombol Tambah Posisi -->
        <a href="<?= base_url('positions/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Posisi
        </a>
    </div>
</div>
<!-- Page Header Close -->

<!-- Start:: row-4 -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Posisi</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="position-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Posisi</th>
                                <th>Kode Posisi</th>
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
        $('#position-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('positions/getPositions') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "position_name" },
                { "data": "position_code" },
                { 
                    "data": "id",
                    "orderable": false,
                    "searchable": false,
                    "render": function(data, type, row) {
                        return `
                            <a href="<?= base_url('positions/edit/') ?>${data}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= base_url('positions/delete/') ?>${data}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        `;
                    }
                }
            ],
            "dom": 'Bfrtip',
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<?= $this->endSection() ?>
