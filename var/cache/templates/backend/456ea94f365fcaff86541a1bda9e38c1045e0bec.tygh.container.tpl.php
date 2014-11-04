<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:36:29
         compiled from "C:\xampp\htdocs\Underfashion\design\backend\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117625456254d688090-37938024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '456ea94f365fcaff86541a1bda9e38c1045e0bec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\backend\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1414707660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '117625456254d688090-37938024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'dynamic_object' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5456254d99d242_13319874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456254d99d242_13319874')) {function content_5456254d99d242_13319874($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('top_container_not_used','header_container_not_used','footer_container_not_used','insert_grid','insert_grid','container_options','enable_or_disable_container'));
?>
<div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
" class="container container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']!='CONTENT'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>container-lock<?php }?> <?php if ($_smarty_tpl->tpl_vars['container']->value['status']=="D") {?>container-off<?php }?> cm-sortable-container" <?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A") {?>data-ca-status="disabled"<?php } else { ?>data-ca-status="active"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']=='TOP_PANEL'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?><p><?php echo $_smarty_tpl->__("top_container_not_used");?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']=='HEADER'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?><p><?php echo $_smarty_tpl->__("header_container_not_used");?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']=='FOOTER'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?><p><?php echo $_smarty_tpl->__("footer_container_not_used");?>
</p><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']==1||$_smarty_tpl->tpl_vars['container']->value['position']=='CONTENT'||$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
    
    <div class="clearfix"></div>
    <div class="grid-control-menu bm-control-menu">
        <?php if ($_smarty_tpl->tpl_vars['container']->value['default']==1||$_smarty_tpl->tpl_vars['container']->value['position']=='CONTENT'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
            <div class="grid-control-menu-actions">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-plus cm-tooltip" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("insert_grid");?>
"></span></a>
                    <ul class="dropdown-menu droptop">
                        <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                    </ul>
                </div>
                <div class="cm-tooltip cm-action exicon-cog bm-action-properties action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("container_options");?>
"></div>
                <div class="cm-action bm-action-switch cm-tooltip exicon-off action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("enable_or_disable_container");?>
"></div>
            </div>
        <?php }?>

        <h4 class="grid-control-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['container']->value['position']);?>
</h4>
    </div>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<hr /><?php }} ?>
