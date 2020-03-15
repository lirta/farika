<?php
include "../../coneksi/config.php";


		 	
			
			$acak = rand(00000000, 99999999);
			$namafoto = $_FILES['foto']['name'];
			$nama = $acak.$namafoto;
			$folderawal = $_FILES['foto']['tmp_name'];
			$foldertujuan="../foto/";
			if (!empty($folderawal))
			 {
			move_uploaded_file($folderawal,$foldertujuan.$nama);
			$querii="UPDATE kariawan SET kariawan_nama		='$_POST[nama]',
										kariawan_tmp_lhr	='$_POST[tmp_l]',
										kariawan_tgl_lhr	='$_POST[tgl_l]',
										kariawan_jns_kel	='$_POST[kel]',
										kariawan_agama		='$_POST[agama]',
										kariawan_alamat		='$_POST[alamat]',
										kariawan_hp 		='$_POST[hp]',
										kariawan_foto		='$nama'
										where
										username 			='$_POST[username]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				echo '<script language="javascript">
			              alert ("Edit profile berhasil");
			              window.location="profile.php";
			              </script>';
			              exit();
			    }else
			    {
			    	$querii="UPDATE kariawan SET kariawan_nama		='$_POST[nama]',
												kariawan_tmp_lhr	='$_POST[tmp_l]',
												kariawan_tgl_lhr	='$_POST[tgl_l]',
												kariawan_jns_kel	='$_POST[kel]',
												kariawan_agama		='$_POST[agama]',
												kariawan_alamat		='$_POST[alamat]',
												kariawan_hp 		='$_POST[hp]'
												where
												username 			='$_POST[username]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				echo '<script language="javascript">
			              alert ("Edit profile berhasil");
			              window.location="profile.php";
			              </script>';
			              exit();
			    }




?>