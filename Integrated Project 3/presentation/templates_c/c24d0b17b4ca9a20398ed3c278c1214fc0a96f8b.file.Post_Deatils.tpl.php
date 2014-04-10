<?php /* Smarty version Smarty 3.1.0, created on 2012-02-14 12:26:57
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\Post_Deatils.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49624f3a4df808d5f9-14058517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24d0b17b4ca9a20398ed3c278c1214fc0a96f8b' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\Post_Deatils.tpl',
      1 => 1329222414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49624f3a4df808d5f9-14058517',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f3a4df82d019',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3a4df82d019')) {function content_4f3a4df82d019($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"PostDeatils",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->post){?>

  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->post) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   
         <div><strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->post[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Title'];?>
 </strong> </div>   
         <div> <?php echo $_smarty_tpl->tpl_vars['obj']->value->post[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Content'];?>
   </div> 
         <div> <ul><?php echo $_smarty_tpl->tpl_vars['obj']->value->post[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Post_Creation_Date'];?>
</ul></div> 
         <div>Added by: <b><?php echo $_smarty_tpl->tpl_vars['obj']->value->post[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
</b></div>
         <br />
     
  <?php endfor; endif; ?>
<?php }?>
<?php }} ?>