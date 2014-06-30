<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 10:53:23
         compiled from "C:\wamp\www\PrestaLocal\admin000\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1761453b12583b2b948-90839887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b4eca0abf6298cba148e52c610c9f592b67640a' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\admin000\\themes\\default\\template\\content.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761453b12583b2b948-90839887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b12583b62458_07952675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b12583b62458_07952675')) {function content_53b12583b62458_07952675($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>