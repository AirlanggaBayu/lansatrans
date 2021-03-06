<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-car-side"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LANSA TRAVEL</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/admin') ?>">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Admin</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/sopir') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Sopir</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/rute') ?>">
          <i class="fas fa-fw fa-arrows-alt-h"></i>
          <span>Rute</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/mobil') ?>">
          <i class="fas fa-fw fa-car"></i>
          <span>Mobil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pemesanan') ?>">
          <i class="fas fa-fw fa-ticket-alt"></i>
          <span>Pemesanan Tiket</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/admin/saran') ?>">
          <i class="fas fa-fw fa-comment-dots"></i>
          <span>Kritik dan Saran</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/admin/logout') ?>">
          <i class="fas fa-fw fa-door-open"></i>
          <span>LOGOUT</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                Admin
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->