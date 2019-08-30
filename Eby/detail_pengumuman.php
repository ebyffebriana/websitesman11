<?php 
$id = $_GET['id'];
$detail = $berita->ambil_berita($id);
?>
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
			<p>
				<?php echo $detail['isi_berita']?>
			</p>
		</div>
	</div>
	<?php include'footer.php';?>
</body>
</html>
