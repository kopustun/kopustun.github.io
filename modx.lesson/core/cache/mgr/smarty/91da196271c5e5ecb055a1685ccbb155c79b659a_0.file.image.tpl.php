<?php /* Smarty version 3.1.27, created on 2017-09-16 13:38:33
         compiled from "E:\OSPanel\domains\modx.lesson\super\templates\default\element\tv\renders\inputproperties\image.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1945459bcff2930cde3_86774742%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91da196271c5e5ecb055a1685ccbb155c79b659a' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\super\\templates\\default\\element\\tv\\renders\\inputproperties\\image.tpl',
      1 => 1505395721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1945459bcff2930cde3_86774742',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59bcff29370fa3_51822668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59bcff29370fa3_51822668')) {
function content_59bcff29370fa3_51822668 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1945459bcff2930cde3_86774742';
?>
<div id="tv-input-properties-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->tpl_vars['params']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_p'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_p']->value['total'];
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['last'] : null)) {?>,<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,labelAlign: 'top'
    ,border: false
    ,items: []
    ,renderTo: 'tv-input-properties-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
});
// ]]>
<?php echo '</script'; ?>
>

<?php }
}
?>