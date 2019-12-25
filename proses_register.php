<?php 

require 'init.php';

if(isset($_POST['register'])){
	$nama_lengkap = $_POST['nama_lengkap'];
	$username     = $_POST['username'];
	$password     = $_POST['password'];
	$password2    = $_POST['password2'];

	$cek_username = mysqli_query($koneksi, "SELECT username FROM tbl_users WHERE username = '$username'");
	if($cek_username->num_rows > 0){
		set_flash_message('gagal', 'Username sudah tersedia!');
		header('Location: register.php');
	} else {
		if($password == $password2){
			$password = password_hash($password, PASSWORD_DEFAULT);
			$query = mysqli_query($koneksi, "INSERT INTO tbl_users (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$password')");
			if($query == TRUE) {
				set_flash_message('sukses', 'Register berhasil! Silahkan Login!');
				header('Location: login.php');
			} else {
				set_flash_message('gagal', 'Register Gagal!');
				header('Location: register.php');
			}
		} else {
			set_flash_message('gagal', 'Password tidak sama!');
			header('Location: register.php');
		}
	}

} else header('Location: register.php');

?>