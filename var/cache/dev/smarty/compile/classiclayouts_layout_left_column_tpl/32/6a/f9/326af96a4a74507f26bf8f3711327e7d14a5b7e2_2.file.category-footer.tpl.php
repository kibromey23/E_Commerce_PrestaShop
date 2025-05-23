<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:34:40
  from 'C:\xampp\htdocs\E_Commerce_PrestaShop\themes\classic\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6e40616725_01228058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '326af96a4a74507f26bf8f3711327e7d14a5b7e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\themes\\classic\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1738226099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f6e40616725_01228058 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
