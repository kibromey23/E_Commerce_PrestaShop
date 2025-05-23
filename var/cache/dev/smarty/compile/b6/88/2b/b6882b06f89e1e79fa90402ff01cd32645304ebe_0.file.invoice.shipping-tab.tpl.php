<?php
/* Smarty version 4.3.4, created on 2025-05-22 22:19:31
  from 'C:\xampp\htdocs\E_Commerce_PrestaShop\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f78c33f3ae5_84221502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6882b06f89e1e79fa90402ff01cd32645304ebe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\pdf\\invoice.shipping-tab.tpl',
      1 => 1745933210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f78c33f3ae5_84221502 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
