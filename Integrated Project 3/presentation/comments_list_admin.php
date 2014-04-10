<?php
	class CommentsListAdmin
	{
		// Public variables to be read from Smarty template
		public $mComment;
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
			if ($this->view == 'comments')
			{
				$this->mComment = Comment::ShowAllComments();
			}
			
			if (($this->view == 'comments') AND ($this->action == 'delete'))
				{
				
				Comment::DeleteComment($this->id);
				header('Location: admin.php?v=comments');
				exit();
				
				}
			
			
			
			
			
		}
	}
?>
