<!doctype html>
<html lang="en">
  <head>
    <title>Percetakan Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="dashboard"><img src="http://localhost/Soerabaja45/assets/images/logo.jpg" width="100" height="100"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()?>Dashboard">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk/Barang</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url()?>Digoffset">Digital Offset</a>
                  <a class="dropdown-item" href="<?php echo base_url()?>Offset">Offset</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tempat</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="<?php echo base_url()?>galeri">Galeri</a>
                  <a class="dropdown-item" href="<?php echo base_url()?>lokasi">Lokasi</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>Tentang">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>Kontak">Kontak</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>carapesan">Info Pemesanan</a>
            </li>
			</ul>
              <ul class="navbar-nav absolute-right">
              
			<?php if(isset($_SESSION["id_user"])){ ?>
				  
				<li class="nav-item dropdown">
                	<a class="nav-link dropdown-toggle" href="courses" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user'] ?></a>
                	<div class="dropdown-menu" aria-labelledby="dropdown04">
                  		<a class="dropdown-item" href="<?php echo base_url()?>Akun">Akun</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>Riwayat">Riwayat</a>
<!--						<a class="dropdown-item" href="<?php echo base_url()?>Pesan">Pesan</a>-->
                  		<a class="dropdown-item" href="<?php echo base_url()?>Login/logout">Keluar</a>
                	</div>
              	</li>
				
				<?php }else {
                	echo '<li><a href="'.base_url().'login">Masuk Akun</a> / <a href="'.base_url().'register">Daftar Akun</a></li>';
				}?> 
				
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

   
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Produk Digital Offset</h2>
            
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
          

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="<?php echo base_url()?>assets/images/z5.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                 <center><h2 class="heading">Kalender</h2></center>
                  <p class="mb-4">Tidak perlu bingung dalam mencetak Kalender Tahun Baru. 
    Dan juga mencetak dalam jumlah banyak.Kini Soerabaja'45 bisa membantu anda.
    Silahkan hubungi CS online kami WA 0811 366 1927</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span></span>
                    </div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="<?php echo base_url()?>detailkal">Detail</a></span></div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="<?php echo base_url()?>pembayaran/produk/MS001">Pesan</a></span></div>
                  </div>
                </div>
              </div>
          </div>

<!--
          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="<?php echo base_url()?>assets/images/img21.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                 <center><h2 class="heading">Brosur</h2></center>
                  <p class="mb-4">Tidak perlu keluar uang banyak untuk bikin brosur promosi usaha Anda. Yes, cukup 250 rb sdh bisa dapat 1000 lbr brosur fullcolor dg kertas artpaper 120gr ukrn A5 1 sisi. 
Soal desain, jgn khawatir, kami punya banyak desainer handal yg siap membantu Anda.
Silahkan hubungi CS online kami
WA 0811 366 1927
Senin-sabtu jam 08.00 - 16.00</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span></span>
                    </div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="<?php echo base_url()?>detailkal">Detail</a></span></div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="<?php echo base_url()?>pembayaran">Pesan</a></span></div>
                  </div>
                </div>
              </div>
          </div>
-->



<!--
          <div class="item">
            <div class="block-19">
              <figure>
                <img src="http://localhost/Soerabaja45/assets/images/img2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <center><h2 class="heading">ID Card</h2></center>
                  <p class="mb-4">Beri kesan pertama melalui kartu nama yang mewakili diri anda!

                  Sekarang cetak kartu nama hanya 22.000 per box! 
                  sesuaikan kebutuhan anda dengan memilih berbagai spesifikasi dari kami!

                  Anda dapat tentukan spesifkasi produk mulai dari bahan, ukuran, pilihan sisi dan siku! Tunggu apalagi! Pesan sekarang sebelum kebanjiran orderan..</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span></span>
                    </div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="detailidc">Detail</a></span></div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="pembayaran">Pesan</a></span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="http://localhost/Soerabaja45/assets/images/img90.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <center><h2 class="heading"><a href="#">Pin Peniti</a></h2></center>
                  <p class="mb-4">Harga Rp 4.250/pcs</p>
                    <p>Minimal order 10 pcs</p>
                    <p>Diameter 4.4 cm</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span></span>
                    </div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="detailkal">Detail</a></span></div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="detailkal">Pesan</a></span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="http://localhost/Soerabaja45/assets/images/img4.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <center><h2 class="heading"><a href="#">Poster / Flyer A3</a></h2></center>
                  <p class="mb-4">beri kesan pertama yang tak terlupakan melalui banner dan flyer anda. soerabaja akan membantu mewujudkan kebutuhan anda. tunggu apa lagi? pilih spesifikasi yang anda butuhkan sekarang! </p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span></span>
                    </div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="detailkal">Detail</a></span></div>
                    <div class="price text-right"><del class="mr-3"></del><span><a class="btn btn-primary" href="detailkal">Pesan</a></span></div>
                  </div>
                </div>
              </div>
          </div>
-->


        </div>
      </div>

      
    </div>
    
    <!-- END section -->

    <!-- END section -->

    
    <!-- END section -->

    

    <div class="py-5 block-22">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
            <h2 class="heading"></h2>
            <p></p>
          </div>
          <div class="col-md-6">
            <form action="#" class="subscribe">
              <div class="form-group">
                <!--<input type="email" class="form-control email" placeholder="Enter email">
                <input type="submit" class="btn btn-primary submit" value="Subscribe"> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <center><h3>SOERABAJA'45</h3></center>
            <p>Perusahaan percetakan dan garment yang menyediakan produk atau barang yang dapat dipesan secara online dan costumer dapat mengedit produk yang akan di pesan </p>
          </div>
          <div class="col-md-2">
            <center><h3 class="heading">Tautan</h3></center>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="dashboard">Beranda</a></li>
                  <p><li><a href="tentang">Tentang</a></li></p>
                  <p><li><a href="kontak">Kontak</a></li></p>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="digoffset">Digital Offset</a></li>
                  <p><li><a href="offset">Offset</a></li></p>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <center><h3 class="heading">Informasi Kontak</h3></center>
            <div class="row block-23">
              <div class="col-md-5">
                <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Jalan Jawa No.28
Sumbersari
Kabupaten Jember
Jawa Timur 68121
Indonesia</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text"><p>0811-3661-927</p>
<p>(0331) 333000</p></span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text" style="word-break: break-all;">orderonline.sby45@gmail.com</span></a></li>
              </ul>
              </div>
              <div class="col-md-7">
                <ul>
                  <li><span class="icon ion-android-time"></span><span class="text"><p><b>Jam Buka</b></p>

<p>Sen:  07.00–21.00</p>
<p>Sel:  07.00–21.00</p>
<p>Rab:  07.00–21.00</p>
<p>Kam:  07.00–21.00</p>
<p>Jum:  07.00–11.00, 12.30–21.00</p>
<p>Sab:  07.00–21.00</p>
<p>Min:  13.00–21.00</span></li>
              </ul>
                
              </div>
              
                
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | FAR AWAY TEAM </p>
            <p class="float-md-right">
             <a href="https://www.facebook.com/soerabaja45official/" class="fa fa-facebook p-2"></a>
              <a href="https://www.youtube.com/channel/UCOYNDHL3btOOdoAotspKhlw" class="fa fa-youtube p-2"></a>
              <a href="https://www.instagram.com/soerabaja_45/" class="fa fa-instagram p-2"></a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.animateNumber.min.js"></script>

    <script src="<?php echo base_url()?>assets/js/main.js"></script>
  </body>
</html>