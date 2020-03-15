<?php
include "../../coneksi/config.php";

			$queri ="SELECT * FROM lamaran where id=$_GET[id]";
            $hasil =mysqli_query($koneksi,$queri);
            $kolom=mysqli_fetch_assoc($hasil);

		 	$tgl= date("y-m-d");
		 	$tgl2 = date("y-m-d", strtotime("+20 days", strtotime($tgl)));
		 	$tglb=date("d/m/Y", strtotime($tgl2));
		 	

		 	$querii="UPDATE lamaran SET status		='TOLAK'
										where
										id 			='$_GET[id]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);

				header("location:lamaran_masuk_hrd.php?id=$kolom[lowongan]");


?>