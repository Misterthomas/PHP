<?php
class register {
   
    public $Register_Error = ''; 
	
    public function __construct()
		{
        require_once BUSINESS_DIR . 'Database.php'; 
		require_once BUSINESS_DIR . 'User.php';
        require_once BUSINESS_DIR . 'Authorization.php';
        
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];
		$username = $_POST['username'];
        
        if (isset($_POST['submit']))
			{
				
						if(User::GetUserById($username) OR User::CheckEmail($email))
						{
							
						$this->Register_Error = 'Username or Email is already used!'; 	
							
						}elseif ($password != $password_confirm){
						
						$this->Register_Error = 'Passwords do not match, please enter again.'; 
						
						}
						else{
				
				
				
					User::AddUser($username, $password, $first_name, $last_name, $email);
					header('Location: login.php');
					exit();	
			
						}
          }            
      }
}

?>