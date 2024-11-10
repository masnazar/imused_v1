<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Produk
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Daftar Produk</h1>
    </div>
    <div class="btn-list">
        <a href="<?= base_url('products/create') ?>" class="btn btn-primary btn-wave me-0">
            <i class="ri-add-line me-1"></i> Tambah Produk
        </a>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Daftar Produk</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="product-table" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Nama Brand</th>
                                <th>Kode Produk</th>
                                <th>SKU Produk</th>
                                <th>HPP Pembelian</th>
                                <th>HPP Penjualan</th>
                                <th>Stok</th>
                                <th>No BPOM</th>
                                <th>Nama Supplier</th>
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
    // Fungsi untuk memformat angka ke format akuntansi tanpa desimal
    function formatNumberWithCommas(angka) {
        return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    $(document).ready(function() {
        $('#product-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('products/getProducts') ?>",
                "type": "GET"
            },
            "columns": [
                { "data": "product_name" },
                { "data": "brand_name" },
                { "data": "product_code" },
                { "data": "product_sku" },
                { 
                    "data": "hpp",
                    "render": function(data, type, row) {
                        return type === 'display' ? 'Rp ' + formatNumberWithCommas(parseInt(data)) : parseInt(data);
                    }
                },
                { 
                    "data": "hpp_penjualan",
                    "render": function(data, type, row) {
                        return type === 'display' ? 'Rp ' + formatNumberWithCommas(parseInt(data)) : parseInt(data);
                    }
                },
                { 
                    "data": "stok",
                    "render": function(data, type, row) {
                        return type === 'display' ? formatNumberWithCommas(parseInt(data)) : parseInt(data);
                    }
                },
                { "data": "bpom_number" },
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
                        columns: ':visible:not(:last-child)', // Mengabaikan kolom terakhir
                        format: {
                            body: function (data, row, column) {
                                return column === 4 || column === 5 || column === 6 ? data.replace(/[^\d]/g, '') : data;
                            }
                        }
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':visible:not(:last-child)',
                        format: {
                            body: function (data, row, column) {
                                return column === 4 || column === 5 || column === 6 ? data.replace(/[^\d]/g, '') : data;
                            }
                        }
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':visible:not(:last-child)',
                        format: {
                            body: function (data, row, column) {
                                return column === 4 || column === 5 || column === 6 ? data.replace(/[^\d]/g, '') : data;
                            }
                        }
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':visible:not(:last-child)',
                        format: {
                            body: function (data, row, column) {
                                return column === 4 || column === 5 || column === 6 ? data.replace(/[^\d]/g, '') : data;
                            }
                        }
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible:not(:last-child)',
                        format: {
                            body: function (data, row, column) {
                                return column === 4 || column === 5 || column === 6 ? data.replace(/[^\d]/g, '') : data;
                            }
                        }
                    }
                }
            ]
        });

        // SweetAlert Konfirmasi Hapus
        $(document).on('click', '.delete-product', function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert untuk Flash Messages
    <?php if (session()->has('swal_success')) : ?>
        Swal.fire({
            icon: 'success',
            title: '<?= session('swal_success') ?>',
            showConfirmButton: false,
            timer: 2000,
            position: 'center'
        });
    <?php elseif (session()->has('swal_error')) : ?>
        Swal.fire({
            icon: 'error',
            title: '<?= session('swal_error') ?>',
            showConfirmButton: false,
            timer: 2000,
            position: 'center'
        });
    <?php endif; ?>
</script>
<?= $this->endSection() ?>
