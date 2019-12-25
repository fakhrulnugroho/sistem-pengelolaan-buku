<?php 

require_once '../init.php';
require_once '../cek_login.php';
$active = 'penulis';

if(isset($_POST['simpan'])){
	$nama_penulis = $_POST['nama_penulis'];
	$alamat_penulis = $_POST['alamat_penulis'];
	$umur_penulis = $_POST['umur_penulis'];

	$query = mysqli_query($koneksi, "INSERT INTO tbl_penulis (nama, alamat, umur) VALUES ('$nama_penulis', '$alamat_penulis', $umur_penulis)");
	if($query == TRUE){
		set_flash_message('sukses', 'Data penulis berhasil ditambahkan!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>