<?php /* Smarty version Smarty 3.1.0, created on 2012-04-03 11:46:11
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\users_list_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190804f76f168c5e581-48951253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6d35519d92ab84a1ee3f0db09a4c11963f8f6a' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\users_list_admin.tpl',
      1 => 1333453553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190804f76f168c5e581-48951253',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f76f168e331a',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f76f168e331a')) {function content_4f76f168e331a($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"users_list_admin",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mUsers){?>
<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Users</td>
        <td align="right">Edit | Delete</td>
      </tr>
     </table>
     <table class="blogentryodd">
     <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mUsers) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsers[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
</td>
        <td align="right">
        
        <a href="admin.php?v=users&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsers[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
"> <img src="images/edit.png" /></a>&nbsp;&nbsp;
         <a href="admin.php?v=users&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsers[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
"> <img src="images/delete.png" /></a>&nbsp;&nbsp;
       
        
        
        </td>
      </tr>
      <?php endfor; endif; ?>
<?php }?> 
      </table>
      
      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_tmp1)&&$_tmp2=='edit'){?>
      <form action="admin.php?v=users&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Username'];?>
" method="post">

Username: <input name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Username'];?>
" class="reg_form" ><br>
Password: <input name="password" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Password'];?>
" class="reg_form"><br>
First Name: <input name="first_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['First_Name'];?>
" class="reg_form"><br>
Last Name: <input name="last_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Last_Name'];?>
" class="reg_form"><br>
Email: <input name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Email_Address'];?>
" class="reg_form"><br>
Is the user admin?<br />
<input type="radio" name="privilege" value="1" /> Yes<br />
<input type="radio" name="privilege" value="0" /> No<br />
<input name="submit" type="submit" value="Edit">

</form>
<?php }else{ ?>
	<p></p>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_tmp3)&&$_tmp4=='add'){?>
     <form action="admin.php?v=users&action=add" method="post">

Username: <input name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Username'];?>
" class="reg_form"><br>
Password: <input name="password" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Password'];?>
" class="reg_form"><br>
First Name: <input name="first_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['First_Name'];?>
" class="reg_form"><br>
Last Name: <input name="last_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Last_Name'];?>
" class="reg_form"><br>
Email: <input name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsersEdit['Email_Address'];?>
" class="reg_form"><br>
<input name="submit" type="submit" value="Add">

</form>
<?php }else{ ?>
	<p></p>
<?php }?>

<a href="admin.php?v=users&action=add"> Add User</a>
      
      
</table>
<?php }} ?>