<?php
	ob_start();
	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['pass_word']);
	//unset($_SESSION[$conf_hash_name]['username']);
	//unset($_SESSION[$conf_hash_name]['password']);
	session_unset();
	session_destroy();
	header('Location: login.php');
	exit;
?>