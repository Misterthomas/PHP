<?php
class AjaxController {
   	public $message;
	public $action;
    
    public function __construct()
		{
			 	require_once BUSINESS_DIR . 'Database.php'; 
				require_once BUSINESS_DIR . 'User.php';
       			require_once BUSINESS_DIR . 'Authorization.php';
				
        	
      }
	  
	 public function init(){
		 
		$this->action = $_GET['action'];
		 	
		 switch ($this->action){
			 
  							case 'checkusername':
   							$username = trim(strtolower($_POST['username']));
							if(User::GetUserById($username)){echo 1; } else{ echo 0; }
							break;
	
							case 'checkemail': 
							$email = trim(strtolower($_POST['email']));
							if(User::CheckEmail($email)){echo 1; } else{ echo 0; }
    						break;
}

		 }	  
}


?>