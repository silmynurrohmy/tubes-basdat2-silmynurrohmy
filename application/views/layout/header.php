<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dashboard</title>

  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/ruang-admin.min.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <i class="fas fa-university"></i>
      </div>

      <div class="sidebar-brand-text mx-3">
        UNIPI
      </div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Menu
    </div>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">
        <i class="fas fa-user-graduate"></i>
        <span>Mahasiswa</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('dosen'); ?>">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Dosen</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('mata_kuliah'); ?>">
        <i class="fas fa-book"></i>
        <span>Mata Kuliah</span>
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?= base_url('kelas'); ?>">
        <i class="fas fa-school"></i>
        <span>Kelas</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('nilai'); ?>">
        <i class="fas fa-star"></i>
        <span>Nilai</span>
    </a>
</li>
  </ul>
  <!-- Sidebar -->

  <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">

        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown">

             <img class="img-profile rounded-circle" 
              src="<?php echo base_url('assets/img/girl.png') ?>" 
              style="max-width: 60px">

              <span class="ml-2 d-none d-lg-inline text-white small">
                <?= $this->session->userdata('nama'); ?>
              </span>

            </a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

              <a class="dropdown-item text-danger" href="<?= base_url('auth/logout'); ?>">

                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                Logout

              </a>

            </div>

          </li>

        </ul>

      </nav>
      <!-- Topbar -->

      <div class="container-fluid">