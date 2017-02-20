<?php /* Smarty version Smarty-3.1.19, created on 2017-02-04 16:24:11
         compiled from "/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/themes/classic/templates/catalog/_partials/product-add-to-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11375180635895b2d365fee1-47373159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd62ab69ef93139e55b1f1911d8f76fa0ae12a643' => 
    array (
      0 => '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/themes/classic/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1486203136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11375180635895b2d365fee1-47373159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5895b2d36b1251_55552021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5895b2d36b1251_55552021')) {function content_5895b2d36b1251_55552021($_smarty_tpl) {?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
    
      <div class="product-quantity">
        <div class="qty">
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
          />
        </div>
        <div class="add">
          <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']||$_smarty_tpl->tpl_vars['product']->value['quantity_wanted']>$_smarty_tpl->tpl_vars['product']->value['quantity']) {?>disabled<?php }?>>
            <i class="material-icons shopping-cart">&#xE547;</i>
            <?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
          
            <span id="product-availability">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability']&&$_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['availability']=='available') {?>
                  <i class="material-icons product-available">&#xE5CA;</i>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability']=='last_remaining_items') {?>
                  <i class="material-icons product-last-items">&#xE002;</i>
                <?php } else { ?>
                  <i class="material-icons product-unavailable">&#xE14B;</i>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </span>
          
        </div>
      </div>
      <div class="clearfix"></div>
    

    
      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']>1) {?>
          <?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl);?>

        <?php }?>
      </p>
    
  <?php }?>
</div>
<?php }} ?>
