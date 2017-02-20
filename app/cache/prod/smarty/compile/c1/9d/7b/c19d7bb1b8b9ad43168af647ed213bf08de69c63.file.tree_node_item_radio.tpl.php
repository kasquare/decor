<?php /* Smarty version Smarty-3.1.19, created on 2017-02-19 11:36:02
         compiled from "/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/adminkasquare/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55150188058a935ca7e8892-24734329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19d7bb1b8b9ad43168af647ed213bf08de69c63' => 
    array (
      0 => '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/adminkasquare/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1486203140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55150188058a935ca7e8892-24734329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a935ca838c79_78940678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a935ca838c79_78940678')) {function content_58a935ca838c79_78940678($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
