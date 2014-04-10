{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="register" assign="obj"}
{include file="head.tpl"}
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
<strong class="rederror">{$obj->Register_Error}</strong>
<strong>{$obj->logout}</strong>
</div>