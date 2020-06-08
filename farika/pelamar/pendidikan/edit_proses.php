<?php
include "../../coneksi/config.php";




$acak = rand(00000000, 99999999);

	$namafoto = $_FILES['ijazah']['name'];
	$namaijazah = $acak.$namafoto;
	$folderawalijazah = $_FILES['ijazah']['tmp_name'];
	$foldertujuanijazah="../berkas_foto/";

	$namafototn = $_FILES['tn']['name'];
	$namatn = $acak.$namafototn;
	$folderawaltn = $_FILES['tn']['tmp_name'];
	$foldertujuantn="../berkas_foto/";

	$namafotocv = $_FILES['cv']['name'];
	$namacv = $acak.$namafotocv;
	$folderawalcv = $_FILES['cv']['tmp_name'];
	$foldertujuancv="../berkas_foto/";

	if (!empty($folderawaltn) AND !empty($folderawalijazah) AND !empty($folderawalcv)) {

	move_uploaded_file($folderawalijazah,$foldertujuanijazah.$namaijazah);
	move_uploaded_file($folderawaltn,$foldertujuantn.$namatn);
	move_uploaded_file($folderawalcv,$foldertujuancv.$namacv);
	$queri="UPDATE pendidikan SET  pelamar 		='$_POST[pelamar]',
								 	pendidikan		='$_POST[pen]',
								 	jurusan			='$_POST[jur]',
								 	ijazah			='$namaijazah',
								 	cv 				='$namacv',
								 	transkip_nilai	='$namatn'
							 		where id ='$_POST[id]'";
	}elseif (!empty($folderawaltn) AND !empty($folderawalijazah) AND empty($folderawalcv)) {

	move_uploaded_file($folderawalijazah,$foldertujuanijazah.$namaijazah);
	move_uploaded_file($folderawaltn,$foldertujuantn.$namatn);
	$queri="UPDATE pendidikan SET  pelamar 		='$_POST[pelamar]',
								 	pendidikan		='$_POST[pen]',
								 	jurusan			='$_POST[jur]',
								 	ijazah			='$namaijazah',
								 	transkip_nilai	='$namatn'
							 		where id ='$_POST[id]'";


	}elseif (!empty($folderawaltn) AND empty($folderawalijazah) AND empty($folderawalcv)) {
	move_uploaded_file($folderawaltn,$foldertujuantn.$namatn);
	$queri="UPDATE pendidikan SET  pelamar 		='$_POST[pelamar]',
							 	pendidikan		='$_POST[pen]',
							 	jurusan			='$_POST[jur]',
							 	transkip_nilai	='$namatn'
							 	where id ='$_POST[id]'";
	}elseif (empty($folderawaltn) AND !empty($folderawalijazah) AND empty($folderawalcv)) {
	move_uploaded_file($folderawalijazah,$foldertujuanijazah.$namaijazah);
	$queri="UPDATE pendidikan SET  pelamar 		='$_POST[pelamar]',
							 	pendidikan		='$_POST[pen]',
							 	jurusan			='$_POST[jur]',
							 	ijazah	='$namaijazah'
							 	where id ='$_POST[id]'";
	}elseif (empty($folderawaltn) AND empty($folderawalijazah) AND !empty($folderawalcv)) {
	move_uploaded_file($folderawalcv,$foldertujuancv.$namacv);
	$queri="UPDATE pendidikan SET  pelamar 		='$_POST[pelamar]',
								 	pendidikan		='$_POST[pen]',
								 	jurusan			='$_POST[jur]',
								 	cv 				='$namacv'
							 		where id ='$_POST[id]'"; 
	
	}else{
	$queri="UPDATE pendidikan SET  pelamar 		='$_POST[pelamar]',
							 	pendidikan		='$_POST[pen]',
							 	jurusan			='$_POST[jur]'
							 	where id ='$_POST[id]'";

	}

mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');
