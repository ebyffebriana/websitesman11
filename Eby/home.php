<?php 

include 'config/class.php';

$data = $pengaturan->tampil_pengaturan();
 ?>
 <pre><?php print_r($data) ?></pre>
<!DOCTYPE html>
<html>
<head>
	<title>SMAN 11 Purworejo</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- css font awesome -->
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<!-- css home.html -->
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>
	<?php include 'nav.php'; ?>

	<!-- slider area -->
	<?php include'slider.php'; ?>
	<section class="mengapa">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Mengapa SMAN 11 Purworejo?</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fa fa-cirle fa-stack-2x"></i>
					</span>
					<h1><?php echo $data['0']['kolom']; ?></h1>
					<p><?php echo $data['0']['isi']; ?></p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fa fa-cirle fa-stack-2x"></i>
					</span>
					<h1><?php echo $data['1']['kolom'] ?></h1>
					<p><?php echo $data['1']['isi']; ?></p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fa fa-cirle fa-stack-2x"></i>
					</span>
					<h1><?php echo $data['2']['kolom']; ?></h1>
					<p><?php echo $data['2']['isi']; ?></p>
				</div>
				<div class="col-md-3">
					<span class="fa-stack fa-4x">
						<i class="fa fa-cirle fa-stack-2x"></i>
					</span>
					<h1>Lingkungan Nyaman</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Daftar Menu Home-->
	<section class="kotak">
		<div class="container">
			<div class="row">
				<div class="col-md-12" onclick="">
					<h1>Informasi Sekolah</h1>
					<hr>
				</div>	
				<div class="col-md-6">
					 <img src="assets/img/slider/1.jpg" class="img-responsive">
					 <div class="caption">
					 	<h2><a href="berita.php">Berita Sekolah</a></h2>
					 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					 </div>
				</div>
				<div class="col-md-6">
					 <img src="assets/img/slider/1.jpg" class="img-responsive">
					 <div class="caption">
					 	<h2>Repository</h2>
					 	<p>Silahakan <a href="login.php">Login</a> terlebih dahulu</p>
					 </div>
				</div>
				<div class="col-md-6">
					 <img src="assets/img/slider/1.jpg" class="img-responsive">
					 <div class="caption">
					 	<h2><a href="pengumuman.php">Pengumuman</a></h2>
					 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					 </div>
				</div>
				<div class="col-md-6">
					 <img src="assets/img/slider/1.jpg" class="img-responsive">
					 <div class="caption">
					 	<h2><a href="galeri.php">Galeri</a></h2>
					 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					 </div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php include 'footer.php'; ?>
</body>
</html>