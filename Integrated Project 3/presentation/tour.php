<?php
class Tour {
	public $tour;
	
    
    public function __construct()
		{
			 	require_once BUSINESS_DIR . 'Database.php'; 
				require_once BUSINESS_DIR . 'User.php';
       			require_once BUSINESS_DIR . 'Authorization.php';
				require_once BUSINESS_DIR . 'Post.php';
				require_once BUSINESS_DIR . 'Comment.php';
				
        	
      }
	  
	 public function init(){
		 
		
		$this->tour = Post::GetAllTours();

		 }	  
}


?>