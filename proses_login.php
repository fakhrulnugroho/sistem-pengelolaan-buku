<?php 

require 'init.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	// ambil username dan password dari database
	$data = mysqli_query($koneksi, "SELECT username, password FROM tbl_users WHERE username = '$username'");
	// fetch datanya dan ambil password
	$cek_password = mysqli_fetch_assoc($data)['password'];

	// cek apakah username tersedia
	if($data == TRUE){
		// cek apakah password sesuai atau tidak
		if (password_verify($password, $cek_password)) {
			$_SESSION['auth'] = [
				'status' => 'logged_in',
				'username' => $username,
				'password' => $cek_password,
			];
			set_flash_message('sukses', 'Anda berhasil login!');
			header('Location: dashboard.php');
		}
	}
}

?>