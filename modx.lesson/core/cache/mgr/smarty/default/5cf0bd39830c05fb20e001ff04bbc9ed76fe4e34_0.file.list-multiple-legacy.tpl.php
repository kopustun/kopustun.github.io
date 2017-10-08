<?php /* Smarty version 3.1.27, created on 2017-09-23 11:53:35
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\element\tv\renders\input\list-multiple-legacy.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2484659c6210f8e6142_44967458%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf0bd39830c05fb20e001ff04bbc9ed76fe4e34' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\element\\tv\\renders\\input\\list-multiple-legacy.tpl',
      1 => 1505395721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484659c6210f8e6142_44967458',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'opts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c6210f9308e8_34123216',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c6210f9308e8_34123216')) {
function content_59c6210f9308e8_34123216 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2484659c6210f8e6142_44967458';
?>
<select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
[]" multiple <?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>width="$params.listWidth"<?php } else { ?>width="400"<?php }?> <?php if ($_smarty_tpl->tpl_vars['params']->value['listHeight']) {?>height="$params.listHeight"<?php } else { ?>height="100"<?php }?> style="<?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>width: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];?>
px;<?php } else { ?>width: 400px;<?php }
if ($_smarty_tpl->tpl_vars['params']->value['listHeight']) {?>height: <?php echo $_smarty_tpl->tpl_vars['params']->value['listHeight'];?>
px;<?php } else { ?>height: 100px;<?php }?>" class="modx-tv-legacy-select">
<?php
$_from = $_smarty_tpl->tpl_vars['opts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</select>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var el = Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
    el.on('change', MODx.fireResourceFormChange, el);
});

// ]]>
<?php echo '</script'; ?>
><?php }
}
?>