<?php
class Comment
{
    public static function ShowAllComments( )
    {
        $sql = 'SELECT * FROM comments';
        // Execute the query and return the results
        return Database::GetAll( $sql );
    }
    public static function ShowAllPostComments( $id )
    {
        $sql    = 'SELECT * FROM comments where PostID = :id';
        $params = array(
             ':id' => $id 
        );
        // Execute the query and return the results
        return Database::GetAll( $sql, $params );
    }
   
   
	
    public static function DeleteComment( $id )
    {
		$sql = "DELETE from comments WHERE Comment_ID = :id";
		$params = array (':id' => $id);
		return Database::Execute($sql, $params);
    }
	
    public static function AddComment( $username, $post_id, $comment )
    {
        $sql    = 'INSERT INTO ip3.comments
                VALUES (Null, :username , :post_id , NOW() , :comment)';
        $params = array(
             ':username' => $username,
            ':post_id' => $post_id,
            ':comment' => $comment 
        );
        return Database::Execute( $sql, $params );
    }
}
?>