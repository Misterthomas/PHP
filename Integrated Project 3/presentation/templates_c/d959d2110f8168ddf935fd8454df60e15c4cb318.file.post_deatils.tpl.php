<?php /* Smarty version Smarty 3.1.0, created on 2012-02-21 13:14:26
         compiled from "C:\wamp\www\IntegratedProject3/presentation/templates\post_deatils.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22324f4398b2619da5-48447416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd959d2110f8168ddf935fd8454df60e15c4cb318' => 
    array (
      0 => 'C:\\wamp\\www\\IntegratedProject3/presentation/templates\\post_deatils.tpl',
      1 => 1329226419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22324f4398b2619da5-48447416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f4398b2a127d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4398b2a127d')) {function content_4f4398b2a127d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\IntegratedProject3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"post_deatils",'assign'=>"obj"),$_smarty_tpl);?>

        <h1>Post</h1>
        <div><strong><?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Post_Title'];?>
 </strong> </div>   
         <div> <?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Post_Content'];?>
   </div> 
         <div> <ul><?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Post_Creation_Date'];?>
</ul></div> 
         <div>Added by: <b><?php echo $_smarty_tpl->tpl_vars['obj']->value->post['Username'];?>
</b></div>
         <br />
         
         <h1>Comments</h1>
         
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
   
         <div><?php echo $_smarty_tpl->tpl_vars['obj']->value->comment[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Username'];?>
</div>   
         <div> <?php echo $_smarty_tpl->tpl_vars['obj']->value->comment[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Comment_Date'];?>
   </div> 
         <div> <?php echo $_smarty_tpl->tpl_vars['obj']->value->comment[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Comment_Content'];?>
</div> 
         <br />
         <hr />
        <?php endfor; endif; ?>
        <?php }?>
<?php }} ?>