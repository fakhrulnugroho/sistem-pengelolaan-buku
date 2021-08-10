<?php 

$env_prefix = "PENGELOLAAN_BUKU_";

$db_host = getenv($env_prefix . "DB_HOST");
$db_user = getenv($env_prefix . "DB_USER");
$db_pass = getenv($env_prefix . "DB_PASS");
$db_name = getenv($env_prefix . "DB_NAME");

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Gagal konek!");

?>