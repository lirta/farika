<?php
include "../coneksi/config.php";

$queri ="SELECT * FROM pelamar WHERE username='$_POST[user]'";
                $hasil =mysqli_query($koneksi,$queri);
                $kolom=mysqli_fetch_assoc($hasil);
    if (!empty($kolom)) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="daftar.php";
              </script>';
              exit();
    }
    else {
			$pas  =md5($_POST['pass']);
			$querii="INSERT INTO pelamar (nama,
											no_hp,
											email,
											username,
											password,
											foto) 
											values 
											('$_POST[nama]',
											'$_POST[hp]',
											'$_POST[email]',
											'$_POST[user]',
											'$pas',
											'default.jpg')";
				mysqli_query($koneksi,$querii);
				echo '<script language="javascript">
			              alert ("Registrasi Berhasil Di Lakukan!");
			              window.location="login.php";
			              </script>';
			              exit();


}

mysqli_close($koneksi);


?>