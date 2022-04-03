

<?php
ob_start();
session_start();

function check_session(){
	//session_start();
	// Check, if email session is NOT set then this page will jump to login page
	if (!isset($_SESSION['email'])) {
		if(!isset($_SESSION['pass_word']))
		{
			header('Location: login.php');
		}
		}

}

?>