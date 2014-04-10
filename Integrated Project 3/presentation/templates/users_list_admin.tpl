{* users_list_admin.tpl *}
{load_presentation_object filename="users_list_admin" assign="obj"}
{if $obj->mUsers}
<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Users</td>
        <td align="right">Edit | Delete</td>
      </tr>
     </table>
     <table class="blogentryodd">
     {section name=i loop=$obj->mUsers}
      <tr>
        <td>{$obj->mUsers[i].Username}</td>
        <td align="right">
        
        <a href="admin.php?v=users&action=edit&id={$obj->mUsers[i].Username}"> <img src="images/edit.png" /></a>&nbsp;&nbsp;
         <a href="admin.php?v=users&action=delete&id={$obj->mUsers[i].Username}"> <img src="images/delete.png" /></a>&nbsp;&nbsp;
       
        
        
        </td>
      </tr>
      {/section}
{* End post list *}
{/if} 
      </table>
      
      {if isset({$obj->action}) && {$obj->action} == 'edit'}
      <form action="admin.php?v=users&action=edit&id={$obj->mUsersEdit.Username}" method="post">

Username: <input name="username" type="text" value="{$obj->mUsersEdit.Username}" class="reg_form" ><br>
Password: <input name="password" type="text" value="{$obj->mUsersEdit.Password}" class="reg_form"><br>
First Name: <input name="first_name" type="text" value="{$obj->mUsersEdit.First_Name}" class="reg_form"><br>
Last Name: <input name="last_name" type="text" value="{$obj->mUsersEdit.Last_Name}" class="reg_form"><br>
Email: <input name="email" type="text" value="{$obj->mUsersEdit.Email_Address}" class="reg_form"><br>
Is the user admin?<br />
<input type="radio" name="privilege" value="1" /> Yes<br />
<input type="radio" name="privilege" value="0" /> No<br />
<input name="submit" type="submit" value="Edit">

</form>
{else}
	<p></p>
{/if}

{if isset({$obj->action}) && {$obj->action} == 'add'}
     <form action="admin.php?v=users&action=add" method="post">

Username: <input name="username" type="text" value="{$obj->mUsersEdit.Username}" class="reg_form"><br>
Password: <input name="password" type="text" value="{$obj->mUsersEdit.Password}" class="reg_form"><br>
First Name: <input name="first_name" type="text" value="{$obj->mUsersEdit.First_Name}" class="reg_form"><br>
Last Name: <input name="last_name" type="text" value="{$obj->mUsersEdit.Last_Name}" class="reg_form"><br>
Email: <input name="email" type="text" value="{$obj->mUsersEdit.Email_Address}" class="reg_form"><br>
<input name="submit" type="submit" value="Add">

</form>
{else}
	<p></p>
{/if}

<a href="admin.php?v=users&action=add"> Add User</a>
      
      
</table>
