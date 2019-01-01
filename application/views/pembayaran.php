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
			</ul>
              <ul class="navbar-nav absolute-right">
              
			<?php if(isset($_SESSION["id_user"])){ ?>
				  
				<li class="nav-item dropdown">
                	<a class="nav-link dropdown-toggle" href="courses" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user'] ?></a>
                	<div class="dropdown-menu" aria-labelledby="dropdown04">
                  		<a class="dropdown-item" href="<?php echo base_url()?>Akun">Akun</a>
						<a class="dropdown-item" href="<?php echo base_url()?>Pesan">Pesan</a>
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
          <h2 class="text-primary heading">Pembayaran</h2>
          <p>Soerabaja'45</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row m-auto">
        <div class="col-6">
          <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
          
            <center><b><h6>Editor</h6></b>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www167.lunapic.com/editor/?action=newbright" allowfullscreen></iframe>
              </div>
              <div class="" style="background: inherit; border-color: inherit;">
                <a href="jasa_edit" class="btn btn-primary">Jasa Edit</a></center>
              </div>

            <!--Rightside tampilan-->
            <div class="col-6">
              <div class="card card-custom bg-white border-white border-0">
                <div class="card-body">

                  Nama Produk : Kalender

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Deskripsi :</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>

                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Kertas :</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>--Pilih Item--</option>
                          <option value="1">HVS 70</option>
                          <option value="2">NCR</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Ukuran :</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>--Pilih Item--</option>
                          <option value="1">Ukuran 38X53</option>
                          <option value="2">Ukuran 46X64</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Jumlah :</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>Ukuran 38X53</option>
                          <option value="1">100 pcs</option>
                          <option value="2">200 pcs</option>
                          <option value="3">300 pcs</option>
                          <option value="4">400 pcs</option>
                          <option value="5">500 pcs</option>
                          <option value="6">600 pcs</option>
                          <option value="7">700 pcs</option>
                          <option value="8">800 pcs</option>
                          <option value="9">900 pcs</option>
                          <option value="10">1000 pcs</option>
                          <option value="11">1500 pcs</option>
                          <option value="12">2000 pcs</option>
                          <option value="13">2500 pcs</option>
                          <option value="14">3000 pcs</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>Ukuran 46X64</option>
                          <option value="1">100 pcs</option>
                          <option value="2">200 pcs</option>
                          <option value="3">300 pcs</option>
                          <option value="4">400 pcs</option>
                          <option value="5">500 pcs</option>
                          <option value="6">600 pcs</option>
                          <option value="7">700 pcs</option>
                          <option value="8">800pcs</option>
                          <option value="9">900 pcs</option>
                          <option value="10">1000 pcs</option>
                          <option value="11">1500 pcs</option>
                          <option value="12">2000 pcs</option>
                          <option value="13">2500 pcs</option>
                          <option value="14">3000 pcs</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  Estimasi : 7 Hari

                  <div class="block-content uprint-price-container">
                    <div class="unit-price-container uprint-price">
                      <p>Harga akan menjadi lebih murah, ketika Anda memilih quantity lebih banyak</p>
                      <div class="unit-price-text uprice">Harga :</div>
                      <div class="unit-price uprice"><div class="price-box"> 
                        <span class="regular-price"> 
                          <span class="price" data-unit="pcs">Rp 40.640,-pcs</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="total-price-container uprint-price">
                    <div class="total-price-text uprice">Harga Total:</div>
                    <div class="total-price uprice ">
                      <div class="price-box"> 
                        <span class="regular-price" id="product-price-2656"> 
                          <span class="price">Rp 406.400,-</span> 
                        </span>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- Button trigger modal -->
                <center><div class="card-footer" style="background: inherit; border-color: inherit;">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Pesan
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Rekap Pembayaran</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          dofjgzdrjgozsg
                          dskfjsjfhwo
                          dzshzih
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                          <button type="button" class="btn btn-primary">Cetak Slip</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </center>

            </div>
          </div>
        </div>
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