<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>
<!-- Tambahkan CSS khusus jika diperlukan -->
<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- Start::page-header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard Gudang</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Dashboard Gudang</h1>
    </div>
</div>
<!-- End::page-header -->

<!-- Start::row-1 -->
<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xxl-6 col-xl-12">
                <div class="card custom-card overflow-hidden main-content-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <h6 class="mb-2 fs-12">Total Produk</h6> 
                                <h4 class="fw-medium mb-1"><?= $totalProducts ?> Produk</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <div class="card custom-card overflow-hidden main-content-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <h6 class="mb-2 fs-12">Total Gudang</h6> 
                                <h4 class="fw-medium mb-1"><?= $totalWarehouses ?> Gudang</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Statistik Stok Gudang
                </div>
            </div>
            <div class="card-body p-0">
                <div id="warehouse-stock-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mt-4">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Stok Produk per Gudang
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Gudang</th>
                                <th scope="col">Jumlah Stok</th>
                                <th scope="col">Tanggal Diperbarui</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stockData as $item): ?>
                                <tr>
                                    <td><?= esc($item['product_name']) ?></td>
                                    <td><?= esc($item['warehouse_name']) ?></td>
                                    <td><?= esc($item['quantity']) ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($item['updated_at'])) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
<!-- Apex Charts JS -->
<script src="<?= base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            series: <?= json_encode($chartData['series']) ?>,
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: <?= json_encode($chartData['categories']) ?>,
            }
        };

        var chart = new ApexCharts(document.querySelector("#warehouse-stock-chart"), options);
        chart.render();
    });
</script>

<?= $this->endSection('scripts'); ?>
