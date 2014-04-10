<?php /* Smarty version Smarty 3.1.0, created on 2012-04-03 11:19:08
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\statstics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238144f7ad1ef1fa749-55649307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b2c7b622eed276dd725f3e5e68b1dc6c2ae138' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\statstics.tpl',
      1 => 1333451946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238144f7ad1ef1fa749-55649307',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f7ad1ef2d4ee',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7ad1ef2d4ee')) {function content_4f7ad1ef2d4ee($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"statstics",'assign'=>"obj"),$_smarty_tpl);?>


<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Statstics</td>
        <td align="right"></td>
      </tr>
     </table>
     <table class="blogentryodd">
     
      <tr>
       <td>
       <strong> Number of posts:</strong> <?php echo $_smarty_tpl->tpl_vars['obj']->value->post_number;?>
<br>
       <strong> Number of users:</strong> <?php echo $_smarty_tpl->tpl_vars['obj']->value->user_number;?>
<br>
      <strong>  Number of comments:</strong> <?php echo $_smarty_tpl->tpl_vars['obj']->value->comments_number;?>
<br>
        </td>
        
      </tr>

      </table>


</table>
<?php }} ?>