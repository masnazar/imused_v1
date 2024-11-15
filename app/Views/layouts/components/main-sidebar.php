<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <img src="<?= $company_logo; ?>" alt="Logo Perusahaan" style="max-width: 80px; padding:10px;">
    </div>

    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <ul class="main-menu">
                
                <!-- Main Section -->
                <li class="slide__category"><span class="category-name">Main</span></li>

                <!-- Dashboard -->
                <li class="slide">
                    <a href="<?= base_url('dashboard'); ?>" class="side-menu__item">
                        <i class="ri-dashboard-line side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <!-- Operasional Management -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-archive-line side-menu__icon"></i>
                        <span class="side-menu__label">Operasional</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <!-- Supplier Management -->
                        <li class="slide">
                            <a href="<?= base_url('/suppliers'); ?>" class="side-menu__item">Daftar Supplier</a>
                        </li>
                        <!-- Brand Management -->
                        <li class="slide">
                            <a href="<?= base_url('/brands'); ?>" class="side-menu__item">Daftar Brand</a>
                        </li>
                        <!-- Product Management -->
                        <li class="slide">
                            <a href="<?= base_url('/products'); ?>" class="side-menu__item">Daftar Produk</a>
                        </li>
                        <!-- Warehouse Management -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-store-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Gudang</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child2">
                                <!-- Dashboard Gudang -->
                                <li>
                                    <a href="<?= base_url('dashboard/warehouse'); ?>" class="side-menu__item">Dashboard Gudang</a>
                                </li>
                                <!-- Daftar Gudang -->
                                <li>
                                    <a href="<?= base_url('/warehouses'); ?>" class="side-menu__item">Daftar Gudang</a>
                                </li>
                                <!-- Stok Transfer -->
                                <li>
                                    <a href="<?= base_url('/stock_transfers'); ?>" class="side-menu__item">Stok Transfer</a>
                                </li>
                                <!-- Stok Receive -->
                                <li>
                                    <a href="<?= base_url('/stock-receive'); ?>" class="side-menu__item">Stok Receive</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- User Management -->
                <li class="slide">
                    <a href="<?= base_url('users'); ?>" class="side-menu__item">
                        <i class="ri-user-line side-menu__icon"></i>
                        <span class="side-menu__label">Manajemen Pengguna</span>
                    </a>
                </li>

                <!-- Settings -->
                <li class="slide">
                    <a href="<?= base_url('settings'); ?>" class="side-menu__item">
                        <i class="ri-settings-line side-menu__icon"></i>
                        <span class="side-menu__label">Pengaturan Sistem</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
