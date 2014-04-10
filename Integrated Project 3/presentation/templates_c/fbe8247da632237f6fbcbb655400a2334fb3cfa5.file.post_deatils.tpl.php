<?php /* Smarty version Smarty 3.1.0, created on 2012-03-19 12:17:28
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\post_deatils.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159754f3a543b492cb8-20334916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe8247da632237f6fbcbb655400a2334fb3cfa5' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\post_deatils.tpl',
      1 => 1332159445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159754f3a543b492cb8-20334916',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f3a543b6dc2c',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3a543b6dc2c')) {function content_4f3a543b6dc2c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"post_deatils",'assign'=>"obj"),$_smarty_tpl);?>

        <div id="blog_title"><strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Post_Title'];?>
 </strong> </div>   <br />
        
        <div>Posted on <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Post_Creation_Date'];?>
</strong> by <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Username'];?>
</strong></div>
        <br />
         <div id="blog_text"> <?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Post_Content'];?>
   </div> 
         
         <br />
         
         <h1>Comments</h1>
         
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['obj']->value->username;?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_tmp1)){?>
     <form action="Post.php?id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->id;?>
" method="post">
     <textarea name="coment" cols="70" rows="5" id="textarea" style="background-color:#CCCCCC" style="border-color:#000000"></textarea>
     <input name="submit" type="submit" value="Comment" id="button_style" /> <input name="submit" type="reset" value="Clear" id="button_style"/>
     
     </form>
     <br />
     <br />
     
<?php }else{ ?>
	<p><a href="login.php" id="login_text">Login</a> or <a href="">register</a> to add a comment</p>
<?php }?>
         
         
         
         <?php if ($_smarty_tpl->tpl_vars['obj']->value->comment){?>
         <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->comment) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
         <table>
         <tr>
         <td id="avatar"></td>
         <td valign="top" ><a href="login.php" id="login_text"><?php echo $_smarty_tpl->tpl_vars['obj']->value->comment[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['obj']->value->comment[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Comment_Date'];?>
<br /><br />
         <?php echo $_smarty_tpl->tpl_vars['obj']->value->comment[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Comment_Content'];?>
</td>
         </tr>
         </table>
         <br />
         <hr />
         <br />
         <?php endfor; endif; ?>
         <?php }?>
<?php }} ?>