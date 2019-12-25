<?php 

if(!isset($_GET['id'])) header('Location: index.php');

require_once '../init.php';
require_once '../cek_login.php';
$active = 'buku';
$id = $_GET['id'];

if(isset($_POST['simpan'])){
	$judul_buku = $_POST['judul_buku'];
	$isbn = $_POST['isbn'];
	$jumlah_halaman = $_POST['jumlah_halaman'];
	$id_kategori = $_POST['id_kategori'];
	$id_penulis = $_POST['id_penulis'];
	$id_penerbit = $_POST['id_penerbit'];

	$query = mysqli_query($koneksi, "UPDATE tbl_buku SET judul = '$judul_buku', isbn = $isbn, jumlah_halaman = $jumlah_halaman, id_kategori = $id_kategori, id_penulis = $id_penulis, id_penerbit = $id_penerbit WHERE id = $id");
	if($query == TRUE){
		set_flash_message('sukses', 'Data buku berhasil diubah!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>