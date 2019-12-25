<?php 
require_once '../init.php';
require_once '../cek_login.php';
$active = 'kategori';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo title('Manajemen Kategori') ?></title>
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
				<li class="breadcrumb-item active">
					Kategori
				</li>
			</ol>

		<!-- Page Content -->
		<div class="clearfix">
			<h1 class="float-left">Data Kategori</h1>
			<a href="<?php echo base_url('kategori/tambah.php') ?>" class="btn btn-sm btn-primary float-right mt-2"><i class="fas fa-plus"></i> Tambah Data</a>
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

		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php while($kategori = mysqli_fetch_assoc($query)) : ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $kategori['nama'] ?></td>
						<td>
							<a href="<?php echo base_url('kategori/hapus.php?id=' . $kategori['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<th>Aksi</th>
				</tr>
			</tfoot>
		</table>
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

	<script src="<?php echo base_url('dashboard-template/vendor/datatables/jquery.dataTables.js') ?>"></script>
	<script src="<?php echo base_url('dashboard-template/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('dashboard-template/js/sb-admin.min.js') ?>"></script>

	<script src="<?php echo base_url('dashboard-template/js/demo/datatables-demo.js') ?>"></script>

</body>

</html>
