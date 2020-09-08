<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="<?php echo base_url().'assets/images/Kabupaten_Sukabumi.png'?>" type="image/png">
    <title>Dashboard - Aplikasi DPESDM</title>
    <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">
  </head>
  <body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url().'admin'?>">DPESDM</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">Settings</a>
      <a class="dropdown-item" href="<?php echo base_url().'admin/ganti_password' ?>">Ganti Password</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo base_url().'Login'?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>

</nav>

<div id="wrapper">
  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url().'admin'?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-scroll"></i>
        <span>Halaman</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">IKM</h6>
        <a class="dropdown-item" href="<?php echo base_url().'admin/ikm'; ?>">Data IKM</a>
        <a class="dropdown-item" href="<?php echo base_url().'admin/nilai_ikm'; ?>">Nilai IKM</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Laporan IKM</h6>
        <a class="dropdown-item" href="<?php echo base_url().'admin/cetak_laporan_ikm' ?>">Laporan Data</a>
        <a class="dropdown-item" href="<?php echo base_url().'admin/cetak_nilai_ikm' ?>">Laporan Nilai</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Data</h6>
        <a class="dropdown-item" href="<?php echo base_url().'admin/periode' ?>">Periode Data</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'admin/chart' ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>
  </ul>
    <div id="content-wrapper">
      <div class="container-fluid">


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Pilih "Logout" Jika Ingin Keluar Program.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url().'admin/logout'?>">Logout</a>
              </div>
            </div>
          </div>
        </div>
