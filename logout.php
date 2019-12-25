<?php 

require_once 'init.php';

unset($_SESSION['auth']);
header('Location: login.php');

?>