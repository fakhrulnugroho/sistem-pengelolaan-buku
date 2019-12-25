<?php 

require_once '../init.php';
require_once '../cek_login.php';
$active = 'penerbit';

if(isset($_POST['simpan'])){
	$nama_kategori = $_POST['nama_kategori'];

	$query = mysqli_query($koneksi, "INSERT INTO tbl_kategori (nama) VALUES ('$nama_kategori')");
	if($query == TRUE){
		set_flash_message('sukses', 'Data kategori berhasil ditambahkan!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>