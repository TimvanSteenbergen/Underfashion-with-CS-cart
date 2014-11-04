<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:33:51
         compiled from "C:\xampp\htdocs\Underfashion\design\backend\templates\common\loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31046545624afb3b3a1-90031258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5313bf42e4382587ebcccab9c78f589c09be86a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\backend\\templates\\common\\loading_box.tpl',
      1 => 1414707660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '31046545624afb3b3a1-90031258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545624afb52ab3_98423991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545624afb52ab3_98423991')) {function content_545624afb52ab3_98423991($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
