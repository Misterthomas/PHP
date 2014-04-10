<?php

//INCLUDE ONLY WHEN TESTING FUNCTIONS OF THIS CLASS !
	///require_once '../include/config.php';
	///require_once 'database.php'; 

class Authorization{
	
	
  
  public static function Session_encription($email, $password){
    
    $string = $email."".$password."8!3<a>|4";
	$salt = "aD789gH4B90LOp";
	return sha1(md5($string.$salt));
    	
  }
  
  public static function Logout()
  {
	  
	session_destroy();
	  
	}
	
  
  
  public static function UserAuthentication($email, $password)
  {
    $sql = "SELECT * 
            FROM users
            WHERE Email_Address = :email
            AND PASSWORD =  :password
            LIMIT 1";
            
    $params = array (':email' => $email, ':password' => $password);
		if(Database::GetRow($sql,$params)){
		  
        //  return true;
		return Database::GetRow($sql,$params);
		  
		}else{
		  return false;
		}
  }
  
  
  
  public static function FindEmail($email){}
  public static function CheckPrivelages(){}
  public static function GetUserId($email){}
    
}

//TESTING !
	///$class = new Authorization;
	///$email = "daraszewicz@o2.pl";
	///$password = "bh9i8xt7";

///$class->Session_encription($email, $password);

?>