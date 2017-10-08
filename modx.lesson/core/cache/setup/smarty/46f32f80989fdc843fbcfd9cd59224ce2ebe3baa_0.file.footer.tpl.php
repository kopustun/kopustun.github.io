<?php /* Smarty version 3.1.27, created on 2017-09-14 16:28:50
         compiled from "E:\OSPanel\domains\modx.lesson\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:301559ba8412896925_81727880%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46f32f80989fdc843fbcfd9cd59224ce2ebe3baa' => 
    array (
      0 => 'E:\\OSPanel\\domains\\modx.lesson\\setup\\templates\\footer.tpl',
      1 => 1505387637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301559ba8412896925_81727880',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ba84128a0173_77822599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ba84128a0173_77822599')) {
function content_59ba84128a0173_77822599 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/OSPanel/domains/modx.lesson/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '301559ba8412896925_81727880';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>