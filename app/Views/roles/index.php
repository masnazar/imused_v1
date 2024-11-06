<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Role
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Role</h1>
    </div>
    <div class="btn-list">
        <a href="<?= base_url('roles/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Role
        </a>
    </div>
</div>

<!-- Start:: row-4 -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Role</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="role-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Role</th>
                                <th>Deskripsi</th>
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

<!-- Script untuk mengaktifkan DataTables dengan server-side processing -->
<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        $('#role-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('roles/getRoles') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "role_name" },
                { "data": "description" },
                { 
                    "data": "id",
                    "orderable": false,
                    "searchable": false,
                    "render": function(data, type, row) {
                        return `
                            <a href="<?= base_url('roles/edit/') ?>${data}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= base_url('roles/managePermissions/') ?>${data}" class="btn btn-sm btn-info">Permissions</a>
                            <a href="<?= base_url('roles/delete/') ?>${data}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        `;
                    }
                }
            ]
        });
    });
</script>
<?= $this->endSection() ?>