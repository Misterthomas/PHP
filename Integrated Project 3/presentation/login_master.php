<?php
class Loginmaster
{
	// Define the template file for the page contents
	public $mContentsCell;
	public $username;

	// Class constructor
	public function __construct()
	{
	}

	// Initialize presentation object
	public function init()
	{
		
		
		require_once BUSINESS_DIR . 'Database.php'; 
		require_once BUSINESS_DIR . 'Post.php';
		//echo $_SESSION['CurrentPage'];
		
		if ($_SESSION['CurrentPage'] === 'Login')
		{
			$this->mContentsCell = 'login.tpl';
			
		}	
       	
		else
		{
			$this->mContentsCell = 'not_implemented.tpl';
		}
	}
}
?>
