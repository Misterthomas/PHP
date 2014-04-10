<?php
	session_start();
	// Include utility files
	require_once 'include/config.php';

	// Load the application page template
	require_once PRESENTATION_DIR . 'application.php';

	//Load Smarty template file
	$application = new Application();
	
	$_SESSION['CurrentPage'] = 'Media';
	
	$application->display('master.tpl');
?>