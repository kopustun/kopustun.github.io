<?php /* Smarty version 3.1.27, created on 2017-09-14 16:36:25
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:808659ba85d9b9b465_38092074%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47eb91d96f037c4c29415bae0055f21ef51ac94b' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\workspaces\\index.tpl',
      1 => 1505395721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808659ba85d9b9b465_38092074',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ba85d9b9fe67_45262957',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ba85d9b9fe67_45262957')) {
function content_59ba85d9b9fe67_45262957 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '808659ba85d9b9b465_38092074';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>