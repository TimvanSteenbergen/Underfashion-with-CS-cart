<?php /* Smarty version Smarty-3.1.18, created on 2014-11-03 10:46:03
         compiled from "C:\xampp\htdocs\Underfashion\design\themes\responsive\templates\views\products\components\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13715545724ab735be7-05301388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f403c519b4f0428ade90c611f193addb9ba21146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\themes\\responsive\\templates\\views\\products\\components\\notification.tpl',
      1 => 1414716900,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13715545724ab735be7-05301388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_info' => 0,
    'product_buttons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545724ab954be9_71863589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545724ab954be9_71863589')) {function content_545724ab954be9_71863589($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="ty-product-notification__body cm-notification-max-height"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->tpl_vars['product_info']->value;?>
</div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<div class="ty-product-notification__body cm-notification-max-height"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->tpl_vars['product_info']->value;?>
</div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php }?><?php }} ?>
