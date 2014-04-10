<?php
class PostDeatils
{
	// Define the template file for the page contents
	public $mContentsCell;
	public $post;
	public $comment;
	public $username;
	public $id;


	// Class constructor
	public function __construct()
	{
	}

	// Initialize presentation object
	public function init()
	{
		// Load the database handler
		require_once BUSINESS_DIR . 'Database.php'; 

		// Load Business Tier
		require_once BUSINESS_DIR . 'Post.php';
        require_once BUSINESS_DIR . 'Comment.php';
		
		if ($_SESSION['CurrentPage'] == 'Post_Deatils')
		{
			$this->id = $_SESSION['PostId'];
			
			 $this->username = $_SESSION['Username'];
			$this->post = Post::GetPostById($this->id);
            $this->comment = Comment::ShowAllPostComments($this->id);
			
			 if (isset($_POST['submit']))
			{
						$comment_added =  $_POST['coment'];
						Comment::AddComment($this->username, $this->id, $comment_added);
			}

		}
			
		else
		{
			$this->mContentsCell = 'not_implemented.tpl';
		}
	}
}
?>