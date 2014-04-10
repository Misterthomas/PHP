{* post_deatils.tpl *}
{load_presentation_object filename="post_deatils" assign="obj"}
        <div id="blog_title"><strong>{$obj->post.Post_Title} </strong> </div>   <br />
        
        <div>Posted on <strong>{$obj->post.Post_Creation_Date}</strong> by <strong>{$obj->post.Username}</strong></div>
        <br />
         <div id="blog_text"> {$obj->post.Post_Content}   </div> 
         
         <br />
         
         <h1>Comments</h1>
         
          {if !empty({$obj->username})}
     <form action="Post.php?id={$obj->id}" method="post">
     <textarea name="coment" cols="70" rows="5" id="textarea" style="background-color:#CCCCCC" style="border-color:#000000"></textarea>
     <input name="submit" type="submit" value="Comment" id="button_style" /> <input name="submit" type="reset" value="Clear" id="button_style"/>
     
     </form>
     <br />
     <br />
     
{else}
	<p><a href="login.php" id="login_text">Login</a> or <a href="">register</a> to add a comment</p>
{/if}
         
         
         
         {if $obj->comment}
         {section name=i loop=$obj->comment}
         <table>
         <tr>
         <td id="avatar"></td>
         <td valign="top" ><a href="login.php" id="login_text">{$obj->comment[i].Username}</a> {$obj->comment[i].Comment_Date}<br /><br />
         {$obj->comment[i].Comment_Content}</td>
         </tr>
         </table>
         <br />
         <hr />
         <br />
         {/section}
         {/if}
