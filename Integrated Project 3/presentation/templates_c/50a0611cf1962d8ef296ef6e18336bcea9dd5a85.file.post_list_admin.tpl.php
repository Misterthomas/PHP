<?php /* Smarty version Smarty 3.1.0, created on 2012-04-05 11:04:26
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\post_list_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27814f7867f4477029-40626393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a0611cf1962d8ef296ef6e18336bcea9dd5a85' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\post_list_admin.tpl',
      1 => 1333623864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27814f7867f4477029-40626393',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f7867f48dd2d',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7867f48dd2d')) {function content_4f7867f48dd2d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"post_list_admin",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mPost){?>
<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Post Title</td>
        <td align="right">Delete | Edit | Add</td>
      </tr>
     </table>
     <table class="blogentryodd">
     <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mPost) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <td><a href="post.php?id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPost[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PostID'];?>
" class="admin_link2"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mPost[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Title'];?>
</a></td>
        
        <td align="right">
        
       <a href="admin.php?v=post&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPost[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PostID'];?>
"> <img src="images/delete.png" /></a>&nbsp;&nbsp;
       <a href="admin.php?v=post&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPost[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PostID'];?>
"> <img src="images/edit.png" /></a>&nbsp;&nbsp;
        <a href="post.php?id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPost[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PostID'];?>
"><img src="images/view.png" /></a>
        
        </td>
      </tr>
      <?php endfor; endif; ?>
<?php }?>
      </table>
      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_tmp1)&&$_tmp2=='edit'){?>
      <form action="admin.php?v=post&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPostEdit['PostID'];?>
" method="post">

Post Title: <input name="post_title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPostEdit['Post_Title'];?>
"><br>
Post Content: <textarea name="post_content" cols="50" rows="8"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mPostEdit['Post_Content'];?>
</textarea><br>
Do you want to hide post?<br />
<input type="radio" name="hide" value="1" /> Yes<br />
<input type="radio" name="hide" value="0" /> No<br />
<input name="submit" type="submit" value="Edit">

</form>
<?php }else{ ?>
	<p></p>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->action;?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_tmp3)&&$_tmp4=='add'){?>
     <form action="admin.php?v=post&action=add" method="post">

Post Title: <input name="post_title" type="text" value=""><br>
Post Content: <textarea name="post_content" cols="50" rows="8"></textarea><br>
<input name="submit" type="submit" value="Post">

</form>
<?php }else{ ?>
	<p></p>
<?php }?>

<a href="admin.php?v=post&action=add"> Add Post</a>

</table>

<?php }} ?>