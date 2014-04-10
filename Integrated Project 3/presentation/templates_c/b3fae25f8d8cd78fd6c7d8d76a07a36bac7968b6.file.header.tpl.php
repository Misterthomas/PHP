<?php /* Smarty version Smarty 3.1.0, created on 2012-04-05 01:54:09
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261854f33e76e579e61-32871205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fae25f8d8cd78fd6c7d8d76a07a36bac7968b6' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\header.tpl',
      1 => 1333590843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261854f33e76e579e61-32871205',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f33e76e57c31',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f33e76e57c31')) {function content_4f33e76e57c31($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"master",'assign'=>"obj"),$_smarty_tpl);?>


<table class="hellosearch">
  <tr>
  
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->username;?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_tmp1)){?>
     <td width="702">Welcome <?php echo $_smarty_tpl->tpl_vars['obj']->value->username;?>
! <a href="login.php?page=logout" id="login_text">Logout</a></td>
<?php }else{ ?>
    <td width="702">Welcome Guest. Please <a href="login.php" id="login_text">Login</a> or <a href="register.php">Register</a></td>
<?php }?>
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
</table><?php }} ?>