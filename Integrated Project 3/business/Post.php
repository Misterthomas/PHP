<?php
	class Post
	{
	
	
	public static function GetAllTours()
	{
		$sql = "SELECT * FROM tours ";
		return Database::GetAll($sql);
		
	}
	
	public static function FindPost($string)
	{
		
	$sql = "SELECT * 
			FROM posts
			WHERE Post_Title
			LIKE  %:string%";	
		
		$params = array (':string' => $string);
		return Database::GetAll($sql,$params);
	}
	
	public static function GetPosts()
	{
		
		$sql = 'SELECT * 
                FROM posts
                WHERE Hide = 0
                ORDER BY Post_Creation_Date DESC';

		
		return Database::GetAll($sql);
	}
	
	public static function GetAllPosts()
	{
		
		$sql = 'SELECT * 
                FROM posts';

		
		return Database::GetAll($sql);
		
		
	}
    
    public static function GetPostById($id)
    {
        $sql = 'SELECT * FROM posts WHERE PostID = :id';
        
        $params = array (':id' => $id);
        
	   return Database::GetRow($sql,$params);
      
    }
    
    
	
    public static function AddAPost($username, $PostTitle, $PostContent)
	{
		$sql = "INSERT INTO posts (
				PostID ,
				Username ,
				Post_Title ,
				Post_Content ,
				Post_Creation_Date ,
				Post_Modification_Date ,
				Hide)
VALUES (NULL ,  :username ,  :posttitle ,  :postcontent ,  NOW() ,  NOW() ,  '0');";	
		$params = array (':username' => $username, ':posttitle' => $PostTitle, ':postcontent' => $PostContent );
		return Database::Execute($sql, $params);
		
	}
	
	
	
    public static function EditAPost($id, $username, $PostTitle, $PostContent, $hide)
	{
		
	$sql = "UPDATE  posts SET
				Username =  :username ,
				Post_Title =  :PostTitle,
				Post_Content = :PostContent,
				Post_Modification_Date = NOW(),
				Hide = :hide
			WHERE  PostID = :id";	
	
	$params = array (':id' => $id, ':username' => $username, ':PostTitle' => $PostTitle, ':PostContent' => $PostContent, ':hide' => $hide  );
		return Database::Execute($sql, $params);
		
	}

    public static function DeletePost($id)
	{
		$sql = "DELETE from posts WHERE PostID = :id";
		$params = array (':id' => $id);
		return Database::Execute($sql, $params);	
	}
    public static function HideAPost($id){}
    public static function UnhideAPost($id){}
    
    
	
	}
?>