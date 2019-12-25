<?php 

require_once '../init.php';
require_once '../cek_login.php';
$active = 'buku';

if(isset($_POST['simpan'])){
	$judul_buku = $_POST['judul_buku'];
	$isbn = $_POST['isbn'];
	$jumlah_halaman = $_POST['jumlah_halaman'];
	$id_kategori = $_POST['id_kategori'];
	$id_penulis = $_POST['id_penulis'];
	$id_penerbit = $_POST['id_penerbit'];
	
	$query = mysqli_query($koneksi, "INSERT INTO tbl_buku (judul, isbn, jumlah_halaman, id_kategori, id_penulis, id_penerbit) VALUES ('$judul_buku', $isbn, $jumlah_halaman, $id_kategori, $id_penulis, $id_penerbit)");
	if($query == TRUE){
		set_flash_message('sukses', 'Data buku berhasil ditambahkan!');
		header('Location: index.php');
	} else die(mysqli_error($koneksi));
} else header('Location: tambah.php')
?>