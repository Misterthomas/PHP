<?php
	class PostList
	{
		// Public variables to be read from Smarty template
		public $mPost;
		public $mCurrentPage;
        public $number;

		// Class constructor
		public function __construct()
		{
			$this->mCurrentPage = $_SESSION['CurrentPage'];
		}

		public function init()
		{
			if ($this->mCurrentPage == 'Home')
			{
				$this->mPost = Post::GetPosts();
				
			}
		}
	}
?>
			