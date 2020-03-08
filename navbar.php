<?php 
include 'config.php';
$queri = "SELECT * FROM hme";
$hasil = mysqli_query($koneksi,$queri);
$home=mysqli_fetch_assoc($hasil);  

$querii = "SELECT * FROM contak";
$hasili = mysqli_query($koneksi,$querii);
$kolomi=mysqli_fetch_assoc($hasili);  ?>      

<div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.php"><?php echo "$home[nama_perusahaan]"; ?></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text d-flex align-items-center">
						    	<span><a href="mailto:<?php echo "$kolomi[email]"; ?>" data-toggle="tooltip" ><?php echo "$kolomi[email]"; ?></a></span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text d-flex align-items-center">
						    	<span><a href="tel:<?php echo "$kolomi[hp]"; ?>"><?php echo "$kolomi[hp]"; ?></a></span>
						    </div>
					    </div>
					</div>
			    </div>
		    </div>
		  </div>
    </div>