<?php
  include "../coneksi/config.php";
  $username = $_POST['username'];
  $pass     =md5 ($_POST['password']);
  $sql = "SELECT * FROM pelamar WHERE username='$username' AND password='$pass'";
  $result = mysqli_query($koneksi, $sql);
  $ketemu=mysqli_num_rows($result);
  $r=mysqli_fetch_assoc($result);
  if (!empty($ketemu)) {
    
    session_start();
    $_SESSION['username']            = $r['username'];
    $_SESSION['password']            = $r['password'];
    $_SESSION['nama']                = $r['nama'];
    $_SESSION['hp']                  = $r['no_hp'];
    $_SESSION['email']               = $r['email'];
    $_SESSION['foto']                = $r['foto'];

    header('location:index.php');
    mysqli_close($koneksi);
  }
  else {
    echo '<script language="javascript">
              alert ("Username dan Password SALAH.!!!");
              window.location="login.php";
              </script>';
              exit();
  }
?>