<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 09:48:00
         compiled from "C:\wamp\www\PrestaLocal\themes\default-bootstrap\modules\cashondelivery\views\templates\front\validation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46353b116300e5079-08861574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eac8ad4e134203570e7bf761338b0c939a6ca7a' => 
    array (
      0 => 'C:\\wamp\\www\\PrestaLocal\\themes\\default-bootstrap\\modules\\cashondelivery\\views\\templates\\front\\validation.tpl',
      1 => 1403283606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46353b116300e5079-08861574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'currencies' => 0,
    'total' => 0,
    'use_taxes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b1163020a039_27058026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b1163020a039_27058026')) {function content_53b1163020a039_27058026($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Shipping','mod'=>'cashondelivery'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'cashondelivery'),$_smarty_tpl);?>
</h1>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
	<div class="box">
        <input type="hidden" name="confirm" value="1" />
        <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Cash on delivery (COD) payment','mod'=>'cashondelivery'),$_smarty_tpl);?>
</h3>
        <p>
            - <?php echo smartyTranslate(array('s'=>'You have chosen the Cash on Delivery method.','mod'=>'cashondelivery'),$_smarty_tpl);?>

            <br/>
            - <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'cashondelivery'),$_smarty_tpl);?>

            <span id="amount_<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['id_currency'];?>
" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl);?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1){?>
                <?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'cashondelivery'),$_smarty_tpl);?>

            <?php }?>
        </p>
        <p>
            <b><?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking \'I confirm my order\'.','mod'=>'cashondelivery'),$_smarty_tpl);?>
.</b>
        </p>        
    </div>
    <p class="cart_navigation" id="cart_navigation">
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
?step=3" class="button-exclusive btn btn-default"><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'cashondelivery'),$_smarty_tpl);?>
</a>
        <button type="submit" class="button btn btn-default button-medium"><span><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'cashondelivery'),$_smarty_tpl);?>
</span></button>
    </p>
</form>
<?php }} ?>