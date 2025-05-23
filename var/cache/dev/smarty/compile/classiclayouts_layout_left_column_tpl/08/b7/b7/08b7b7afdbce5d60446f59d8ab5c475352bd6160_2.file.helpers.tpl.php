<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:34:24
  from 'C:\xampp\htdocs\E_Commerce_PrestaShop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6e308405c5_76163767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b7b7afdbce5d60446f59d8ab5c475352bd6160' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1738226099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f6e308405c5_76163767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\08\\b7\\b7\\08b7b7afdbce5d60446f59d8ab5c475352bd6160_2.file.helpers.tpl.php',
    'uid' => '08b7b7afdbce5d60446f59d8ab5c475352bd6160',
    'call_name' => 'smarty_template_function_renderLogo_839201981682f6e302bab18_89096201',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_839201981682f6e302bab18_89096201 */
if (!function_exists('smarty_template_function_renderLogo_839201981682f6e302bab18_89096201')) {
function smarty_template_function_renderLogo_839201981682f6e302bab18_89096201(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_839201981682f6e302bab18_89096201 */
}
