<?php /* Smarty version 3.1.27, created on 2017-09-17 14:02:38
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1306859be564eaf80d0_49105675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21dbeb4f3681442cec4463b1242505cd182b2e3c' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1505395720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1306859be564eaf80d0_49105675',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59be564eb02b16_52461622',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59be564eb02b16_52461622')) {
function content_59be564eb02b16_52461622 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1306859be564eaf80d0_49105675';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>