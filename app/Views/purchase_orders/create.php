<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Buat Purchase Order
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Buat Purchase Order</h1>

<form action="<?= base_url('purchase-orders/store') ?>" method="post">
    <?= csrf_field() ?>

    <!-- Tanggal PO -->
    <div class="mb-3">
        <label for="po_date" class="form-label">Tanggal PO</label>
        <input type="date" name="po_date" id="po_date" class="form-control" required>
    </div>

    <!-- Supplier -->
    <div class="mb-3">
        <label for="supplier_id" class="form-label">Supplier</label>
        <select name="supplier_id" id="supplier_id" class="form-select" required onchange="fetchBrands()">
            <option value="">Pilih Supplier</option>
            <?php foreach ($suppliers as $supplier): ?>
                <option value="<?= $supplier['id'] ?>"><?= $supplier['supplier_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Brand -->
    <div class="mb-3">
        <label for="brand_id" class="form-label">Brand</label>
        <select name="brand_id" id="brand_id" class="form-select" required>
            <option value="">Pilih Brand</option>
        </select>
    </div>

    <!-- Tombol Simpan -->
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    function fetchBrands() {
        const supplierId = document.getElementById('supplier_id').value;
        const brandDropdown = document.getElementById('brand_id');

        // Kosongkan dropdown brand
        brandDropdown.innerHTML = '<option value="">Loading...</option>';

        if (!supplierId) {
            brandDropdown.innerHTML = '<option value="">Pilih Supplier Terlebih Dahulu</option>';
            return;
        }

        // Kirim request ke server untuk mendapatkan data brand
        fetch(`<?= base_url('purchase-order/getBrandsBySupplier') ?>/${supplierId}`)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    const brandOptions = data.data
                        .map(brand => `<option value="${brand.id}">${brand.brand_name}</option>`)
                        .join('');
                    brandDropdown.innerHTML = '<option value="">Pilih Brand</option>' + brandOptions;
                } else {
                    brandDropdown.innerHTML = '<option value="">Tidak ada brand terkait</option>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                brandDropdown.innerHTML = '<option value="">Gagal Memuat Data Brand</option>';
            });
    }
</script>
<?= $this->endSection() ?>
