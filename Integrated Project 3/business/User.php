<?php
//INCLUDE ONLY WHEN TESTING FUNCTIONS OF THIS CLASS !
	//require_once '../include/config.php';
	//require_once 'database.php';
class User{
	
	public static function CheckEmail($email)
	{
		$sql = "SELECT Email_Address FROM users WHERE Email_Address = :email";
		$params = array( ':email' => $email);
		return  Database::GetRow($sql,$params);	
		
		
	}
	
	public static function EditUser($Username, $Password, $First_Name, $Last_Name, $Email_Address, $Privileges, $Username_old)
	{
		
	$sql = "UPDATE  users SET  
					Username =  :Username ,
					Password =  :Password ,
					First_Name =  :First ,
					Last_Name =  :Last ,
					Email_Address =  :Email,
					Privileges = :Privileges 
			WHERE  Username =  :Username_old ";	
			
	$params = array( ':Username' => $Username,
	 				 ':Password' => $Password,
	  				 ':First' => $First_Name,
	   			     ':Last' => $Last_Name,
	    			 ':Email' => $Email_Address, 
					 ':Privileges' => $Privileges,
					 ':Username_old' => $Username_old );
					 
	return Database::Execute( $sql, $params );
		
	}
	
	public static function GetUserById($id)
	{
		$sql = "SELECT * FROM users WHERE Username = :id";
		$params = array( ':id' => $id);
		return  Database::GetRow($sql,$params);
		
	}
	
	public static function GetAllUsers()
		{
			$sql = "SELECT * FROM users";
			return Database::GetAll( $sql );		
		
		}
    
    public static function FindUser($username)
	{
		
	$sql = "SELECT Username FROM users WHERE Username = :username";	
	$params = array( ':username' => $username);
	if( Database::GetRow($sql,$params)){
		return 1;
		}else{
			return 0;
			}
		
	}
	
	public static function AddUser($Username, $Password, $First_Name, $Last_Name, $Email_Address)
		{
			$sql = "INSERT INTO  ip3.users (Username , Password , First_Name , Last_Name , Email_Address , Privileges)
									VALUES (:Username,  :Password,  :First_Name,  :Last_Name,  :Email_Address, 0)";
		
			 $params = array(
             ':Username' => $Username,
            ':Password' => $Password,
            ':First_Name' => $First_Name,
			':Last_Name' => $Last_Name,
			':Email_Address' => $Email_Address);
			
			return Database::Execute( $sql, $params );
			}
			
		public static function DeleteUser($Username)
		{
			$sql = "DELETE from users WHERE Username = :username";
		$params = array (':username' => $Username);
		return Database::Execute($sql, $params);	
			
			
		}
	
    
    
    
    
    
    
}

//TESTING !
	//$class = new User;
	///$email = "daraszewicz@o2.pl";
	///$password = "";
	//$Username = "ClassTest";
	//$Password  = "ClassTest";
	//$First_Name = "ClassTest";
	//$Last_Name = "ClassTest";
	//$Email_Address = "ClassTest";

//$class->AddUser($Username, $Password, $First_Name, $Last_Name, $Email_Address);


?>