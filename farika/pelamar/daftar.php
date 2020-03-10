 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Rafika Riau Perkasa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Pendaftaran</b> Pelamar</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Isikan Data Sesuai Instruksi</p>

      <form action="daftar_proses.php" method="post">
        <div class="form-group">
          <label >Nama lengkap</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label >No Hp</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="hp" placeholder="No Hp">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label >Email</label>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label >Usernama</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="user" placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label >Password</label>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="pass" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>Sudah Terdaftar</p>
        <a href="login.php" class="btn btn-block btn-danger">
          Login
        </a>
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
