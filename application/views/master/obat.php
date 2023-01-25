<?php
  if ($this->session->userdata("username")  && $this->session->userdata("level")=='master') {
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
          <li>
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
          <li class="list-group-item-danger">
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
            <a class="navbar-brand" href="javascript:;">La Casa de Apotekhandra</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title col-md-8">Data Obat</h4>
                        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Obat</button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        
                        <section class="section">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Kategori Obat</th>
                                    <th>Satuan Obat</th>
                                    <th>Stok</th>
                                    <th>Sisa</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                <?php 
                                    $no=1;
                                      foreach ($obat as $o){        
                                    ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $o->nama_obat?></td>
                                            <td><?php echo $o->kategori_obat?></td>
                                            <td><?php echo $o->satuan_obat?></td>
                                            <td><?php echo $o->stok_obat?></td>
                                            <td><?php echo $o->sisa;?>
                                        
                                            <td>

                                                <a href="<?php echo base_url('C_master/formeditobat/').$o->id_obat?>"><button class="btn btn-primary">Edit</button></a>
                                                <a href="<?php echo base_url('C_master/aksihapusobat/').$o->id_obat?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php  
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
                                        <h5 class="modal-title">Tambah Obat</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="<?php echo base_url('C_master/aksiinsertobat')?>">
                                            <input type="hidden" name="update_id" id="update_id">
                                            <div class="form-group">
                                                <input type="text" placeholder="Nama Obat" name="nama_obat" id="nama_obat" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <select name="id_kategori" id="id_kategori" class="form-control" required>
                                                    <option value="">Pilih Kategori</option>
                                                    <?php 
                                                    foreach ($kategori as $k){ 
                                                    ?>
                                                    <option value="<?php echo $k->id_kategori ?>">
                                                        <?php echo $k->kategori_obat?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="id_satuan" id="id_satuan" class="form-control" required>
                                                    <option value="">Pilih Satuan</option>
                                                    <?php 
                                                        foreach ($satuan as $s){ 
                                                    ?>
                                                    <option value="<?php echo $s->id_satuan ?>">
                                                        <?php echo $s->satuan_obat ?>
                                                    </option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="stok" type="number" name="stok" placeholder="Stok Obat" require>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" name="tambah" id="tambah" type="submit" value="tambah">Tambah Obat</button>
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
</body>
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
  <!-- jqurey untuk edit obat -->
  <script>
    $(document).ready(function() {
      demo.initChartsPages();
    });

    $(document).on("click", "#edit_obat", function(){
        var idobat = $(this).data('id');
        var namaobat = $(this).data('nama');
        var idkategori = $(this).data('kategori');
        var idsatuan = $(this).data('satuan');
        var stok = $(this).data('stok');
        $("#modal-edit #id_obat").val(idobat);
        $("#modal-edit #nama_obat").val(namaobat);
        $("#modal-edit #id_kategori").val(idkategori);
        $("#modal-edit #id_satuan").val(idsatuan);
        $("#modal-edit #stok").val(stok);
    });
    $(document).ready(function(e) {
        $("#form").on("submit", (function (e) {
            e.preventDefault();
            $.ajax({
              url : '../controller/prosesdata.php?aksi=update',
              type : 'POST',
              data : new FormData(this),
              contentType : false,
              cache : false,
              processData : false,
              success : function (msg) {
                  $('.table').html(msg);
              }
            });
        }));
    })
    

//   <!-- jquery untuk edit kategori -->

    $(document).on("click", "#kategori", function(){
        var kategoriid = $(this).data('idkategori');
        var kategoriobat = $(this).data('namakategori');
        $("#modal-kategori #id_kategori").val(kategoriid);
        $("#modal-kategori #kategori_obat").val(kategoriobat);
    });
    $(document).ready(function(e) {
        $("#form_kategori").on("submit", (function (e) {
            e.preventDefault();
            $.ajax({
              url : '../controller/prosesdata.php?aksi=update_kategori',
              type : 'POST',
              data : new FormData(this),
              contentType : false,
              cache : false,
              processData : false,
              success : function (msg) {
                  $('.table').html(msg);
              }
            });
        }));
    })

    //   <!-- jquery untuk edit satuan -->

    $(document).on("click", "#satuan", function(){
        var satuanid = $(this).data('idsatuan');
        var satuanobat = $(this).data('namasatuan');
        $("#modal-satuan #id_satuan").val(satuanid);
        $("#modal-satuan #satuan_obat").val(satuanobat);
    });
    $(document).ready(function(e) {
        $("#formsatuan").on("submit", (function (e) {
            e.preventDefault();
            $.ajax({
              url : '../controller/prosesdata.php?aksi=update_satuan',
              type : 'POST',
              data : new FormData(this),
              contentType : false,
              cache : false,
              processData : false,
              success : function (msg) {
                  $('.table').html(msg);
              }
            });
        }));
    })

    //   <!-- jquery untuk edit transaksi -->

    $(document).on("click", "#transaksi", function(){
        var transaksiid = $(this).data('idtransaksi');
        var tanggaltransaksi = $(this).data('tanggal'); 
        var idobatransaksi = $(this).data('idobattransaksi');
        var jumlahtransaksi = $(this).data('jumlah');
        $("#modal-transaksi #id_transaksi").val(transaksiid);
        $("#modal-transaksi #tanggal_transaksi").val(tanggaltransaksi);
        $("#modal-transaksi #id_obat").val(idobatransaksi);
        $("#modal-transaksi #jumlah_jual").val(jumlahtransaksi);
    });
    $(document).ready(function(e) {
        $("#id_transaksi").on("submit", (function (e) {
            e.preventDefault();
            $.ajax({
              url : '../controller/prosesdata.php?aksi=update_transaksi',
              type : 'POST',
              data : new FormData(this),
              contentType : false,
              cache : false,
              processData : false,
              success : function (msg) {
                  $('.table').html(msg);
              }
            });
        }));
    })


    //   <!-- jquery untuk edit admin -->

    $(document).on("click", "#admin", function(){
        var idadmin = $(this).data('idadmin');
        var namaadmin = $(this).data('namaadmin'); 
        var useradmin = $(this).data('useradmin');
        var emailadmin = $(this).data('emailadmin');
        var passadmin = $(this).data('passadmin');
        $("#modal-admin #id_admin").val(idadmin);
        $("#modal-admin #nama").val(namaadmin);
        $("#modal-admin #username").val(useradmin);
        $("#modal-admin #email").val(emailadmin);
        $("#modal-admin #password").val(passadmin);
    });
    $(document).ready(function(e) {
        $("#form_admin").on("submit", (function (e) {
            e.preventDefault();
            $.ajax({
              url : '../controller/prosesdata.php?aksi=update_admin',
              type : 'POST',
              data : new FormData(this),
              contentType : false,
              cache : false,
              processData : false,
              success : function (msg) {
                  $('.table').html(msg);
              }
            });
        }));
    })
  </script>
</body>

</html>


    