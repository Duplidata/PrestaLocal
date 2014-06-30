<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 10:53:24
         compiled from "C:\wamp\www\PrestaLocal\admin000\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510053b12584645d30-01493406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1127ecdabd3ed37da1c760794a64880a8464b3' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\admin000\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510053b12584645d30-01493406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b12584655730_10986502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b12584655730_10986502')) {function content_53b12584655730_10986502($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>