<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Djaya Hydrolic</title>
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
    <?php include 'config.php';
          include 'navbar.php'; ?>
	<?php include 'menu.php'; ?>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo "admin/foto/$home[slide_a]"; ?>);" data-stellar-background-ratio="0.5">
      </div>

      <div class="slider-item" style="background-image:url(<?php echo "admin/foto/$home[slide_b]"; ?>);" data-stellar-background-ratio="0.5">
    </section>


    <section class="ftco-section ftco-no-pt ftco-margin-top">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
    			<div class="col-md-8 text-center wrap-about py-5 ftco-animate">
        		<div class="heading-section mb-5">
              <span class="subheading">Profile</span>
	            <h2 class="mb-4"><?php echo "$home[nama_perusahaan]"; ?></h2>
    	        </div>
            		<div class="">
                 <?php $querif = "SELECT * FROM profile";
                  $hasilf = mysqli_query($koneksi,$querif);
                  $profile=mysqli_fetch_assoc($hasilf);  ?> 
    					<p class="mb-5"><?php echo "$profile[profile]"; ?></p>
    							
    					</div>
				  </div>
    		</div>
    	</div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-margin-top">
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
		</section>

		<section class="ftco-section ">
			<div class="container-fluid p-0">
				<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-6 text-center heading-section ftco-animate">
          	<span class="subheading">Projects</span>
            <h2 class="mb-4">Projects Yang pernah kami Kerjakan</h2>
          </div>
              <div class="row no-gutters">
               <?php
      	          $queriee = "SELECT * FROM projec ";
      	          $hasilee = mysqli_query($koneksi,$queriee);
      	          $no=1;
      	          while($kolomee=mysqli_fetch_assoc($hasilee))
      	          { ?>
          		
          			<div class="col-md-6 col-lg-3 ftco-animate">
          				<div class="project">
      	    				<img src="<?php echo "admin/project/$kolomee[foto_p]"; ?>" class="img-fluid" alt="Colorlib Template">
      	    				<div class="text">
      	    					<h3><a href="project.html"><?php echo "$kolomee[nama]"; ?></a></h3>
      	    				</div>
      	    				<a href="<?php echo "admin/project/$kolomee[foto_p]"; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
      	    					<span class="icon-expand"></span>
      	    				</a>
          				</div>
          			</div>
          			<?php $no=$no+1;
                            }
                        ?>
    			
    		      </div>
    	   </div>
       </div>
		</section>

		
		<?php include 'whatsapp.php';?>
		<?php include 'footer.php'; ?>
    
  

  <!-- loader -->
  


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