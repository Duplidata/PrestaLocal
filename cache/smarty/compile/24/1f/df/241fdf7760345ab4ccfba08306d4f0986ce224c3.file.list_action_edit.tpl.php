<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 10:55:15
         compiled from "C:\wamp\www\PrestaLocal\admin000\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3167453b125f306b1a4-07730803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241fdf7760345ab4ccfba08306d4f0986ce224c3' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\admin000\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3167453b125f306b1a4-07730803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b125f30bd232_09563188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b125f30bd232_09563188')) {function content_53b125f30bd232_09563188($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>