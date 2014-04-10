{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="login" assign="obj"}
{include file="head.tpl"}
<div id="loginbg">
<form action="login.php" method="post" name="login" id="login">
Email:&nbsp;<input type="text" id="emaillog" name="username" value="" size="20" /><br />
Password:&nbsp;<input type="password"  name="password" width="20" />
<br />
<input name="submit" id="submit_log" type="submit" value="Login"/>
</form>
<br />
<strong class="rederror">{$obj->LogError}</strong>
<strong>{$obj->logout}</strong>
</div>