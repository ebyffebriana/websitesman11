<?php 
include 'config/class.php'; 
$id_berita = $_GET['id'];
$detail = $berita->ambil_berita($id_berita);
?>
<pre><?php print_r($detail) ?></pre>

<!DOCTYPE html>
<html>
<head>
	<title>SMAN 11 Purworejo</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- css font awesome -->
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<!-- css home.html -->
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<style>
	.content
	{
		border: 1px solid black;
		padding: 10px;
	}
</style>
</head>
<body>
	<?php 
	include 'nav.php';
	include 'slider.php';
	?>

	<div class="container"><br><br>
		<div class="content">
			<small>Tanggal Upload : <?php echo date("d M Y", strtotime($detail['tgl_upload']))?></small>
			<h3 class="text-center"><?php echo $detail['judul_berita'];?></h3> <br><br>
			<div class="col-md-offset-4" style="margin-bottom: 30px">
				<img src="assets/img/berita/<?php echo $detail['foto_berita'];?>" width="450">
			</div>
			<p>
				<?php echo $detail['isi_berita']?>
			</p>
		</div>
	</div>
	<?php include'footer.php';?>
</body>
</html>