<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:24:19
  from 'C:\xampp\htdocs\E_Commerce_PrestaShop\admin045wkkpopkosqteubek\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6bd36ed272_67721660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c80c21bd746b1c4d29c9c1df28533bf8580ccd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\admin045wkkpopkosqteubek\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1745933210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f6bd36ed272_67721660 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
