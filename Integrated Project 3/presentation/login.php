<?php
class Login {
    public $LogError = '';
	public $logout = '';
    private $email;
    private $password;
    
    public function __construct()
		{
        require_once BUSINESS_DIR . 'Database.php'; 
		require_once BUSINESS_DIR . 'User.php';
        require_once BUSINESS_DIR . 'Authorization.php';
        
        $email = $_POST['username'];
        $password = $_POST['password'];
		
        if($_GET['page'] === "logout")
		{
			Authorization::Logout();
			$this->logout = 'You have been successfully logged out ';
	
			
		}
        
        
        if (isset($_POST['submit']))
			{
          
          
          if(Authorization::UserAuthentication($email, $password))
          {
            
				$this->data = Authorization::UserAuthentication($email, $password);
				
				$username = $this->data['Username'];
				$password = $this->data['Password'];
				$first_name = $this->data['First_Name'];
				$last_name = $this->data['Last_Name'];
				$email = $this->data['Email_Address'];
				$Privileges = $this->data['Privileges'];
				
				
				$login_session = Authorization::Session_encription($email, $password);
				
				$_SESSION['login_session'] = $login_session;
				$_SESSION['Privileges'] = $Privileges ;
				
				$_SESSION['Password'] = $password;
				
				
							
							if ($Privileges == 0){
								$_SESSION['login_session'] = $login_session;
								$_SESSION['Privileges'] = $Privileges ;
								$_SESSION['Username'] = $username;
								
								header('Location: index.php');
								exit();	
								
								
								}else{ 
								$_SESSION['login_session'] = $login_session;
								$_SESSION['Privileges'] = $Privileges ;
								$_SESSION['Username'] = $username;
								header('Location: admin.php');
								exit();	
								
								}

          } else{
           $this->LogError = 'Email or password was incorrect, please try again.';
           
          }             
      }
}
}
?>