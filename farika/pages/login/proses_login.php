<?php
  include "../../coneksi/config.php";
  $username = $_POST['username'];
  $pass     =md5 ($_POST['password']);
  $sql = "SELECT * FROM kariawan WHERE username='$username' AND password='$pass'";
  $result = mysqli_query($koneksi, $sql);
  $ketemu=mysqli_num_rows($result);
  $r=mysqli_fetch_assoc($result);
  if ($ketemu > 0) {
    
    session_start();
    $_SESSION['username']            = $r['username'];
    $_SESSION['password']            = $r['password'];

    header('location:../../admin/index.php');
    mysqli_close($koneksi);
  }
  else {
    header('location:login.php');
  }
?>