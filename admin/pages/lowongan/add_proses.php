<?php
include "../../coneksi/config.php";



$date= date("d.M.Y");
$acak = rand(00000000, 99999999);
$id = $_POST['nama'].$acak;

$querii="INSERT INTO lowongan (lowongan_id,
								lowongan_posisi,
								lowongan_tgl_terbit,
								lowongan_tgl_batas) 
								values 
								('$id',
								'$_POST[nama]',
								'$date',
								'$_POST[tgl]')";
	mysqli_query($koneksi,$querii);


$input = $_POST['kel'];
foreach ($input as $output) {
 	$queri="INSERT INTO detail_lowongan (lowongan_id,kualifikasi) values ('$id','$output')";
	mysqli_query($koneksi,$queri);
 }

mysqli_close($koneksi);
header('location:view.php')


?>