<?php 

if(!isset($_GET['id'])) header('Location: index.php');

require_once '../init.php';
require_once '../cek_login.php';
$active = 'buku';
$query_kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
$query_penulis  = mysqli_query($koneksi, "SELECT * FROM tbl_penulis");
$query_penerbit = mysqli_query($koneksi, "SELECT * FROM tbl_penerbit");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT tbl_buku.*, tbl_kategori.nama AS kategori, tbl_penulis.nama AS penulis, tbl_penerbit.nama AS penerbit FROM tbl_buku INNER JOIN tbl_kategori ON tbl_buku.id_kategori = tbl_kategori.id INNER JOIN tbl_penulis ON tbl_buku.id_penulis = tbl_penulis.id INNER JOIN tbl_penerbit ON tbl_buku.id_penerbit = tbl_penerbit.id WHERE tbl_buku.id = $id ");

$buku = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo title('Ubah Data Buku') ?></title>
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
					<a href="<?php echo base_url('buku/index.php') ?>">Buku</a>
				</li>
				<li class="breadcrumb-item">
					Ubah Buku
				</li>
			</ol>

		<!-- Page Content -->
		<div class="clearfix">
			<h1 class="float-left">Ubah Data Buku</h1>
			<a href="<?php echo base_url('buku/index.php') ?>" class="btn btn-sm btn-secondary float-right mt-2"><i class="fas fa-reply"></i> Kembali</a>
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
		<form action="<?php echo base_url('buku/proses_ubah.php?id=' . $buku['id']) ?>" method="POST" class="col-md-6">
			<div class="form-group">
				<label for="judul_buku">Judul Buku</label>
				<input type="text" name="judul_buku" id="judul_buku" value="<?php echo $buku['judul'] ?>" placeholder="Masukan Judul Buku" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				<label for="isbn">ISBN</label>
				<input type="number" name="isbn" id="isbn" value="<?php echo $buku['isbn'] ?>" placeholder="Masukan ISBN" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				<label for="jumlah_halaman">Jumlah Halaman</label>
				<input type="number" name="jumlah_halaman" id="jumlah_halaman" value="<?php echo $buku['jumlah_halaman'] ?>" placeholder="Masukan Jumlah Halaman" autocomplete="off" required="required" class="form-control">
			</div>
			<div class="form-group">
				<label for="id_kategori">Kategori Buku</label>
				<select name="id_kategori" id="id_kategori" class="form-control">
					<?php while($kategori = mysqli_fetch_array($query_kategori)) : ?>
						<option value="<?php echo $kategori['id'] ?>" <?php echo $kategori['id'] == $buku['id_kategori'] ? 'selected' : '' ?>><?php echo $kategori['nama']; ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="id_penulis">Penulis Buku</label>
				<select name="id_penulis" id="id_penulis" class="form-control">
					<?php while($penulis = mysqli_fetch_array($query_penulis)) : ?>
						<option value="<?php echo $penulis['id'] ?>" <?php echo $penulis['id'] == $buku['id_penulis'] ? 'selected' : '' ?>><?php echo $penulis['nama']; ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="id_penerbit">Penerbit Buku</label>
				<select name="id_penerbit" id="id_penerbit" class="form-control">
					<?php while($penerbit = mysqli_fetch_array($query_penerbit)) : ?>
						<option value="<?php echo $penerbit['id'] ?>" <?php echo $penerbit['id'] == $buku['id_penerbit'] ? 'selected' : '' ?>><?php echo $penerbit['nama']; ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="simpan" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Simpan</button>
				<button type="reset" name="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-times"></i> Batal</button>
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
