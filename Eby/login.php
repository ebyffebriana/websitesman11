<?php 
include 'config/class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Login</h2>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>NIP/NIS</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="Password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="login">Login</button>
						</form>
						<?php
						if (isset($_POST['login'])) 
						{
							$hasil = $admin->login_user($_POST['username'], $_POST['password']);
							if($hasil == 'sukses-guru')
							{
								echo "<script>alert('Login Berhasil'); location='guru/index.php';</script>";
							}
							elseif ($hasil == "sukses-siswa")
							{
								echo "<script>alert('Login Berhasil'); location='siswa/index.php';</script>";
							}
							else
							{
								echo "<script>alert('login gagal')l location='login.php';</script>";
							}
						} 
						 ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>