<?php
class Adminview{
	public $mContentsCell;
	public $username;
	public $Privileges;
	public $login_session;
	
    public function __construct(){}
	
	
	public function init()
	{
		
		
		require_once BUSINESS_DIR . 'Database.php'; 
		require_once BUSINESS_DIR . 'Post.php';
		require_once BUSINESS_DIR . 'Comment.php';
		require_once BUSINESS_DIR . 'User.php';
		
		$this->username = $_SESSION['Username'];
		$this->Privileges = $_SESSION['Privileges'];
		
if(isset($this->username) AND ($this->Privileges == 1)){
			
				$view = $_GET['v'];
		
		
		
		
			if ($view == 'post')
			{
				$this->mContentsCell = 'post_list_admin.tpl';
			
			}	
		
			elseif ($view == 'comments')
			{
				$this->mContentsCell = 'comments_list_admin.tpl';
			
			}	
			elseif ($view == 'users')
			{
				$this->mContentsCell = 'users_list_admin.tpl';
				
			}	
			elseif ($view == 'settings')
			{
				$this->mContentsCell = 'post_list_admin.tpl';
				
			}	
			elseif ($view == 'statstics')
			{
				$this->mContentsCell = 'statstics.tpl';
			
			}		
			
			elseif (empty($view))
			{
				$this->mContentsCell = 'admin_main.tpl';
			
			}		
						
			else
			{
				$this->mContentsCell = 'not_implemented.tpl';
			}
	
}else{
header('Location: index.php');
exit();
}

	}
}
?>