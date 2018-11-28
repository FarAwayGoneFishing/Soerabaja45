<!doctype html>
<html lang="en">
  <head>
    <title>Percetakan Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/css/animate.css">
    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="http://localhost/Soerabaja45/assets/css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="dashboard"><img src="http://localhost/Soerabaja45/assets/images/logo.jpg" width="100" height="100"></a></img>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk/Barang</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="digoffset">Digital Offset</a>
                  <a class="dropdown-item" href="#">Offset</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tempat</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">Galeri</a>
                  <a class="dropdown-item" href="#">Lokasi</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak">Kontak</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login">Masuk Akun</a> / <a href="register">Daftar Akun</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pr-md-5">
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Nama</label>
                      <input type="text" id="name" name="nama" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">No. Telp</label>
                      <input type="text" id="phone" name="telpon" class="form-control py-2">
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Tulis Pesan</label>
                      <textarea name="isi" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Kirim Pesan" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
          <div class="col-md-4">
            
            <div class="block-23">
              <h3 class="heading mb-5">Informasi Kontak</h3>
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text"></span>Jalan Jawa No.28, Sumbersari, Kabupaten Jember, Jawa Timur, 68121, Indonesia</li>
                <li><a href="<?php echo base_url()?>assets/#"><span class="icon ion-ios-telephone"></span><span class="text"><p>0811-3661-927</p>
<p>(0331) 333000</p></span></a></li>
                <li><a href="<?php echo base_url()?>assets/#"><span class="icon ion-android-mail"></span><span class="text">orderonline.sby45@gmail.com</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text"><p>Sen:  07.00–21.00</p>
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
    </section>
    <!-- END section -->

    <div id="map"></div>
    
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
                  <li><a href="#">Digital Offset</a></li>
                  <p><li><a href="#">Offset</a></li></p>
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

    
    <script src="<?php echo base_url()?>assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?php echo base_url()?>assets/js/google-map.js"></script>    


    <script src="<?php echo base_url()?>assets/js/main.js"></script>
  </body>
</html>