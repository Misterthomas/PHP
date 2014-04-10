<?php /* Smarty version Smarty 3.1.0, created on 2012-04-03 10:33:16
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\admin_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152784f3d216b6417d4-82216815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e561358eef0c0c61dbe3603290ce8f28145f92a' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\admin_view.tpl',
      1 => 1333449167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152784f3d216b6417d4-82216815',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f3d216b7453d',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3d216b7453d')) {function content_4f3d216b7453d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"admin_view",'assign'=>"obj"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
<table class="adminheader" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="adminlogo">ADMIN</td>
    <td class="bordercolor" width="1px"></td>
    <td align="right" class="adminlogin">Welcome <?php echo $_smarty_tpl->tpl_vars['obj']->value->username;?>
 ! , <a href="login.php?page=logout">Logout</a></td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" class="topseperator">
 <tr>
  <td></td>
 </tr>
</table>
<table class="admincontent" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" class="adminnavbar"><table cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=post" class="admin_link">POSTS</a></td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=comments" class="admin_link">COMMENTS</a></td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=users" class="admin_link">USERS</a></td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=statstics" class="admin_link">STATSTICS</a></td>
      </tr>
      
      
    </table></td>
    <td class="bordercolor" width="1px"></td>
    <td align="center" valign="top" class="adminmaincontent">
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContentsCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
<table border="0" cellspacing="0" cellpadding="0" class="adminfooter">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html><?php }} ?>