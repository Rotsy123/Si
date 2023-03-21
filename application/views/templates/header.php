<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Comptabilite</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/ti-icons/css/themify-icons.css'); ?> ">
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/js/select.dataTables.min.css'); ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/vertical-layout-light/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.png'); ?>" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/all.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url('assets/vendors/adminlte.min.css');?>">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?php echo site_url('assets//logo.svg'); ?>" class="mr-2" alt="Takalo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo site_url('assets/images/logo-mini.svg'); ?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <form action="<?php echo base_url("Service/recherche")?>" method="post">
                <input type="text" class="form-control" id="navbar-search-input" name="num_compte" placeholder="Search numero de compte" aria-label="search" aria-describedby="search">
            </div>
          </li>
          <li>
            <input type="submit" value="research" class="btn btn-outline-secondary btn-fw" />
          </li>
          </form>
        </ul>
        <button type="button" class="btn btn-outline-primary btn-fw"><a href="<?php echo site_url('Service/addcompte'); ?>">Ajouter un compte</a></button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="<?php echo site_url('Service/infoEtnrprise'); ?>" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('Service/infoEntreprise'); ?>">
              <img src="<?php echo site_url('assets/images/faces/face28.jpg'); ?>" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href = "<?php echo site_url('login/logOut')?>">
                <i class="ti-power-off text-primary"></i>
                Logout <?php echo $this->session->userdata('idUser');?>
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>