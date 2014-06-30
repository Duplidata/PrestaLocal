<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 10:53:27
         compiled from "C:\wamp\www\PrestaLocal\admin000\themes\default\template\controllers\modules\modal_translation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2110153b12587eed771-41512484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6374e4d7aec7adbfe9a83842d075d9d38b05d6b4' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\admin000\\themes\\default\\template\\controllers\\modules\\modal_translation.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110153b12587eed771-41512484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_languages' => 0,
    'trad_link' => 0,
    'language' => 0,
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b1258803bc13_55668362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b1258803bc13_55668362')) {function content_53b1258803bc13_55668362($_smarty_tpl) {?>
<div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo smartyTranslate(array('s'=>'Manage translations'),$_smarty_tpl);?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['trad_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
#<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>