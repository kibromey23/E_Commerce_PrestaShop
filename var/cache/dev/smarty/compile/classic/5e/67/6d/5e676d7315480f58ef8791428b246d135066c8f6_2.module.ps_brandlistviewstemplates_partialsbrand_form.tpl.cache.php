<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:34:35
  from 'module:ps_brandlistviewstemplates_partialsbrand_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6e3b35bab8_89537932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e676d7315480f58ef8791428b246d135066c8f6' => 
    array (
      0 => 'module:ps_brandlistviewstemplates_partialsbrand_form.tpl',
      1 => 1738226099,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f6e3b35bab8_89537932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208571657682f6e3b359865_38238476';
?>
<!-- begin C:\xampp\htdocs\E_Commerce_PrestaShop/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_form.tpl -->
<div class="brands-sort dropdown">
  <button
    class="btn-unstyle select-title"
    rel="nofollow"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <i class="material-icons float-xs-right">arrow_drop_down</i>
  </button>
  <div class="dropdown-menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list js-search-link"
      >
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<!-- end C:\xampp\htdocs\E_Commerce_PrestaShop/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_form.tpl --><?php }
}
