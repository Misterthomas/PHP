{* smarty *}
{config_load file="site.conf"}
{* post_list_admin.tpl *}
{load_presentation_object filename="post_list_admin" assign="obj"}
{if $obj->mPost}
<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Post Title</td>
        <td align="right">Delete | Edit | Add</td>
      </tr>
     </table>
     <table class="blogentryodd">
     {section name=i loop=$obj->mPost}
      <tr>
        <td><a href="post.php?id={$obj->mPost[i].PostID}" class="admin_link2">{$obj->mPost[i].Post_Title}</a></td>
        
        <td align="right">
        
       <a href="admin.php?v=post&action=delete&id={$obj->mPost[i].PostID}"> <img src="images/delete.png" /></a>&nbsp;&nbsp;
       <a href="admin.php?v=post&action=edit&id={$obj->mPost[i].PostID}"> <img src="images/edit.png" /></a>&nbsp;&nbsp;
        <a href="post.php?id={$obj->mPost[i].PostID}"><img src="images/view.png" /></a>
        
        </td>
      </tr>
      {/section}
{* End post list *}
{/if}
      </table>
      {if isset({$obj->action}) && {$obj->action} == 'edit'}
      <form action="admin.php?v=post&action=edit&id={$obj->mPostEdit.PostID}" method="post">

Post Title: <input name="post_title" type="text" value="{$obj->mPostEdit.Post_Title}"><br>
Post Content: <textarea name="post_content" cols="50" rows="8">{$obj->mPostEdit.Post_Content}</textarea><br>
Do you want to hide post?<br />
<input type="radio" name="hide" value="1" /> Yes<br />
<input type="radio" name="hide" value="0" /> No<br />
<input name="submit" type="submit" value="Edit">

</form>
{else}
	<p></p>
{/if}

{if isset({$obj->action}) && {$obj->action} == 'add'}
     <form action="admin.php?v=post&action=add" method="post">

Post Title: <input name="post_title" type="text" value=""><br>
Post Content: <textarea name="post_content" cols="50" rows="8"></textarea><br>
<input name="submit" type="submit" value="Post">

</form>
{else}
	<p></p>
{/if}

<a href="admin.php?v=post&action=add"> Add Post</a>

</table>

