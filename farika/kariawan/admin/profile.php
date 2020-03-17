<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    { header('location:../../pages/login/login.php');}
    else {if ($_SESSION['akses'] == "ADMIN") {
     
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Farika Riau Perkasa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'navbar.php'; include 'sidebar.php'; ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php 
        $queri ="SELECT * FROM Kariawan WHERE username='$_SESSION[username]'";
        $hasil =mysqli_query($koneksi,$queri);
        $kolom=mysqli_fetch_assoc($hasil);
            ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card">
              <div class="card-header p-2">
                <h3 class="profile-username text-center">Profile</h3>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo "../foto/$kolom[kariawan_foto]"; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo "$kolom[kariawan_nama]"; ?></h3>
                <div class="">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>JABATAN <a class="float-right"><?php echo "$kolom[kariawan_jabatan]"; ?></a></b> 
                  </li>
                  <li class="list-group-item">
                    <b>TEMPAT LAHIR <a class="float-right"><?php echo "$kolom[kariawan_tmp_lhr]"; ?></a></b> 
                  </li>
                  <li class="list-group-item">
                    <b>TANGGAL LAHIR <a class="float-right"><?php echo "$kolom[kariawan_tgl_lhr]"; ?></a></b> 
                  </li>
                  <li class="list-group-item">
                    <b>JENIS KELAMIN <a class="float-right"><?php echo "$kolom[kariawan_jns_kel]"; ?></a></b> 
                  </li>
                  <li class="list-group-item">
                    <b>AGAMA <a class="float-right"><?php echo "$kolom[kariawan_agama]"; ?></a></b>
                  </li>
                  <li class="list-group-item">
                    <b>NO HP <a class="float-right"><?php echo "$kolom[kariawan_hp]"; ?></a></b>
                  </li>
                  <li class="list-group-item">
                    <b>ALAMAT <a class="float-right"><?php echo "$kolom[kariawan_alamat]"; ?></a></b> 
                  </li>
                  <li class="list-group-item">
                    <b>USERNAME <a class="float-right"><?php echo "$kolom[username]"; ?></a></b>
                  </li>
                </ul>
                </div>
                <a href="edit_profile.php" class="btn btn-primary "><b>Edit Profile</b></a><br><br>
                <a href="ubah_password.php" class="btn btn-primary "><b>Ubah Password</b></a>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include '../footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
<?php }else{
  echo '<script language="javascript">
              alert ("Anda Tidak Punya Akses");
              window.location="../hrd/index.php";
              </script>';
              exit();
} } ;?>
