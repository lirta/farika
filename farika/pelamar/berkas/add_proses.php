<?php
include "../../coneksi/config.php";




$acak = rand(00000000, 99999999);

	$namafoto = $_FILES['berkas']['name'];
	$namaijazah = $acak.$namafoto;
	$folderawalijazah = $_FILES['berkas']['tmp_name'];
	$foldertujuanijazah="../berkas_foto/";
	move_uploaded_file($folderawalijazah,$foldertujuanijazah.$namaijazah);

	

$queri="INSERT INTO berkas_pendukung (	pelamar,
							 			nama_berkas,
							 			berkas)
VALUES ('$_POST[pelamar]',
		'$_POST[nama]',
		'$namaijazah')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');



?>