<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT. FARIKA RIAU PERKASA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="bg-top navbar-light">
      <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
          <div class="col-md-4 d-flex align-items-center py-4">
            <a class="navbar-brand" href="index.html"><span class="flaticon-bee mr-1"></span>PT. FARIKA RIAU PERKASA</a>
          </div>
          <div class="col-lg-8 d-block">
            <div class="row d-flex">
              <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <div class="text d-flex align-items-center">
                  <span>customer@farikariau.com</span>
                </div>
              </div>
              <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <div class="text d-flex align-items-center">
                  <span>(0761) 571655, 08127589884, 081276505571</span>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item "><a href="index.php" class="nav-link pl-0">Branda</a></li>
            <li class="nav-item "><a href="Profile.php" class="nav-link">Tentang Kami</a></li>
            <li class="nav-item "><a href="project.php" class="nav-link">Fortofolio</a></li>
            <li class="nav-item active"><a href="lowongan.php" class="nav-link">Lowongan Pekerjaan</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Soal<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../soal/view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Soal</p>
                </a>
                <li class="nav-item">
                <a href="../kategori_soal/view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Soal</p>
                </a>
              </li>
              </li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">LOWONGAN</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">BRANDA <i class="ion-ios-arrow-forward"></i></a></span> <span>LOWONGAN<i class="ion-ios-arrow-forward"></i></span></p>
          </div> 
        </div>
      </div>
    </section>

    <section class="ftco-section ">
      <div class="container">
        <div class="row col-md-12">
          <div class="col-md-10">
            <?php 
                $queri ="SELECT * FROM lowongan ";
                $hasil =mysqli_query($koneksi,$queri);
                $no = 1;
                while ($low=mysqli_fetch_assoc($hasil)) { ?>

                
                      <div class="col-md-8 ftco-animate">
                        <div class="blog-entry">
                          <div class="text pt-4">
                            <h3 class="heading"><a href="#">Lowongan Bagian :<?php echo " $low[lowongan_posisi]"; ?></a></h3>
                            <h4 class="heading"><a href="#">Kualifikasi </a></h4>
                            <ul>
                             <?php 
                            $querii ="SELECT * FROM detail_lowongan where lowongan_id='$low[lowongan_id]' ";
                            $hasill =mysqli_query($koneksi,$querii);
                            while ($loww=mysqli_fetch_assoc($hasill)) {
                             echo " <li>$loww[kualifikasi]</li> ";
                           }

                              ?>
                              </ul>
                              <h4 class="heading">Lamaran Palinglama Tanggal <?php echo "$low[lowongan_tgl_batas]";  ?></h4>
                              <div class="d-flex align-items-center mt-4">
                              <p class="mb-0"><a href="#" class="btn btn-primary">Lamar<span class="ion-ios-arrow-round-forward"></span></a></p>
                              <p class="mb-0"><a href="#" class="btn btn-primary">Lamar<span class="ion-ios-arrow-round-forward"></span></a></p>
                            </div>
                            </div>
                          </div>
                        </div>
          

                      <?php
          
                        $no=$no+1;

                 } mysqli_close($koneksi);
                 ?>
              </div>
                 <div class="col-lg-2 sidebar ftco-animate">
            <div class="sidebar-box">
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Category</h3>
              <ul class="categories">
                <li><a href="#">Construction <span>(6)</span></a></li>
              </ul>
            </div>
          
         </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">KANTOR</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Alamat       : PT. FARIKA RIAU PERKASA</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Email Kantor : farikariauperkasa@ymail.com, customer@farikariau.com</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Telpon Kantor: 08127589884, 081276505571</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. Farika Riau Perkasa </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>