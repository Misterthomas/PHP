<?php /* Smarty version Smarty 3.1.0, created on 2012-04-05 02:07:09
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257334f7cf967475838-61078976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca07b3a52f3aae6fc5f2962f869074aaf53f8f4d' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\search.tpl',
      1 => 1333591621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257334f7cf967475838-61078976',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f7cf96765234',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7cf96765234')) {function content_4f7cf96765234($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"search",'assign'=>"obj"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['obj']->value->result){?>

  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->result) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   
   
         <div id="blog_title"><strong><a href="post.php?id=<?php echo $_smarty_tpl->tpl_vars['obj']->value->result[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PostID'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->result[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Title'];?>
</a> </strong> </div> <br />  
        <div>Posted on <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->result[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Creation_Date'];?>
</strong> by <strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->result[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
</strong></div>
        <br />
         <div id="blog_text"> <?php echo $_smarty_tpl->tpl_vars['obj']->value->result[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Content'];?>
   </div> 
         
         <br /><br />
     
  <?php endfor; endif; ?>
<?php }?><?php }} ?>