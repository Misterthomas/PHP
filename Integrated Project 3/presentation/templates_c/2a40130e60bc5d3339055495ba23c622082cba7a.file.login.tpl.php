<?php /* Smarty version Smarty 3.1.0, created on 2012-03-19 14:48:38
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90404f3b9056693568-14957566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a40130e60bc5d3339055495ba23c622082cba7a' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\login.tpl',
      1 => 1332168506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90404f3b9056693568-14957566',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f3b905674a1d',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3b905674a1d')) {function content_4f3b905674a1d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"login",'assign'=>"obj"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="loginbg">
<form action="login.php" method="post" name="login" id="login">
Email:&nbsp;<input type="text" id="emaillog" name="username" value="" size="20" /><br />
Password:&nbsp;<input type="password"  name="password" width="20" />
<br />
<input name="submit" id="submit_log" type="submit" value="Login"/>
</form>
<br />
<strong class="rederror"><?php echo $_smarty_tpl->tpl_vars['obj']->value->LogError;?>
</strong>
<strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->logout;?>
</strong>
</div><?php }} ?>