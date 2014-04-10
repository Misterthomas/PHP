<?php /* Smarty version Smarty 3.1.0, created on 2012-03-19 13:15:29
         compiled from "C:\wamp\www\Integrated Project 3/presentation/templates\master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189634f33e76e270df5-47587717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e82232de502d220325e5126413078bdbf2cc6a0' => 
    array (
      0 => 'C:\\wamp\\www\\Integrated Project 3/presentation/templates\\master.tpl',
      1 => 1332162911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189634f33e76e270df5-47587717',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f33e76e47a2c',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f33e76e47a2c')) {function content_4f33e76e47a2c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\Integrated Project 3/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"master",'assign'=>"obj"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<table class="gap"  cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table class="maincontentcontainer" cellpadding="0" cellspacing="0">
  <tr>
    <td class="socialmediasection"></td>
    <td class="line"></td>
    <td class="maincontent"><a href="index.html">Metallica Fan Site</a> > <a href="index.html">Home</a><br /><br />
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContentsCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
    </td>
    <td class="ads"></td>
  </tr>
</table>
<table class="footer">
 <tr>
  <td><samp id="footer_text">Copyright © Metallica Fan Site 2012</samp></td>
 </tr>
</table>
</body>
</html>

<?php }} ?>