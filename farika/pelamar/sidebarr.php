<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo "../berkas_foto/$_SESSION[foto]"; ?>" class="img-circle elevation-2" alt="User Image">
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
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pendidikan/view.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pendidikan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../berkas/view.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Berkas Pendukung
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Lowongan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../lowongan/list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Lowongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../lowongan/list_lamaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Lamaran</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>