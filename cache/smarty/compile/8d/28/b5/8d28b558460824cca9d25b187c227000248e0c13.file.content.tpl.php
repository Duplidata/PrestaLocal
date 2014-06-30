<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 10:55:29
         compiled from "C:\wamp\www\PrestaLocal\admin000\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:384453b1260145e195-98753578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d28b558460824cca9d25b187c227000248e0c13' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\admin000\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '384453b1260145e195-98753578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b126014ac3a2_11712154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b126014ac3a2_11712154')) {function content_53b126014ac3a2_11712154($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>