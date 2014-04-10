<?php /* Smarty version Smarty 3.1.0, created on 2012-04-03 09:56:44
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112594f6862937f9706-30973460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df20f877c4f885251dee959411f720a58d0c36e' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\register.tpl',
      1 => 1333446992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112594f6862937f9706-30973460',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f686293badf4',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f686293badf4')) {function content_4f686293badf4($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"register",'assign'=>"obj"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
$(document).ready(function(){
$('#username').keyup(username_check);
$('#email').keyup(email_check);
});
	
function username_check(){	
var username = $('#username').val();
if(username == "" || username.length < 4){
$('.username_form').css('border', '3px #CCC solid');
$('#tick_username').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "ajax.php?action=checkusername",
   data: 'username='+ username,
   cache: false,
   success: function(response){
if(response == 1){
	$('.username_form').css('border', '3px #C33 solid');	
	$('#tick_username').hide();
	$('#cross_username').fadeIn();
	}else{
	$('.username_form').css('border', '3px #090 solid');
	$('#cross_username').hide();
	$('#tick_username').fadeIn();
	     }

}
});
}
}

function email_check(){	
var email = $('#email').val();
if(email == "" || email.length < 4){
$('.email_form').css('border', '3px #CCC solid');
$('#tick_email').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "ajax.php?action=checkemail",
   data: 'email='+ email,
   cache: false,
   success: function(response){
if(response == 1){
	$('.email_form').css('border', '3px #C33 solid');	
	$('#tick_email').hide();
	$('#cross_email').fadeIn();
	}else{
	$('.email_form').css('border', '3px #090 solid');
	$('#cross_email').hide();
	$('#tick_email').fadeIn();
	     }

}
});
}
}


</script>
<div id="loginbg">
<form action="register.php" method="post" name="login" id="login">

First Name:<input type="text" id="" name="first_name" value="" size="20" class="reg_form" /><br />
Last Name:<input type="text" id="" name="last_name" value="" size="20" class="reg_form" /><br />
Username:<input type="text" id="username" name="username" value="" size="20" class="username_form" />
<img id="tick_username" src="tick.png" width="16" height="16"/><br />
<img id="cross_username" src="cross.png" width="16" height="16"/><br />
Email:<input type="text" id="email" name="email" value="" size="20" class="email_form" />
<img id="tick_email" src="tick.png" width="16" height="16"/><br />
<img id="cross_email" src="cross.png" width="16" height="16"/><br />
Password:<input type="password"  name="password" width="20" class="reg_form" /><br />
Confirm Password:<input type="password"  name="password_confirm" width="20" class="reg_form" /><br />
<br />
<input name="submit" id="submit_log" type="submit" value="Register"/>
</form>
<br />
<strong class="rederror"><?php echo $_smarty_tpl->tpl_vars['obj']->value->Register_Error;?>
</strong>
<strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->logout;?>
</strong>
</div><?php }} ?>