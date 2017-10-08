<?php /* Smarty version 3.1.27, created on 2017-09-22 13:15:22
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\resource\symlink\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2530859c4e2ba298493_06389172%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693afb66b61e211410e2d399e7a23c27803adb52' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\resource\\symlink\\update.tpl',
      1 => 1505395721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2530859c4e2ba298493_06389172',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c4e2ba3be4c6_30597568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c4e2ba3be4c6_30597568')) {
function content_59c4e2ba3be4c6_30597568 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2530859c4e2ba298493_06389172';
?>
<div id="modx-panel-symlink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>