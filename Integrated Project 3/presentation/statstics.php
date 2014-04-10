<?php
class Statstics {
	public $post_number = '';
	public $comments_number = '';
	public $user_number = '';
	
	public $users;
	public $post;
	public $comments;
    
    public function __construct()
		{
			 	require_once BUSINESS_DIR . 'Database.php'; 
				require_once BUSINESS_DIR . 'User.php';
       			require_once BUSINESS_DIR . 'Authorization.php';
				require_once BUSINESS_DIR . 'Post.php';
				require_once BUSINESS_DIR . 'Comment.php';
				
        	
      }
	  
	 public function init(){
		 
		
		
		 
		 $this->users = User::GetAllUsers();
		$this->user_number = count($this->users);
		
		$this->post = Post::GetAllPosts();
		$this->post_number = count($this->post);
		
		$this->comments = Comment::ShowAllComments();
		$this->comments_number = count($this->comments);
		 
		
		 }	  
}


?>