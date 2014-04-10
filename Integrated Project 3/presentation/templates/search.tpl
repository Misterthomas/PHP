{* search.tpl *}
{load_presentation_object filename="search" assign="obj"}

{if $obj->result}

  {section name=i loop=$obj->result}
   
   
         <div id="blog_title"><strong><a href="post.php?id={$obj->result[i].PostID}">{$obj->result[i].Post_Title}</a> </strong> </div> <br />  
        <div>Posted on <strong>{$obj->result[i].Post_Creation_Date}</strong> by <strong>{$obj->result[i].Username}</strong></div>
        <br />
         <div id="blog_text"> {$obj->result[i].Post_Content}   </div> 
         
         <br /><br />
     
  {/section}

{* End post list *}
{/if}