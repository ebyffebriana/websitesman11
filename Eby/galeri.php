<?php 
include 'config/class.php';
$data_galeri = $galeri->daftar_galeri();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- css font awesome -->
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<!-- css home.html -->
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<style>
	.row.heading h2 {
		color: #fff;
		font-size: 52.52px;
		line-height: 95px;
		font-weight: 400;
		text-align: center;
		margin: 0 0 40px;
		padding-bottom: 20px;
		text-transform: uppercase;
	}
	ul{
		margin:0;
		padding:0;
		list-style:none;
	}
	.heading.heading-icon {
		display: block;
	}
	.padding-lg {
		display: block;
		padding-top: 60px;
		padding-bottom: 60px;
	}
	.practice-area.padding-lg {
		padding-bottom: 55px;
		padding-top: 55px;
	}
	.practice-area .inner{ 
		border:1px solid #999999; 
		text-align:center; 
		margin-bottom:28px; 
		padding:40px 25px;
	}
	.our-webcoderskull .cnt-block:hover {
		box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
		border: 0;
	}
	.practice-area .inner h3{ 
		color:#3c3c3c; 
		font-size:24px; 
		font-weight:500;
		font-family: 'Poppins', sans-serif;
		padding: 10px 0;
	}
	.practice-area .inner p{ 
		font-size:14px; 
		line-height:22px; 
		font-weight:400;
	}
	.practice-area .inner img{
		display:inline-block;
	}
	.our-webcoderskull .cnt-block{ 
		float:left; 
		width:100%; 
		background:#fff; 
		padding:30px 20px; 
		text-align:center; 
		border:2px solid #d5d5d5;
		margin: 0 0 28px;
	}
	.our-webcoderskull .cnt-block figure{
		width:148px; 
		height:148px; 
		border-radius:100%; 
		display:inline-block;
		margin-bottom: 15px;
	}
	.our-webcoderskull .cnt-block img{ 
		width:148px; 
		height:148px; 
		border-radius:100%; 
	}
	.our-webcoderskull .cnt-block h3{ 
		color:#2a2a2a; 
		font-size:20px; 
		font-weight:500; 
		padding:6px 0;
		text-transform:uppercase;
	}
	.our-webcoderskull .cnt-block h3 a{
		text-decoration:none;
		color:#2a2a2a;
	}
	.our-webcoderskull .cnt-block h3 a:hover{
		color:#337ab7;
	}
	.our-webcoderskull .cnt-block p{ 
		color:#2a2a2a; 
		font-size:13px; 
		line-height:20px; 
		font-weight:400;
	}
	.our-webcoderskull .cnt-block .follow-us{
		margin:20px 0 0;
	}
	.our-webcoderskull .cnt-block .follow-us li{ 
		display:inline-block; 
		width:auto; 
		margin:0 5px;
	}
	.our-webcoderskull .cnt-block .follow-us li .fa{ 
		font-size:24px; 
		color:#767676;
	}
	.our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
		color:#025a8e;
	}

</style>
</head>
<body>
<?php 
	include 'nav.php';
	include 'slider.php';
 ?>

 <section class="our-webcoderskull padding-lg">
 	<div class="container">
 		<ul class="row">
 			<hr style="border: 1px solid black">
 			<?php foreach ($data_galeri as $key => $value): ?>
 				<li class="col-md-6 col-lg-3">
 					<div class="cnt-block equal-hight" style="height: 349px;">
 						<?php if (file_exists("assets/img/galeri/$value[foto_galeri]")):?>
 							<figure><img src="assets/img/galeri/<?php echo $value['foto_galeri']?>" class="img-responsive">				
 							</figure>
 							<?php else: ?>
 							...
 						<?php endif ?>
 						<h3><a href="#" data-toggle="modal" data-target="#<?php echo $value['id_galeri']?>"><?php echo $value['caption']?></a></h3>
 					</div>
 				</li>
 				<?php $detail = $galeri->ambil_data($value['id_galeri'])?>
 				<div class="modal fade" id="<?php echo $value['id_galeri']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 					<div class="modal-dialog" role="document">
 						<div class="modal-content">
 							<div class="modal-header">
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 								<h4 class="modal-title" id="myModalLabel"><?php echo $detail['judul_galeri']?></h4>
 							</div>
 							<div class="modal-body">
 								<?php if (file_exists("assets/img/galeri/$detail[foto_galeri]")):?>
 									<img src="assets/img/galeri/<?php echo $detail['foto_galeri'];?>" width="450px;">								
 								<?php else: ?>
 									<p>Tidak Ada Gambar</p>
 								<?php endif ?>
 								<br><br>
 								<h4><?php echo $detail['caption'];?></h4>
 							</div>
 							<div class="modal-footer">
 								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 							</div>
 						</div>
 					</div>
 				</div> 				
 			<?php endforeach ?>
 		</ul>
 	</div>
 </section>
 <?php include 'footer.php';?>
</body>
</html>

