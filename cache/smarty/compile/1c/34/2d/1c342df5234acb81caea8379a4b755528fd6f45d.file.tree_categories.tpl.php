<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 09:48:57
         compiled from "C:\wamp\www\PrestaLocal\admin\themes\default\template\helpers\tree\tree_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287053b11669d889a7-80742453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c342df5234acb81caea8379a4b755528fd6f45d' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\admin\\themes\\default\\template\\helpers\\tree\\tree_categories.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287053b11669d889a7-80742453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
    'use_checkbox' => 0,
    'use_search' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b11669f03885_42371525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b11669f03885_42371525')) {function content_53b11669f03885_42371525($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)){?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)){?>
	<ul id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['use_checkbox']->value)&&$_smarty_tpl->tpl_vars['use_checkbox']->value==true){?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
				}
			);
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", false);
					$(this).parent().removeClass("tree-selected");
				}
			);
		}
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['use_search']->value)&&$_smarty_tpl->tpl_vars['use_search']->value==true){?>
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-categories-search").bind("typeahead:selected", function(obj, datum) {
		    $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($(this).val() == datum.id_category)
					{
						<?php if ((!(isset($_smarty_tpl->tpl_vars['use_checkbox']->value)&&$_smarty_tpl->tpl_vars['use_checkbox']->value==true))){?>
							$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 label").removeClass("tree-selected");
						<?php }?>
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents('ul.tree').each(function(){
							$(this).show();
							$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');	
						});
					}
				}
			);
		});
	<?php }?>
	$(document).ready(function () {
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").tree("collapseAll");

		<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)){?>
			<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
			var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_categories) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents('ul.tree').each(function(){
							$(this).show();
							$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');	
						});
					}
				}
			);
		<?php }?>
	});
</script><?php }} ?>