<?php
include "../coneksi/config.php";


			
			
			$acak = rand(00000000, 99999999);
			$namafoto = $_FILES['foto']['name'];
			$nama = $acak.$namafoto;
			$folderawal = $_FILES['foto']['tmp_name'];
			$foldertujuan="berkas_foto/";
			if (!empty($folderawal))
			 {
			move_uploaded_file($folderawal,$foldertujuan.$nama);
			$querii="UPDATE pelamar SET nama		='$_POST[nama]',
										tmp_lhr		='$_POST[tmp_l]',
										tgl_lhr		='$_POST[tgl_l]',
										jns_kel		='$_POST[kel]',
										agama		='$_POST[agama]',
										alamat		='$_POST[alamat]',
										no_hp 		='$_POST[hp]',
										email 		='$_POST[email]',
										foto		='$nama'
										where
										username 			='$_POST[username]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				echo '<script language="javascript">
			              alert ("Edit profile berhasil");
			              window.location="index.php";
			              </script>';
			              exit();
			    }else
			    {
			    	$querii="UPDATE pelamar SET nama		='$_POST[nama]',
												tmp_lhr		='$_POST[tmp_l]',
												tgl_lhr		='$_POST[tgl_l]',
												jns_kel		='$_POST[kel]',
												agama		='$_POST[agama]',
												alamat		='$_POST[alamat]',
												no_hp 		='$_POST[hp]',
												email 		='$_POST[email]'
												where
												username 			='$_POST[username]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				echo '<script language="javascript">
			              alert ("Edit profile berhasil");
			              window.location="index.php";
			              </script>';
			              exit();
			    }




?>