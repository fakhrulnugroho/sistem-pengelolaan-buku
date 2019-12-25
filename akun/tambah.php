<?php 
require_once '../init.php';
require_once '../cek_login.php';
$active = 'akun';
$query_kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
$query_penulis  = mysqli_query($koneksi, "SELECT * FROM tbl_penulis");
$query_penerbit = mysqli_query($koneksi, "SELECT * FROM tbl_penerbit");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo title('Tambah Akun') ?></title>
	<link href="<?php echo base_url('dashboard-template/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('dashboard-template/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('dashboard-template/css/sb-admin.css') ?>" rel="stylesheet">
</head>
<body id="page-top">
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="index.html"><?php echo title() ?></a>
	</nav>

	<div id="wrapper">
	<!-- Sidebar -->
	<?php require_once '../_sidebar.php'; ?>

	<div id="content-wrapper">

		<div class="container-fluid">

		<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo base_url('akun/index.php') ?>">Akun</a>
				</li>
				<li class="breadcrumb-item">
					Tambah Akun
				</li>
			</ol>

		<!-- Page Content -->
		<div class="clearfix">
			<h1 class="float-left">Tambah Akun</h1>
			<a href="<?php echo base_url('akun/index.php') ?>" class="btn btn-sm btn-secondary float-right mt-2"><i class="fas fa-reply"></i> Kembali</a>
		</div>
		<hr>
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
		<form action="<?php echo base_url('akun/proses_tambah.php') ?>" method="POST" class="col-md-6">
			<div class="form-group">
				<label for="nama">Nama Lengkap </label>
				<input type="text" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off" required="required">
			</div>
			<div class="form-group">
				<label for="username">Username </label>
				<input type="text" id="username" class="form-control" placeholder="Masukan Username" name="username" autocomplete="off" required="required">
			</div>
			<div class="form-group">
				<label for="password">Password </label>
				<input type="password" id="password" class="form-control" placeholder="Masukan Password" name="password" autocomplete="off" required="required">
			</div>
			<div class="form-group">
				<label for="password2">Konfirmasi Password </label>
				<input type="password" id="password2" class="form-control" placeholder="Ulangi Password" name="password2" autocomplete="off" required="required">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm" name="simpan"><i class="fas fa-save"></i> Simpan</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
			</div>
		</form>
		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php require_once '../_footer.php'; ?>

	</div>
	<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('dashboard-template/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('dashboard-template/js/sb-admin.min.js') ?>"></script>

</body>

</html>
