<?php /* Smarty version Smarty-3.1.19, created on 2017-02-04 16:24:45
         compiled from "module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19449321615895b2f56aee96-88292044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89661fbe7f9f4c111d8bdb6320dbdcd70e1222f8' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl',
      1 => 1486203147,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '19449321615895b2f56aee96-88292044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5895b2f56c71c5_65548082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5895b2f56c71c5_65548082')) {function content_5895b2f56c71c5_65548082($_smarty_tpl) {?>


<dl>
    <dt><?php echo smartyTranslate(array('s'=>'Amount','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Name of account owner','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireOwner']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Please include these details','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireDetails']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Bank name','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
</dd>
</dl>
<?php }} ?>
