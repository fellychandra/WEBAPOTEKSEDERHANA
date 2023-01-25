<?php 
  if ($this->session->userdata("username")) {
?>
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/assets/images/favicon.svg" type="image/x-icon">
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="<?=site_url('welcome/tampilan')?>" class="simple-text logo-mini">
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
          <li>
            <a href="<?=site_url('welcome/tampilan')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/ui.png"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('welcome/kategori')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/kt.png"></i>
              <p>Kategori obat</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('welcome/satuan')?>" >
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/medicine.png"></i>
              <p>Satuan Obat</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('welcome/obat')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/drugs.png"></i>
              <p>Obat</p>
            </a>
          </li>
          <li class="list-group-item-warning">
            <a href="<?=site_url('welcome/transaksi')?>">
              <i><img src="<?php echo base_url()?>assets/templatesadmin/icon/transaction.png"></i>
              <p>Transaksi</p>
            </a>
          </li>
          <li>
            <a href="<?=site_url('welcome/admin')?>">
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
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title col-md-8">Data Transaksi</h4>
                        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Transaksi</button>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                      <section class="section">

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal Transaksi</th>
                                      <th>Nama Obat</th>
                                      <th>Jumlah jual</th>
                                      <!-- <th>Sisa Obat</th> -->
                                      <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $no=1;
                                      foreach ($transaksi as $o){        
                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $o->tanggal_transaksi?></td>
                                            <td><?php echo $o->nama_obat?></td>
                                            <td><?php echo $o->jumlah_jual?></td>
                            

                                            <td>
                                            <?php if($o->username==$this->session->userdata("username")){ ?>
                                                <a href="<?php echo base_url('welcome/formedittransaksi/').$o->id_transaksi?>"><button class="btn btn-primary">Edit</button></a>
                                                <a href="<?php echo base_url('welcome/aksihaputtransaksi/').$o->id_transaksi?>" onclick="return confirm('Yakin Hapus?')" ><button class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php 
                                        }else {
                                          echo "Tidak dapat mengedit";
                                        } 
                                        
                                        
                                      } 
                                    ?>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


              <!-- insert data obat -->
              <div class="modal fade" id="tambah" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Tambah Transaksi</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form method="POST" action="<?php echo base_url('welcome/aksiinserttransaksi')?>">
                                  <input type="hidden" name="update_id" id="update_id">
                                  <input type="hidden" class="form-control" value="<?php echo $this->session->userdata("username"); ?>" name="username">
                                  <div class="form-group">
                                      <input type="date" placeholder="Tanggal" value="<?php echo $tgl=date('Y-m-d');?>" name="tanggal" id="nama_obat" class="form-control" required>
                                  </div>
                                  
                                  <div class="form-group">
                                      <select name="id_obat" id="id_obat" class="form-control" required>
                                          <option value="">Pilih Obat</option>
                                          <?php 
                                          foreach ($obat as $k){ 
                                          ?>
                                          <option value="<?php echo $k->id_obat ?>">
                                              <?php echo $k->nama_obat?>
                                          </option>
                                          <?php
                                          }
                                          ?>
                                      </select>
                                  </div>
                                  
                                  <div class="form-group">
                                      <input class="form-control" id="stok" type="number" name="jumlah" placeholder="Jumlah jual" require>
                                  </div>
                                  <div class="modal-footer">
                                      <button class="btn btn-primary" name="tambah" id="tambah" type="submit" value="tambah">Tambah Transaksi</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
  </div>
<?php 
}else{
  redirect(base_url('login'));
}
?>
 <script src="<?php echo base_url()?>assets/templatesadmin/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/plugins/chartjs.min.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/plugins/bootstrap-notify.js"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/templatesadmin/demo/demo.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url()?>assets/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?php echo base_url()?>assets/assets/js/main.js"></script>
  </body>

</html>


    