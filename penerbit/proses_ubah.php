<?php 

if(!isset($_GET['id'])) header('Location: index.php');

require_once '../init.php';
require_once '../cek_login.php';
$active = 'penulis';
$id = $_GET['id'];

if(isset($_POST['simpan'])){
	$nama_penerbit = $_POST['nama_penerbit'];
	$alamat_penerbit = $_POST['alamat_penerbit'];

	$query = mysqli_query($koneksi, "UPDATE tbl_penerbit SET nama = '$nama_penerbit', alamat = '$alamat_penerbit' WHERE id = $id");
	if($query == TRUE){
		set_flash_message('sukses', 'Data penerbit berhasil diubah!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>