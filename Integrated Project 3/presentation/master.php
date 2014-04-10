<?php
class Master
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
		
		
		if ($_SESSION['CurrentPage'] == 'Home')
		{
			$this->mContentsCell = 'post_list.tpl';
			$this->username = $_SESSION['Username'];
		}	
       elseif ($_SESSION['CurrentPage'] == 'Post_Deatils')
		{
			$this->username = $_SESSION['Username'];
			$this->mContentsCell = 'post_deatils.tpl';
		}	
		 elseif ($_SESSION['CurrentPage'] == 'Media')
		{
			$this->username = $_SESSION['Username'];
			$this->mContentsCell = 'media.tpl';
		}	
		
		elseif ($_SESSION['CurrentPage'] == 'Search')
		{
			$this->username = $_SESSION['Username'];
			$this->mContentsCell = 'search.tpl';
		}	
		elseif ($_SESSION['CurrentPage'] == 'Tour')
		{
			$this->username = $_SESSION['Username'];
			$this->mContentsCell = 'tour.tpl';
		}	
		elseif ($_SESSION['CurrentPage'] == 'Merch')
		{
			$this->username = $_SESSION['Username'];
			$this->mContentsCell = 'merch.tpl';
		}	
		
		
        			
		else
		{
			$this->mContentsCell = 'not_implemented.tpl';
		}
	}
}
?>
