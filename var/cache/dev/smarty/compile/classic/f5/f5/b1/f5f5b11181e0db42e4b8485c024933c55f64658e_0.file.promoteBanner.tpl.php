<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:24:37
  from 'C:\xampp\htdocs\E_Commerce_PrestaShop\modules\psshipping\views\templates\hook\promoteBanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6be551d2b9_31330555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5f5b11181e0db42e4b8485c024933c55f64658e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\modules\\psshipping\\views\\templates\\hook\\promoteBanner.tpl',
      1 => 1745933210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f6be551d2b9_31330555 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['appLink']->value,'htmlall','UTF-8' ));?>
" type="module"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['appCss']->value,'htmlall','UTF-8' ));?>
" type="text/css" media="all">

<?php echo '<script'; ?>
>
document.addEventListener('DOMContentLoaded', function () {
  const contentMessageBox = document.querySelector('#content-message-box');

  if (!contentMessageBox) {
      return;
  }

  let promoteBanner = document.createElement('div');
  promoteBanner.setAttribute('id', 'promotePsshippingBanner');
  const content = `
    <i18n-host>
      <promote-shipping></promote-shipping>
    </i18n-host>
  `;
  promoteBanner.innerHTML = content;

  contentMessageBox.appendChild(promoteBanner);
});
<?php echo '</script'; ?>
>
<?php }
}
