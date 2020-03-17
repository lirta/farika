<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    { header('location:../../pages/login/login.php');}
    else {
     
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
  <!-- Content Wrapper. Contains page content --><?php 
        $queri ="SELECT * FROM pelamar WHERE username='$_GET[id]'";
        $hasil =mysqli_query($koneksi,$queri);
        $kolom=mysqli_fetch_assoc($hasil);
            ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile <?php echo "$kolom[nama]"; ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo "../../pelamar/berkas_foto/$kolom[foto]"; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo "$kolom[nama]"; ?></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Tempat Lahir </b><a class="float-right"><?php echo "$kolom[tmp_lhr]"; ?></a> 
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir </b><a class="float-right"><?php echo "$kolom[tgl_lhr]"; ?></a> 
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin </b> <a class="float-right"><?php echo "$kolom[jns_kel]"; ?></a> 
                  </li>
                  <li class="list-group-item">
                    <b>Agama </b><?php echo "$kolom[agama]"; ?> 
                  </li>
                  <li class="list-group-item">
                    <b>No Hp</b> <a class="float-right"><?php echo "$kolom[no_hp]"; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email </b> <a class="float-right"><?php echo "$kolom[email]"; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat </b> <a class="float-right"><?php echo "$kolom[alamat]"; ?></a>
                  </li>
                </ul>
              </div>
            </div>
              <?php 
              $querip ="SELECT * FROM pendidikan WHERE pelamar='$_GET[id]'";
              $hasilp =mysqli_query($koneksi,$querip);
              $kolomp=mysqli_fetch_assoc($hasilp);
                  ?>
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PENDIDIKAN TERAKHIR</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong> Pendidikan</strong>

                <p >
                  <?php echo "$kolomp[pendidikan]"; ?>
                </p>

                <hr>

                <strong></i> Jurusan</strong>

                <p ><?php echo "$kolomp[jurusan]"; ?></p>

                <hr> 
              </div>
              <!-- /.card-body -->
            </div>

            </div>
            <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">CV</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">IJAZAH</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">BERKAS PENDUKUNG</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="post">
                      <!-- /.user-block -->
                      <div class="row mb-12">
                        <label>CV</label> <br>
                        <div class="col-sm-6">
                          <img class="img-fluid" src="<?php echo "../../pelamar/berkas_foto/$kolomp[cv]"; ?>" alt="Photo">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                   <div class="post">
                      <!-- /.user-block -->
                      <div class="row mb-12">
                        <div class="col-sm-12">
                          <label>Ijazah</label><br>
                          <img class="img-fluid" src="<?php echo "../../pelamar/berkas_foto/$kolomp[ijazah]"; ?>" alt="Photo">
                        </div>

                        <div class="col-sm-12">
                          <label>Transkip Nilai</label><br>
                          <img class="img-fluid" src="<?php echo "../../pelamar/berkas_foto/$kolomp[transkip_nilai]"; ?>" alt="Photo">
                        </div>
                      </div>
                    </div> 
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <div class="post">
                      
                      <div class="row mb-12">

                        <?php 
                        $querib ="SELECT * FROM berkas_pendukung WHERE pelamar='$_GET[id]'";
                        $hasilb =mysqli_query($koneksi,$querib);
                        $no = 1;
                        while ($kolomb=mysqli_fetch_assoc($hasilb)) {
                          ?>
                        <div class="col-sm-12">
                          <label><?php echo "$kolomb[nama_berkas]"; ?></label>
                          <img class="img-fluid" src="<?php echo "../../pelamar/berkas_foto/$kolomb[berkas]"; ?>" alt="Photo">
                        </div>
                        <?php $no=$no+1;
                 } 
                 ?>
                      </div>
                    </div> 
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>

          </div>
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
<?php } ;?>
