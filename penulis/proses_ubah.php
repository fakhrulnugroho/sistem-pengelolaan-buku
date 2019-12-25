<?php 

if(!isset($_GET['id'])) header('Location: index.php');

require_once '../init.php';
require_once '../cek_login.php';
$active = 'penulis';
$id = $_GET['id'];

if(isset($_POST['simpan'])){
	$nama_penulis = $_POST['nama_penulis'];
	$alamat_penulis = $_POST['alamat_penulis'];
	$umur_penulis = $_POST['umur_penulis'];

	$query = mysqli_query($koneksi, "UPDATE tbl_penulis SET nama = '$nama_penulis', alamat = '$alamat_penulis', umur = $umur_penulis WHERE id = $id");
	if($query == TRUE){
		set_flash_message('sukses', 'Data penulis berhasil diubah!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>