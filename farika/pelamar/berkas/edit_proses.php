<?php
include "../../coneksi/config.php";




$acak = rand(00000000, 99999999);

	$namafoto = $_FILES['berkas']['name'];
	$namaijazah = $acak.$namafoto;
	$folderawalijazah = $_FILES['berkas']['tmp_name'];
	$foldertujuanijazah="../berkas_foto/";


	if (!empty($folderawalijazah)) {

	move_uploaded_file($folderawalijazah,$foldertujuanijazah.$namaijazah);
$queri="UPDATE berkas_pendukung SET  pelamar 		='$_POST[pelamar]',
							 	nama_berkas		='$_POST[nama]',
							 	berkas			='$namaijazah'
							 	where id ='$_POST[id]'";

}else{
	$queri="UPDATE berkas_pendukung SET  pelamar 		='$_POST[pelamar]',
							 	nama_berkas		='$_POST[nama]'
							 	where id ='$_POST[id]'";

}

mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>