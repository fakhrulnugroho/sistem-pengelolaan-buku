<?php 

require_once '../init.php';
require_once '../cek_login.php';
$active = 'penerbit';

if(isset($_POST['simpan'])){
	$nama_penerbit = $_POST['nama_penerbit'];
	$alamat_penerbit = $_POST['alamat_penerbit'];

	$query = mysqli_query($koneksi, "INSERT INTO tbl_penerbit (nama, alamat) VALUES ('$nama_penerbit', '$alamat_penerbit')");
	if($query == TRUE){
		set_flash_message('sukses', 'Data penerbit berhasil ditambahkan!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>