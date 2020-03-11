<?php
include "../../coneksi/config.php";




$acak = rand(00000000, 99999999);

	$namafoto = $_FILES['ijazah']['name'];
	$namaijazah = $acak.$namafoto;
	$folderawalijazah = $_FILES['ijazah']['tmp_name'];
	$foldertujuanijazah="../berkas_foto/";
	move_uploaded_file($folderawalijazah,$foldertujuanijazah.$namaijazah);

	$namafototn = $_FILES['tn']['name'];
	$namatn = $acak.$namafototn;
	$folderawaltn = $_FILES['tn']['tmp_name'];
	$foldertujuantn="../berkas_foto/";
	move_uploaded_file($folderawaltn,$foldertujuantn.$namatn);

$queri="INSERT INTO pendidikan (pelamar,
							 pendidikan,
							 jurusan,
							 ijazah,
							 transkip_nilai)
VALUES ('$_POST[pelamar]',
		'$_POST[pen]',
		'$_POST[jur]',
		'$namaijazah',
		'$namatn')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');



?>