<?php 
include 'config/class.php';
$berita_pengumuman = $berita->tampil_berita_pengumuman();
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
</head>
<body>
	<?php 
	include 'nav.php';
	include 'slider.php';
	?>

	<div class="container">
		<hr style="border: 1px solid black">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Judul</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($berita_pengumuman as $key => $value): ?>
					<tr>
					<td><a href="detail_pengumuman.php?id=<?php echo $value['id_berita']?>"><?php echo $value['judul_berita']?></a></td>	
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<?php include'footer.php' ?>
</body>
</html>