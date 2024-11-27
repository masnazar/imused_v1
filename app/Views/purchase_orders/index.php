<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Daftar Purchase Orders<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Daftar Purchase Orders</h1>

<a href="<?= base_url('purchase-orders/create') ?>" class="btn btn-primary">Buat Purchase Order</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor PO</th>
            <th>Supplier</th>
            <th>Brand</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($purchase_orders as $po): ?>
            <tr>
                <td><?= $po['id'] ?></td>
                <td><?= $po['po_number'] ?></td>
                <td><?= esc($po['supplier_name']) ?></td>
                <td><?= $po['brand_name'] ?></td>
                <td><?= $po['po_date'] ?></td>
                <td><?= ucfirst($po['status']) ?></td>
                <td>
                    <a href="<?= base_url('purchase-orders/edit/' . $po['id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('purchase-orders/delete/' . $po['id']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
