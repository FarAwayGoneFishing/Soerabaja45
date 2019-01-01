<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Detail Produk</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assetsa/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assetsa/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assetsa/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsa/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assetsa/css/theme.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="Dashboard">
                            <img src="http://localhost/Soerabaja45/assets/images/logo.jpg" width="70" height="70" alt="Soerabaja45" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Daftar Pesanan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard">Daftar Pesanan</a>
                                </li>

								<li>
                                    <a href="<?php echo base_url()?>Dashboard/digoffset">Digital Offset</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard/offset">Offset</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard/Riwayat">Riwayat Transaksi</a>
                                </li>
                            </ul>
                        </li>
                         <li class="active has-sub">
                            <a href="<?php echo base_url()?>Digoffset">
                                <i class="fas fa-copy"></i>Produk Digital Offset</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Offset">
                                <i class="fas fa-calendar"></i>Produk Offset</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Pesan">
                                <i class="far fa-check-square"></i>Pesan Konsumen</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="http://localhost/Soerabaja45/assets/images/logo.jpg" width="70" height="70" alt="Soerabaja45" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Daftar Pesanan <span class="badge badge-primary">5</span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard">Daftar Pesanan</a>
                                </li>

								<li>
                                    <a href="<?php echo base_url()?>Dashboard/digoffset">Digital Offset</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard/offset">Offset</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard/Riwayat">Riwayat Transaksi</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="<?php echo base_url()?>Digoffset">
                                <i class="fas fa-copy"></i>Produk Digital Offset</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Offset">
                                <i class="fas fa-calendar"></i>Produk Offset</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Pesan">
                                <i class="far fa-check-square"></i>Pesan Konsumen <span class="badge badge-success">2</span></a>
                        </li>
                            
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['nama']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['nama']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
												
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo base_url()?>Account">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url()?>Login/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Detail Pesanan</h3>
                                        </div>
                                        <hr>
										<?php foreach($data as $data){ ?>
<!--                                        <form action="" method="post" novalidate="novalidate">-->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label mb-1">Nama</label>
                                                <input id="nama" name="nama" type="text" class="form-control" value="<?php echo $data->nama_user ?>" readonly>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label class="control-label mb-1">Waktu Pesan</label>
                                                <input id="waktu" name="waktu" type="text" class="form-control" value="<?php echo $data->tanggal ?>" readonly>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label class="control-label mb-1">Produk yang dipesan</label>
                                                <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->nama_produk ?>" readonly>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label mb-1">Jenis Produk</label>
                                                        <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->jenis_produk ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="control-label mb-1">Harga /pcs</label>
                                                    <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->harga ?>" readonly>
                                                </div>
                                            </div>
											<div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                       <label class="control-label mb-1">Kertas</label>
                                                       <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->kertas ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="control-label mb-1">Jumlah yang dipesan</label>
                                                    <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->jumlah_pesan ?>" readonly>
                                                </div>
                                            </div>
											<div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label mb-1">Ukuran</label>
                                                        <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->ukuran ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="control-label mb-1">Total Harga</label>
                                                    <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->total_harga ?>" readonly>
                                                </div>
												<div class="col-lg-3">
                                                    <label class="control-label mb-1">Estimasi Waktu</label>
                                                    <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->estimasi ?>" readonly>
                                                </div>
												<div class="col-lg-3">
                                                    <label class="control-label mb-1">Status Bayar</label>
                                                    <input id="status" name="status" type="text" class="form-control" value="<?php echo $data->status_bayar ?>" readonly>
                                                </div>
                                            </div>
											<div class="row">
<!--
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                       <label class="control-label mb-1">Tambah Warna</label>
                                                       <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->tambah_warna ?>" readonly>
                                                    </div>
                                                </div>
-->
                                                <div class="col-lg-3">
                                                    <label class="control-label mb-1">Deskripsi</label>
													<textarea id="produk" name="produk" type="text" class="form-control" readonly><?php echo $data->deskripsi ?></textarea>
                                                </div>
                                            </div>
											<div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                       <label class="control-label mb-1">Jasa Desain</label>
                                                       <input id="produk" name="produk" type="text" class="form-control" value="<?php echo $data->jasa_desain ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="control-label mb-1">Desain yang Diminta</label>
													<textarea id="produk" name="produk" type="text" class="form-control" readonly><?php echo $data->desain_yang_diminta ?></textarea>
                                                </div>
                                            </div>
											<br/><br/>
											<br/><br/>
											<br/><br/>
										
											<div class="row">
                                                <div class="col-lg-3">
                                                    <div>
                                                		<a id="button" class="btn btn-lg btn-danger btn-block" role="button" href="<?php echo base_url()?>Dashboard/delete/<?php echo $data->id_pesan ?>">
															Hapus
                                                		</a>
                                            		</div>
                                                </div>
												<div class="col-lg-3"></div>
												<div class="col-lg-3"></div>
                                                <div class="col-lg-3">
                                                    <div>
                                                		
												<?php if($data->status_bayar == "belum"){ ?>
													<a class="btn btn-lg btn-success btn-block" href="<?php echo base_url()?>Dashboard/bayar/<?php echo $data->id_pesan ?>" role="button">Bayar</a>
												<?php }else if($data->status_bayar == "lunas"){ ?>
													<a class="btn btn-lg btn-success btn-block" href="<?php echo base_url()?>Dashboard/selesai/<?php echo $data->id_pesan ?>" role="button">Selesai</a>
												<?php }else {};?>
														
                                            		</div>
                                                </div>
                                            </div>
                                            <?php }; ?>
<!--                                        </form>-->
                                    </div>
                                </div>
                            </div>
						</div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assetsa/vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assetsa/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assetsa/vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?php echo base_url('assetsa/vendor/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('assetsa/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('assetsa/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assetsa/vendor/select2/select2.min.js')?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assetsa/js/main.js')?>"></script>

</body>

</html>
<!-- end document-->
