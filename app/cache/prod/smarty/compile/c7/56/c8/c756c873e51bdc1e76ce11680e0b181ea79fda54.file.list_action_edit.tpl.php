<?php /* Smarty version Smarty-3.1.19, created on 2017-02-19 11:35:40
         compiled from "/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/adminkasquare/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106418078458a935b471bde7-17573869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c756c873e51bdc1e76ce11680e0b181ea79fda54' => 
    array (
      0 => '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/adminkasquare/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1486203141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106418078458a935b471bde7-17573869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a935b477f018_33466432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a935b477f018_33466432')) {function content_58a935b477f018_33466432($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a><?php }} ?>
