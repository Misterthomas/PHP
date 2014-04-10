<?php
session_start();
	// Include utility files
	require_once 'include/config.php';
	
	// Load the application page template
	require_once PRESENTATION_DIR . 'application.php';

	//Load Smarty template file
	$application = new Application();
	
	$id = $_GET['id'];

	$_SESSION['CurrentPage'] = 'Post_Deatils';
    $_SESSION['PostId'] = $id;
	$application->display('master.tpl');
    
?>