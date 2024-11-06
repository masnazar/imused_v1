<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="<?= base_url('dashboard'); ?>" class="header-logo">
            <img src="<?= base_url('assets/images/brand-logos/desktop-logo.png'); ?>" alt="logo" class="desktop-logo">
        </a>
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

                <!-- Supplier Management -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-truck-line side-menu__icon"></i>
                        <span class="side-menu__label">Supplier</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a href="<?= base_url('/suppliers'); ?>" class="side-menu__item">Daftar Supplier</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url('/suppliers/create'); ?>" class="side-menu__item">Tambah Supplier</a>
                        </li>
                    </ul>
                </li>

                <!-- User Management -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-user-line side-menu__icon"></i>
                        <span class="side-menu__label">Users</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a href="<?= base_url('users'); ?>" class="side-menu__item">Daftar Users</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url('users/create'); ?>" class="side-menu__item">Tambah User</a>
                        </li>
                    </ul>
                </li>

                <!-- Role Management -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-shield-user-line side-menu__icon"></i>
                        <span class="side-menu__label">Roles</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a href="<?= base_url('roles'); ?>" class="side-menu__item">Daftar Roles</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url('roles/manage'); ?>" class="side-menu__item">Manage Roles</a>
                        </li>
                    </ul>
                </li>

                <!-- Position Management -->
                <li class="slide">
                    <a href="<?= base_url('positions'); ?>" class="side-menu__item">
                        <i class="ri-briefcase-line side-menu__icon"></i>
                        <span class="side-menu__label">Positions</span>
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
