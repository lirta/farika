<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Djaya Hydrolic</title>
    <meta charset="utf-8">
    <meta name="Djaya Hydrolic" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <?php include 'config.php';
          include 'navbar.php'; ?>
  <?php include 'menu.php'; ?>
    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo "admin/foto/$home[slide_a]"; ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Profile</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">Fasilitas</span>
            <h2 class="mb-4">fASILITAS YANG KAMI MILIKI</h2>
           <p>Dalam membantu dan memperlancar kegiatan usaha kami, untuk sekarang ini kami memiliki mesin diantaranya :</p>
        </div>
      </div>  
      <div class="row">
         <?php
                $queria = "SELECT * FROM fasilitas ";
                $hasila = mysqli_query($koneksi,$queria);
                $no=1;
                while($koloma=mysqli_fetch_assoc($hasila))
                { ?>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(<?php echo "admin/fasilitas/$koloma[foto_f]"; ?>);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3><?php echo "$koloma[nama]"; ?></h3>
            </div>
          </div>
        </div>
        <?php $no=$no+1;
                      }
                  ?>
        </div>
      </div>

		<?php include 'whatsapp.php';?>
    <?php include 'footer.php'; ?>


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