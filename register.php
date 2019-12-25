<?php 
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo title('Login') ?></title>
	<link href="<?php echo base_url('dashboard-template/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('dashboard-template/css/sb-admin.css') ?>" rel="stylesheet">
</head>

<body class="bg-dark">
	<div class="container">
	 <div class="card card-login mx-auto mt-5">
	 <div class="card-header">Register</div>
	 <div class="card-body">
	 	<?php if(check_flash_message('sukses')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?php echo ucfirst($_SESSION['flash_message']['tipe']) ?>!</strong> <?php echo get_flash_message() ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
 		<?php elseif(check_flash_message('gagal')) : ?>
 			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong><?php echo ucfirst($_SESSION['flash_message']['tipe']) ?>!</strong> <?php echo get_flash_message() ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<form action="<?php echo base_url('proses_register.php') ?>" method="POST">
			<div class="form-group">
				Nama 
			    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				Username
			    <input type="text" name="username" placeholder="Username" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				Password
			    <input type="password" name="password" placeholder="Password" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				Konfirmasi Password
			    <input type="password" name="password2" placeholder="Konfirmasi Password" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" name="register" class="btn btn-sm btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Register</button>
			</div>
		</form>
		<div class="text-center">
			<div class="small">
				Already have an account? <a href="login.php">Login</a>!
			</div>
		</div>
	 </div>
	 </div>
	</div>
	<script src="<?php echo base_url('dashboard-template/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

</body>

</html>
