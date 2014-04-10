{* comments_list_admin.tpl *}
{load_presentation_object filename="comments_list_admin" assign="obj"}
{if $obj->mComment}
<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Comments</td>
        <td align="right">Delete</td>
      </tr>
     </table>
     
     {section name=i loop=$obj->mComment}
     <div class="comment_box">
      <p>  {$obj->mComment[i].Comment_Content}</p>
        
        <a href="admin.php?v=comments&action=delete&id={$obj->mComment[i].Comment_ID}" > <img src="images/delete.png" /></a>
      </div>
      {/section}
{* End post list *}
{/if} 
      
</table>







