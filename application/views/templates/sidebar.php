 
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <img  src="<?php echo base_url ('') ?>assets/img/logo_areby.png">
                </div>
                <div class="sidebar-brand-text mx-3">AREBY COLLECTION</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="bi bi-house-fill"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard/riwayat_pesanan') ?>">
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat Pesanan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/list_kategori/pakaian_anak') ?>">
                    <img src="<?php echo base_url () ?>assets/img/logo_anak.png">
                    <span>Pakaian Anak-anak</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/list_kategori/pakaian_dewasa') ?>">
                    <img src="<?php echo base_url () ?>assets/img/logo_dewasa.png">
                    <span>Pakaian Dewasa</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/list_kategori/busana_muslim') ?>">
                    <img src="<?php echo base_url () ?>assets/img/logo_muslim.png">
                    <span>Busana Muslim</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/list_kategori/jersey') ?>">
                    <img src="<?php echo base_url () ?>assets/img/logo_jersey.png">
                    <span>Jersey</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar_right">
                                <li>
                                    <?php 
                                    $keranjang = 'Keranjang Belanja : '.$this->cart->total_items(). 'items'
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>
                            
                            <div class="topbar-divider d-none d-sm-block"></div>
                            
                            <ul class="na navbar-nav navbar_right mt-1">
                                <?php if($this->session->userdata('username')) { ?>
                                    <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                    <a href="<?php echo base_url('profil_pelanggan/index') ?>" class="btn btn-sm btn-info ml-3"><i class="bi bi-person-circle">  </i></a>
                                    <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-sm btn-danger ml-3"><i class="bi bi-box-arrow-right">  </i></a>
                                <?php } else{ ?>
                                    <a href="<?php echo base_url('auth/login') ?>" class="btn btn-sm btn-success ml-3">Login  <i class="bi bi-box-arrow-right">  </i></a>
                                <?php } ?>
                            </ul>

                        </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->