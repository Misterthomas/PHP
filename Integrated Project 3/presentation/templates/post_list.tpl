{* post_list.tpl *}
{load_presentation_object filename="post_list" assign="obj"}

{if $obj->mPost}

  {section name=i loop=$obj->mPost}
   
   
         <div id="blog_title"><strong><a href="post.php?id={$obj->mPost[i].PostID}">{$obj->mPost[i].Post_Title}</a> </strong> </div> <br />  
        <div>Posted on <strong>{$obj->mPost[i].Post_Creation_Date}</strong> by <strong>{$obj->mPost[i].Username}</strong></div>
        <br />
         <div id="blog_text"> {$obj->mPost[i].Post_Content}   </div> 
         
         <br /><br />
     
  {/section}

{* End post list *}
{/if}

