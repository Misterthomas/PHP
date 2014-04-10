<?php
	class UsersListAdmin
	{
		// Public variables to be read from Smarty template
		public $mUsers;
		public $mUsersEdit;
		public $view;
		public $action;
		public $id;
		

		// Class constructor
		public function __construct()
		{
			
			$this->view = $_GET['v'];
			$this->action = $_GET['action'];
			$this->id = $_GET['id'];
		}

		public function init()
		{
			if ($this->view == 'users')
			{
				$this->mUsers = User::GetAllUsers();
			}
			
			if (($this->view == 'users') AND ($this->action == 'delete'))
				{
				
				User::DeleteUser($this->id);
				header('Location: admin.php?v=users');
				exit();
				
				}
				
			if (($this->view == 'users') AND ($this->action == 'edit'))
				{
				
				$this->mUsersEdit = User::GetUserById($this->id);
				
				
						if(isset($_POST['submit'])){
							
							$username = $_POST['username'];
							$Password = $_POST['password'];
							$First_Name = $_POST['first_name'];
							$Last_Name = $_POST['last_name'];
							$Email_Address = $_POST['email'];
							$Privileges = $_POST['privilege'];
							
							
							User::EditUser($username, $Password, $First_Name, $Last_Name, $Email_Address, $Privileges, $this->id);
							header('Location: admin.php?v=users');
							}
				
				}
				
				if (($this->view == 'users') AND ($this->action == 'add'))
				{
				
				
				if(isset($_POST['submit'])){
					
							$username = $_POST['username'];
							$Password = $_POST['password'];
							$First_Name = $_POST['first_name'];
							$Last_Name = $_POST['last_name'];
							$Email_Address = $_POST['email'];
							
							
							
							User::AddUser($username, $Password, $First_Name, $Last_Name, $Email_Address);
							header('Location: admin.php?v=users');
				}
				}
			
		}
	}
?>