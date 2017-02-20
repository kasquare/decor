<?php /* Smarty version Smarty-3.1.19, created on 2017-02-19 12:18:50
         compiled from "/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/adminkasquare/themes/new-theme/template/helpers/kpi/kpi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116582325258a93fd27fa501-16939901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412dadb6337f41c6b5f8a617a7ea05e35b496976' => 
    array (
      0 => '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/adminkasquare/themes/new-theme/template/helpers/kpi/kpi.tpl',
      1 => 1486203139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116582325258a93fd27fa501-16939901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'id' => 0,
    'color' => 0,
    'tooltip' => 0,
    'icon' => 0,
    'chart' => 0,
    'title' => 0,
    'subtitle' => 0,
    'value' => 0,
    'source' => 0,
    'refresh' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a93fd28cb9a8_65619746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a93fd28cb9a8_65619746')) {function content_58a93fd28cb9a8_65619746($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/hermes/bosnaweb05a/b8/ipg.mymarriagefunction/stage/vendor/prestashop/smarty/plugins/modifier.replace.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['href']->value)&&$_smarty_tpl->tpl_vars['href']->value) {?>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
" class="kpi-container box-stats">
<?php } else { ?>
  <div id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
" class="kpi-container box-stats">
<?php }?>
  <div class="kpi-content -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['color']->value);?>
" data-original-title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tooltip']->value);?>
" data-toggle="tooltip">
    <?php if (isset($_smarty_tpl->tpl_vars['icon']->value)&&$_smarty_tpl->tpl_vars['icon']->value) {?>
      <i class="material-icons"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['icon']->value);?>
</i>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['chart']->value)&&$_smarty_tpl->tpl_vars['chart']->value) {?>
      <div class="boxchart-overlay">
        <div class="boxchart">
        </div>
      </div>
    <?php }?>
    <span class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['title']->value);?>
</span>
    <span cLass="subtitle"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subtitle']->value);?>
</span>
    <span class="value"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value),'&amp;','&');?>
</span>
  </div>
<?php if (isset($_smarty_tpl->tpl_vars['href']->value)&&$_smarty_tpl->tpl_vars['href']->value) {?>
  </a>
<?php } else { ?>
  </div>
<?php }?>

<script>
  function refresh_<?php echo addslashes(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
()
  {
    <?php if (!isset($_smarty_tpl->tpl_vars['source']->value)||$_smarty_tpl->tpl_vars['source']->value==''||!isset($_smarty_tpl->tpl_vars['refresh']->value)||$_smarty_tpl->tpl_vars['refresh']->value=='') {?>
    if (arguments.length < 1 || arguments[0] != true) {
      // refresh kpis only if force mode is true (pass true as first argument of this function).
      return;
    }
    <?php }?>
    $.ajax({
      url: '<?php echo addslashes($_smarty_tpl->tpl_vars['source']->value);?>
' + '&rand=' + new Date().getTime(),
      dataType: 'json',
      type: 'GET',
      cache: false,
      headers: { 'cache-control': 'no-cache' },
      success: function(jsonData){
        if (!jsonData.has_errors)
        {
          if (jsonData.value != undefined)
          {
            $('#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .value').html(jsonData.value);
            $('#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
').attr('data-original-title', jsonData.tooltip);
          }
          if (jsonData.data != undefined)
          {
            $("#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .boxchart svg").remove();
            set_d3_<?php echo addslashes(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
(jsonData.data);
          }
        }
      }
    });
  }
</script>

<?php if ($_smarty_tpl->tpl_vars['chart']->value) {?>
  <script>
    function set_d3_<?php echo addslashes(str_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
(jsonObject)
    {
      var data = new Array;
      $.each(jsonObject, function (index, value) {
        data.push(value);
      });
      var data_max = d3.max(data);

      var chart = d3.select("#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .boxchart").append("svg")
              .attr("class", "data_chart")
              .attr("width", data.length * 6)
              .attr("height", 45);

      var y = d3.scale.linear()
              .domain([0, data_max])
              .range([0, data_max * 45]);

      chart.selectAll("rect")
              .data(data)
              .enter().append("rect")
              .attr("y", function(d) { return 45 - d * 45 / data_max; })
              .attr("x", function(d, i) { return i * 6; })
              .attr("width", 4)
              .attr("height", y);
    }

    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    set_d3_<?php echo addslashes(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
($.parseJSON("<?php echo addslashes($_smarty_tpl->tpl_vars['data']->value);?>
"));
    <?php }?>
  </script>
<?php }?>
<?php }} ?>
