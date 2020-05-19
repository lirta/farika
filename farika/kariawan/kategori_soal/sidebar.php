<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../foto/<?php echo "$_SESSION[foto]"; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo "$_SESSION[username]"; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <?php if ($_SESSION['akses'] == "ADMIN") {
        ?>
          <li class="nav-item">
            <a href="../admin/profile.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/view_kariawan.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Kariawan</p>
            </a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a href="../hrd/profile.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Profil</p>
            </a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="../data_pelamar/view.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Data Pelamar</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Data Lamaran<i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../data_lamaran/view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Lamaran</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="../lowongan/view.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Master Lowongan</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Master Soal<i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori Soal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../soal/view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Soal</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="../laporan/view.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Laporan</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>