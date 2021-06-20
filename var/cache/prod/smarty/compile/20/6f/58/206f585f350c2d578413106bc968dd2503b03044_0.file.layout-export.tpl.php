<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-21 00:16:08
  from 'C:\xampp\htdocs\Prestashop\admin\themes\default\template\layout-export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607f52a8d112d6_82736130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '206f585f350c2d578413106bc968dd2503b03044' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin\\themes\\default\\template\\layout-export.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f52a8d112d6_82736130 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['export_precontent']->value;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_headers']->value, 'header');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['header']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_content']->value, 'line');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['line']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['content']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
