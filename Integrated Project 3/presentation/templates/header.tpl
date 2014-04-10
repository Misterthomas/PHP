{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="master" assign="obj"}

<table class="hellosearch">
  <tr>
  
    {if !empty({$obj->username})}
     <td width="702">Welcome {$obj->username}! <a href="login.php?page=logout" id="login_text">Logout</a></td>
{else}
    <td width="702">Welcome Guest. Please <a href="login.php" id="login_text">Login</a> or <a href="register.php">Register</a></td>
{/if}
    <td width="257">
    <form action="search.php" method="get">
		Search: <input type="text" name="search" />
        <input type="submit" value="Go" id="button_style"/>
	</form>
    </td>
  </tr>
</table>
<table class="bannerimage">
  <tr>
    <td></td>
  </tr>
</table>