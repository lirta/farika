<?php
include "../../coneksi/config.php";

$queri ="SELECT * FROM kariawan WHERE username='$_POST[username]'";
                $hasil =mysqli_query($koneksi,$queri);
                $kolom=mysqli_fetch_assoc($hasil);
    if (!empty($kolom)) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="add_kariawan.php";
              </script>';
              exit();
    }
    else {
			$pas  =md5($_POST['password']);
			$acak = rand(00000000, 99999999);

			$namafoto = $_FILES['foto']['name'];
			$nama = $acak.$namafoto;
			$folderawal = $_FILES['foto']['tmp_name'];
			$foldertujuan="../foto/";
			move_uploaded_file($folderawal,$foldertujuan.$nama);

			$querii="INSERT INTO kariawan (kariawan_nama,
											kariawan_tmp_lhr,
											kariawan_tgl_lhr,
											kariawan_jns_kel,
											kariawan_agama,
											kariawan_alamat,
											kariawan_hp,
											kariawan_foto,
											kariawan_jabatan,
											username,
											password) 
											values 
											('$_POST[nama]',
											'$_POST[tmp_l]',
											'$_POST[tgl_l]',
											'$_POST[kel]',
											'$_POST[agama]',
											'$_POST[alamat]',
											'$_POST[hp]',
											'$nama',
											'$_POST[jabatan]',
											'$_POST[username]',
											'$pas')";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				echo '<script language="javascript">
			              alert ("Registrasi Berhasil Di Lakukan!");
			              window.location="view_kariawan.php";
			              </script>';
			              exit();


}




?>