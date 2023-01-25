<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/templatesadmin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/templatesadmin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    La Casa de Apotek
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

  <link href="<?php echo base_url()?>assets/templatesadmin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/templatesadmin/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>assets/templatesadmin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="<?=site_url('C_master/tampilan')?>" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url()?>assets/templatesadmin/icon/clinic.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          La Casa de Apotek
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="list-group-item-secondary">
            <a href="<?=site_url('C_master/tampilan')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/ui.png"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('C_master/kategori')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/kt.png"></i>
              <p>Kategori obat</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('C_master/satuan')?>" >
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/medicine.png"></i>
              <p>Satuan Obat</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('C_master/obat')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/drugs.png"></i>
              <p>Obat</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('C_master/transaksi')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/transaction.png"></i>
              <p>Transaksi</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('C_master/admin')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/adminis.png"></i>
              <p>Admin Profile</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('login/logout'); ?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/keluar.png"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">La Casa de Apotek</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <h1>Selamat Datang, <?php echo $this->session->userdata("username")?></h1>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
  </div>

  <script src="<?php echo base_url()?>assets/templatesadmin/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/plugins/chartjs.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/plugins/bootstrap-notify.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/demo/demo.js"></script>
  
  <!-- jqurey untuk edit obat -->

</body>

</html>
