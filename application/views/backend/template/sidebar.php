<aside class="main-sidebar sidebar-light-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/img/sidebar/barista.png') ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Barista's Service</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/img/sidebar/bita.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Tsabita Coffee Shop</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                if ($user['role'] == 'Admin') {
                ?>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="<?= site_url('dashboard/') ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Chart
                            </p>
                        </a>
                    </li>
                <?php
                }
                ?>
                <li class="nav-header">AKSES FITUR</li>
                <?php
                if ($user['role'] == 'Admin') {
                ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-coffee"></i>
                            <p>
                                Coffee
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="<?= site_url('Coffee/') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar Coffee</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('Coffee/tambah') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Data</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('Barista/') ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Barista
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('Penjualan/') ?>" class="nav-link">
                            <i class="nav-icon fas fa-dolly"></i>
                            <p>
                                Selling
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('Shift/') ?>" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Shift
                            </p>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Profil/') ?>">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Profil/coffee/') ?>">
                            <i class="nav-icon fas fa-coffee"></i>
                            <p>
                                Coffee
                            </p>
                        </a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </nav>

    </div>

</aside>