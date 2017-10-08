<?php /* Smarty version 3.1.27, created on 2017-09-14 16:29:47
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2688659ba844b7b82d0_85669864%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8ab75d82253ad5a4caf219ab10b22248d053b5a' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\welcome.tpl',
      1 => 1505395721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2688659ba844b7b82d0_85669864',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ba844b7b9774_21400647',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ba844b7b9774_21400647')) {
function content_59ba844b7b9774_21400647 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2688659ba844b7b82d0_85669864';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>