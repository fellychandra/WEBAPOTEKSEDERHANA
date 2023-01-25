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
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="https://img.icons8.com/officel/50/000000/sell-stock.png"/>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Jumlah Obat Terjual</p>
                      <p class="card-title"><?php foreach ($sum as $s) { echo $s; }?> Obat</td><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Tanggal : <span id="tanggalwaktu"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="https://img.icons8.com/color/55/000000/split-transaction.png"/>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Jumlah Transaksi</p>
                      <p class="card-title"><?php foreach ($terlaris as $s) { echo $s; }
                        // echo $terlaris->nama_obat;
                      ?> Transaksi<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  Tanggal : <span id="tanggalwaktuhari"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="https://img.icons8.com/doodle/55/000000/pills.png"/>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Obat Yang Tersedia</p>
                      <p class="card-title"><?php foreach ($obatsaatini as $s) { echo $s; }?> Obat<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                    <a href="<?= base_url('c_master/obat')?>">Update now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Penjualan</h5>
                <p class="card-category">Tahun <?php $tgl=date('Y'); 
                                                echo $tgl;?>
                </p>
              </div>
              <div class="card-body ">
                <?php foreach ($grafik as $k) {
                  $bulan[]=$k->namabulan;
                }
                foreach ($nilai as $e =>$value) {
                 
                  $jumlahjual[]=$value->jumlahjual;
                }
                ?>
                
                <canvas id="myChart"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i>
                  <a href="<?= base_url('c_master/transaksi')?>">Lihat Transaksi</a> 
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
  
  <!-- jqurey untuk edit obat -->
<script>
  $(document).ready(function() {
    demo.initChartsPages();
  });

  var tw = new Date();
  if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
  else (a=tw.getTime());
  tw.setTime(a);
  var tahun= tw.getFullYear ();
  var hari= tw.getDay ();
  var bulan= tw.getMonth ();
  var tanggal= tw.getDate ();
  var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
  var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
  document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;

  var tw = new Date();
  if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
  else (a=tw.getTime());
  tw.setTime(a);
  var tahun= tw.getFullYear ();
  var hari= tw.getDay ();
  var bulan= tw.getMonth ();
  var tanggal= tw.getDate ();
  var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
  var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
  document.getElementById("tanggalwaktuhari").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;

  
</script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
 //chart akan ditampilkan sebagai bar chart
    type: 'bar',
    data: {
     //membuat label chart
        labels: <?php echo json_encode($bulan);?>,
        datasets: [{
            label: ': Banyak Obat Terjual ',
            //isi chart
            data: <?php echo json_encode($jumlahjual);?>,
            //membuat warna pada bar chart
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</body>

</html>


