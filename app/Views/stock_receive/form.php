<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Penerimaan Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Penerimaan Barang</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Form Penerimaan Barang</h1>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Penerimaan Barang</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('stock-receive/store') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="transaction_id" class="form-label">Nomor Transaksi</label>
                        <input type="text" name="transaction_id" class="form-control" id="transaction_id" value="Auto-generated" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="warehouse_id" class="form-label">Gudang</label>
                        <select name="warehouse_id" id="warehouse_id" class="form-select" required>
                            <?php foreach ($warehouses as $warehouse) : ?>
                                <option value="<?= $warehouse['id'] ?>"><?= esc($warehouse['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">Produk</label>
                        <select name="product_id" id="product_id" class="form-select" required onchange="fetchSuppliers()">
                            <?php foreach ($products as $product) : ?>
                                <option value="<?= $product['id'] ?>"><?= esc($product['product_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Jumlah</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Stok Masuk</label>
                        <select name="type" id="type" class="form-select" required onchange="updateSourceField()">
                            <option value="vendor">Vendor</option>
                            <option value="internal">Internal</option>
                            <option value="return">Return</option>
                            <option value="adjustment">Adjustment</option>
                            <option value="donation">Donation</option>
                        </select>
                    </div>

                    <div class="mb-3" id="po_field" style="display:none;">
                        <label for="po_number" class="form-label">Nomor PO</label>
                        <input type="text" name="po_number" id="po_number" class="form-control" placeholder="Masukkan Nomor PO">
                    </div>

                    <div class="mb-3" id="source_field_container">
                        <label for="source_id" class="form-label">Sumber Penerimaan</label>
                        <select name="source_id" id="source_id" class="form-select"></select>
                    </div>

                    <div class="mb-3">
                        <label for="received_at" class="form-label">Tanggal Penerimaan</label>
                        <input type="datetime-local" name="received_at" class="form-control" id="received_at" required>
                    </div>

                    <div class="mb-3">
                        <label for="received_by" class="form-label">Penerima</label>
                        <input type="text" name="received_by" class="form-control" id="received_by" value="<?= esc($current_user) ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="remarks" class="form-label">Keterangan</label>
                        <textarea name="remarks" class="form-control" id="remarks"></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function fetchSuppliers() {
        const productId = document.getElementById('product_id').value;

        fetch(`<?= base_url('stock-receive/getSuppliersByProduct') ?>/${productId}`)
            .then(response => response.json())
            .then(data => {
                const sourceFieldContainer = document.getElementById('source_field_container');
                let supplierOptions = '';

                if (data.length > 0) {
                    supplierOptions = data.map(supplier => `<option value="${supplier.id}">${supplier.supplier_name}</option>`).join('');
                } else {
                    supplierOptions = `<option value="">Tidak ada supplier terkait</option>`;
                }

                sourceFieldContainer.innerHTML = `
                    <label for="source_id" class="form-label">Sumber Penerimaan (Supplier)</label>
                    <select name="source_id" id="source_id" class="form-select">
                        ${supplierOptions}
                    </select>
                `;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function updateSourceField() {
        const type = document.getElementById('type').value;
        const sourceFieldContainer = document.getElementById('source_field_container');
        const poField = document.getElementById('po_field');

        if (type === 'vendor') {
            poField.style.display = 'block';
            fetchSuppliers();
        } else {
            poField.style.display = 'none';
            sourceFieldContainer.innerHTML = `
                <label for="source_id" class="form-label">Sumber Penerimaan</label>
                <input type="text" name="source_id" id="source_id" class="form-control" placeholder="Masukkan sumber sesuai kebutuhan">
            `;
        }
    }

    document.addEventListener('DOMContentLoaded', updateSourceField);

    <?php if(session()->has('swal_success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?= session('swal_success') ?>'
        });
    <?php elseif(session()->has('swal_error')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Gagal, Laey!',
            text: '<?= session('swal_error') ?>'
        });
    <?php endif; ?>
</script>
<?= $this->endSection() ?>
