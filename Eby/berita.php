<?php 
include 'config/class.php';
$data_berita = $berita->tampil_berita();
?>
<pre><?php print_r($data_berita) ?></pre>

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
					<th>Kategori</th>
					<th>Tanggal Upload</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data_berita as $key => $value): ?>
					<tr>
					<td><a href="detail_berita.php?id=<?php echo $value['id_berita']?>"><?php echo $value['judul_berita']?></a></td>
					<td><?php echo $value['nama_kategori']; ?></td>
					<td><?php echo date("d M Y", strtotime($value['tgl_upload']))?></td>	
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<?php include'footer.php' ?>
</body>
</html>