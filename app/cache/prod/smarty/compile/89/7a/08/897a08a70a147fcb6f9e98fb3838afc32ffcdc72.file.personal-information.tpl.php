<?php /* Smarty version Smarty-3.1.19, created on 2017-02-04 16:24:44
         compiled from "/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/themes/classic/templates/checkout/_partials/steps/personal-information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1937292975895b2f4df70b8-53867366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897a08a70a147fcb6f9e98fb3838afc32ffcdc72' => 
    array (
      0 => '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/themes/classic/templates/checkout/_partials/steps/personal-information.tpl',
      1 => 1486203136,
      2 => 'file',
    ),
    'a5b86054dfeba2b969554182cc432c0afebd8e77' => 
    array (
      0 => '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/themes/classic/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1486203136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1937292975895b2f4df70b8-53867366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'step_is_current' => 0,
    'step_is_reachable' => 0,
    'step_is_complete' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5895b2f4eddd67_02034154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5895b2f4eddd67_02034154')) {function content_5895b2f4eddd67_02034154($_smarty_tpl) {?>
<section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
          class = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value)), ENT_QUOTES, 'UTF-8');?>
"
>
  <h1 class="step-title h3">
    <i class="material-icons done">&#xE876;</i>
    <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> edit</span>
  </h1>

  <div class="content">
    
  <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']&&!$_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>

    <p class="identity">
      
      <?php echo smartyTranslate(array('s'=>'Connected as [1]%firstname% %lastname%[/1].','d'=>'Shop.Theme.CustomerAccount','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['urls']->value['pages']['identity'])."'>",'[/1]'=>"</a>",'%firstname%'=>$_smarty_tpl->tpl_vars['customer']->value['firstname'],'%lastname%'=>$_smarty_tpl->tpl_vars['customer']->value['lastname'])),$_smarty_tpl);?>

    </p>
    <p>
      
      <?php echo smartyTranslate(array('s'=>'Not you? [1]Log out[/1]','d'=>'Shop.Theme.CustomerAccount','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['urls']->value['actions']['logout'])."'>",'[/1]'=>"</a>")),$_smarty_tpl);?>

    </p>
    <p><small><?php echo smartyTranslate(array('s'=>'If you sign out now, your cart will be emptied.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</small></p>

  <?php } else { ?>

    <ul class="nav nav-inline m-y-2">
      <li class="nav-item">
        <a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['show_login_form']->value) {?>active<?php }?>" data-toggle="tab" href="#checkout-guest-form" role="tab">
          <?php if ($_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
            <?php echo smartyTranslate(array('s'=>'Order as a guest','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

          <?php } else { ?>
            <?php echo smartyTranslate(array('s'=>'Create an account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

          <?php }?>
        </a>
      </li>

      <li class="nav-item">
        <span href="nav-separator"> | </span>
      </li>

      <li class="nav-item">
        <a
          class="nav-link <?php if ($_smarty_tpl->tpl_vars['show_login_form']->value) {?>active<?php }?>"
          data-link-action="show-login-form"
          data-toggle="tab"
          href="#checkout-login-form"
          role="tab"
        >
          <?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['show_login_form']->value) {?>active<?php }?>" id="checkout-guest-form" role="tabpanel">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'checkout/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value,'guest_allowed'=>$_smarty_tpl->tpl_vars['guest_allowed']->value),$_smarty_tpl);?>

      </div>
      <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['show_login_form']->value) {?>active<?php }?>" id="checkout-login-form" role="tabpanel">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'checkout/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl);?>

      </div>
    </div>


  <?php }?>

  </div>
</section>
<?php }} ?>
