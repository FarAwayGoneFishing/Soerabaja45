<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Riwayat</title>

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
                                <li class="active has-sub">
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
                                <li class="active has-sub">
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
                                <h2 class="title-1 m-b-25">Daftar Pesanan Offset</h2>
                                <div class="table-responsive table--no-card m-b-40">
									<form method="get" action="">
                                        <label>Filter</label><br>
                                        <!-- <div class="rs-select2--light rs-select2--sm"> -->
                                        <select class="js-select2" name="filter" id="filter">
                                            <option value="">Pilih</option>
                                            <option value="1">Per Tanggal</option>
                                            <option value="2">Per Bulan</option>
                                            <option value="3">Per Tahun</option>
                                        </select><div class="dropDownSelect2"></div>
                                        <br />
                                        <div id="form-tanggal">
                                            <label>Tanggal</label><br>
                                            <input type="text" name="tanggal" class="input-tanggal" />
                                            <br />
                                        </div>
                                        <div id="form-bulan">
                                            <label>Bulan</label><br>
                                            <select name="bulan">
                                                <option value="">Pilih</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            <br />
                                        </div>
                                        <div id="form-tahun">
                                            <label>Tahun</label><br>
                                            <select name="tahun">
                                                <option value="">Pilih</option>
                                                <?php
                                                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                                                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                                                }
                                                ?>
                                            </select>
                                            <br />
                                        </div>
                                        <button type="submit" class="btn btn-info">Tampilkan</button>
                                        <a href="<?php echo base_url('Dashboard/Riwayat'); ?>">Reset Filter</a>
                                    </form>
									<hr>
									
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
												<th>Nama</th>
                                                <th>Produk</th>
												<th class="text-right">Jumlah</th>
                                                <th class="text-right">Total Harga</th>
												<th class="text-right">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $no = "1"; foreach($row as $row){ ?>
                                            <tr>
                                                <td><?php echo $no; $no = $no+1;  ?></td>
												<td><?php echo $row->nama_user ?></td>
                                                <td><?php echo $row->nama_produk ?></td>
												<td class="text-right"><?php echo $row->jumlah_pesan ?></td>
												<td class="text-right"><?php echo $row->total_harga ?></td>
												<td class="text-right"><a class="btn btn-primary" href="<?php echo base_url()?>Dashboard/Detail" role="button">Detail</a></td>
                                            </tr>
                                            <?php }; ?>
                                        </tbody>
                                    </table>
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
    <script src="<?php echo base_url('assetsa/vendor/jquery-3.3.1.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assetsa/vendor/jquery-ui.js')?>" type="text/javascript"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assetsa/vendor/bootstrap-4.1/popper.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assetsa/vendor/bootstrap-4.1/bootstrap.min.js')?>" type="text/javascript"></script>
		
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })     
   </script>

    
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
