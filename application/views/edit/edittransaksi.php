<?php 
  if ($this->session->userdata("username")) {
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Edit Transaksi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/edit/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-4">
		      
		      	<h3 class="text-center mb-4">Edit Transaksi</h3>
			    <form action="<?php echo base_url('welcome/aksiedittransaksi')?>" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="text" name="id_transaksi" class="form-control rounded-left"  placeholder="id" value="<?php echo $ulang->id_transaksi ?>" disabled>
                          <input type="hidden" name="id_transaksi" value="<?php echo $ulang->id_transaksi ?>">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="date" name="tanggal_transaksi" class="form-control rounded-left" placeholder="Kategori Obat" value="<?php echo $ulang->tanggal_transaksi ?>" required>
	            </div>
				<input type="hidden" class="form-control" value="<?php echo $this->session->userdata("username"); ?>" name="username">
				<div class="form-group">
					<select name="id_obat" id="id_obat" class="form-control" required>
						<option value="<?php echo $ulang->id_obat?>"><?php echo $ulang->id_obat?></option>
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
				
                <div class="form-group d-flex">
	              <input type="text" name="jumlah_jual" class="form-control rounded-left" placeholder="Kategori Obat" value="<?php echo $ulang->jumlah_jual ?>" required>
	            </div>
	            <div class="form-group d-flex">
	            	<button type="submit" class="btn btn-primary rounded submit px-4">Edit</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="<?php echo base_url()?>assets/edit/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/edit/js/popper.js"></script>
  <script src="<?php echo base_url()?>assets/edit/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/edit/js/main.js"></script>

	</body>
	<?php 
}else{
  redirect(base_url('login'));
}
?>
</html>

