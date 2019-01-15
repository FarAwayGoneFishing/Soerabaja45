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
          <h2 class="text-primary heading">Halaman Checkout</h2>
          <p>Silahkan mengisi kolom dibawah ini dan tekan pesan sekarang</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row m-auto">
        <div class="col-6">
              <div class="card bg-light mb-3" style="width: 500px; height: 300px">
                <h3><div class="card-header">Metode Pengiriman</div></h3>
                  <div class="card-body">


                      <dl class="sp-methods" id="checkout-payment-method-load">
                        <label for="p_method_banktransfer"> <span class="no-display"></span>
                        <dt> Store Pickup </dt>
                      <dd id="container_payment_method_banktransfer" class="payment-method">
                        <ul class="form-list checkout-agreements" id="payment_form_banktransfer">     
                          <label for="s_method_flatrate1_flatrate1">Ambil ditempat kami "PERCETAKAN SOERABAJA'45"</label>
                        </ul>
                      </dd>  
                      </dl>
                    </div>
                  </div>
                </div>
   
             
            <!--Rightside tampilan-->

            <div class="col-6">
                  <div class="card bg-light mb-3" style="width: 500px; height: 300px">
                    <h3><div class="card-header">Metode Pembayaran</div></h3>
                      <div class="card-body">
                          
                            <dl class="sp-methods" id="checkout-payment-method-load">
                              <label for="p_method_banktransfer"> <span class="no-display"></span>
                                <dt> Bank Transfer Payment </dt>
                                <dd id="container_payment_method_banktransfer" class="payment-method">
                                   <ul class="form-list checkout-agreements" id="payment_form_banktransfer">
                                <li>
                                  <div class="banktransfer-instructions-content agreement-content"> Bank BCA <br /> No Rek : 488 79 88888<br /> An : PT. Percetakan Soerabaja'45
                                </li>
                                   </ul>  
                                </dd>
                            </dl>  
                        </div>
                      </div>
                    </div>
                  </div>
                
            


  
	  <div class="col-12">
		  <div class="card bg-light mb-3" style="width: 1050px">
          <h3><div class="card-header">
            Order Review
          </div></h3>
			  <div class="card-body">
          <div id="checkout-review-table-wrapper">
            <table class="data-anable" id="checkout-review-table"></table>

            <td>
              <a class="remove-icon" style="float:left; margin-right: 10px; line-height: 10px;"></a>
              <div class="osc-product-image">
				  
                <h4 class="product-name" style="padding-left: 40px"><?php echo $produk ?> - Digital Offset</h4><br>
			<div style="padding-left: 90px">
				<form action="<?php echo base_url()?>pembayaran/create" method="post">
				
					<input type="hidden" name="model" value="<?php echo $model ?>">
					<input type="hidden" class="form-control" name="link" id="link" value="<?php echo $link ?>">
                <div class="form-group col-lg-3">
                   <label class="control-label mb-1">Deskripsi</label>
					<textarea id="nama" name="deskripsi" type="text" class="form-control" readonly><?php echo $deskripsi ?> </textarea>
                </div>
                <div class="form-group col-lg-3">
                   <label class="control-label mb-1">Kertas</label>
                   <input id="waktu" name="kertas" type="text" class="form-control" value="<?php echo $kertas ?>" readonly>
                </div>
                <div class="form-group col-lg-3">
                   <label class="control-label mb-1">Ukuran</label>
                   <input id="produk" name="ukuran" type="text" class="form-control" value="<?php echo $ukuran ?>" readonly>
                </div>
                <div class="row">
                   <div class="col-lg-3">
                       <div class="form-group">
                           <label class="control-label mb-1">Finishing</label>
                           <input id="produk" name="finishing" type="text" class="form-control" value="<?php echo $finishing ?>" readonly>
                       </div>
                   </div>
                   <div class="col-lg-3">
                           <label class="control-label mb-1">Harga /pcs</label>
                           <input id="produk" name="hargapcs" type="text" class="form-control" value="<?php echo $hargapcs ?>" readonly>
                   </div>
                </div>
				<div class="row">
                   <div class="col-lg-3">
                       <div class="form-group">
                           <label class="control-label mb-1">Jumlah</label>
                           <input id="produk" name="jumlah" type="text" class="form-control" value="<?php echo $jumlah ?>" readonly>
                       </div>
                   </div>
                   <div class="col-lg-3">
                           <label class="control-label mb-1">Estimasi</label>
                           <input id="produk" name="estimasi" type="text" class="form-control" value="<?php echo $estimasi ?>" readonly>
                   </div>
					<div class="col-lg-3">
                           <label class="control-label mb-1">Harga Total</label>
                           <input id="produk" name="harga" type="text" class="form-control" value="<?php echo $total_harga ?>" readonly>
                   </div>
                </div>
				
				<br/><br/>
											
										
											<div class="row">
                                                <div class="col-lg-3">
                                                    
                                                </div>
												<div class="col-lg-3"></div>
												<div class="col-lg-3"></div>
                                                <div class="col-lg-3">
                                                    <div>

													<a class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#modal_new" role="button" style="color: white">Pesan</a>
														
                                            		</div>
                                                </div>
                                            </div>
					
				
				  </div>
				
           </div>
           </div>
         </div>
	    </div>
		</div>
		  </div>
		  
		  <div class="modal fade bs-example-modal-sm" id="modal_new" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                      <h4>Notifikasi</h4>
					  <button type="button" class="close" data-dismiss="modal">✕</button>
                  </div>
                  
                  <div class="modal-body" style="text-align:center;">
                    <div class="row-fluid">
                     <div class="span10 offset1">
                       <div id="modalTab">
                         <div class="tab-content">
                           <div class="tab-pane active" id="about">

                            <center>
                             <p class="text-left">
                              Apakah anda yakin data sudah benar dan ingin melakukan pemesanan? <br />
                              
                             </p>
                             <br>
								
								<button type="submit" name="pesan" class="btn btn-success">Ya</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                           </center>
						
							   </form> 
                  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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

             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             <script type="text/javascript">
             function cek_database(){
              var model = $("#model").val();
              var kertas = $("#kertas").val();
              var ukuran = $("#ukuran").val();
              var jumlah = $("#jumlah").val();



              $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>pembayaran/harga_produk/'+model+'<?php echo "?kertas="; ?>'+kertas+'<?php echo "&ukuran="; ?>'+ukuran+'<?php echo "&jumlah="; ?>'+jumlah,
                dataType:'JSON'

              }).success(function (data) {
                $('#hargapcs').val(data.harga);
                $('#harga').val(data.harga*jumlah);
              });
            }
            </script>

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