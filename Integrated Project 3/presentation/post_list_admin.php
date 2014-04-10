<?php
	class PostListAdmin
	{
		// Public variables to be read from Smarty template
		public $mPost;
		public $mPostEdit;
		public $view;
		public $action;
		public $id;
		public $mContentsCell;
		public $username;


		// Class constructor
		public function __construct()
		{
			$this->view = $_GET['v'];
			$this->action = $_GET['action'];
			$this->id = $_GET['id'];
			$this->username = $_SESSION['Username'];
			
		}

		public function init()
		{
			if ($this->view == 'post')
			{
				$this->mPost = Post::GetAllPosts();
			}
			
			if (($this->view == 'post') AND ($this->action == 'delete'))
				{
				
				Post::DeletePost($this->id);
				header('Location: admin.php?v=post');
				exit();
				
				}
				
			if (($this->view == 'post') AND ($this->action == 'edit'))
				{
				
				$this->mPostEdit = Post::GetPostById($this->id);
				$this->mContentsCell = 'editpostform.tpl';
				
						if(isset($_POST['submit'])){
							
							$PostTitle = $_POST['post_title'];
							$PostContent = $_POST['post_content'];
							$hide = $_POST['hide'];
							
							Post::EditAPost($this->id, $this->username, $PostTitle, $PostContent, $hide);
							header('Location: admin.php?v=post');
							}
				
				}
			
			if (($this->view == 'post') AND ($this->action == 'add'))
				{
				
				
				if(isset($_POST['submit'])){
							$PostTitle = $_POST['post_title'];
							$PostContent = $_POST['post_content'];
							Post::AddAPost($this->username, $PostTitle, $PostContent);
							header('Location: admin.php?v=post');
				}
				}
			
		}
	}
?>