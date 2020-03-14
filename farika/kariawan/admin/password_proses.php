<?php
include "../../coneksi/config.php";

$passlama  =md5($_POST['passlama']);
$passbaru  =md5($_POST['passbaru']);
$username 	=$_POST['username'];
$sql = "SELECT * FROM kariawan WHERE username='$username' AND password='$passlama'";
  $result = mysqli_query($koneksi, $sql);
  $ketemu=mysqli_num_rows($result);
    if ($ketemu > 0) {
    	if ($_POST['passbaru'] == 0) {
    		echo '<script language="javascript">
              alert ("Silahkan Isi Password Baru Anda");
              window.location="ubah_password.php";
              </script>';
    	}else{
    		if ($passlama == $passbaru) {
				echo '<script language="javascript">
              alert ("Password Baru Anda Sama Dengan Password Lama Anda");
              window.location="ubah_password.php";
              </script>';
              exit();
			}else{
				$querii="UPDATE kariawan set password =	'$passbaru' where username ='$_POST[username]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				echo '<script language="javascript">
			              alert ("Password Berhasil Di Ubah");
			              window.location="profile.php";
			              </script>';
			              exit();
			}
    	}
        
    }
    else {
		echo '<script language="javascript">
              alert ("Password Lama Anda Salah");
              window.location="ubah_password.php";
              </script>';
              exit();
	}




?>