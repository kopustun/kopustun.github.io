<?php /* Smarty version 3.1.27, created on 2017-09-14 17:48:16
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1208859ba96b045c770_14750436%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89850485966c51b8873db190eaee412815ed67d2' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1505395720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208859ba96b045c770_14750436',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ba96b045d8e3_23219556',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ba96b045d8e3_23219556')) {
function content_59ba96b045d8e3_23219556 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1208859ba96b045c770_14750436';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>