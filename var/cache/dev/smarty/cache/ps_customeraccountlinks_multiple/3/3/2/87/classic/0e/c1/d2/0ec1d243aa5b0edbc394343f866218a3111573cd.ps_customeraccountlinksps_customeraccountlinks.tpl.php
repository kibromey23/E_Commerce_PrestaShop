<?php
/* Smarty version 4.3.4, created on 2025-05-22 21:34:42
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682f6e4256ace5_42984152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1738226099,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_682f6e4256ace5_42984152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\08\\b7\\b7\\08b7b7afdbce5d60446f59d8ab5c475352bd6160_2.file.helpers.tpl.php',
    'uid' => '08b7b7afdbce5d60446f59d8ab5c475352bd6160',
    'call_name' => 'smarty_template_function_renderLogo_839201981682f6e302bab18_89096201',
  ),
));
?><!-- begin C:\xampp\htdocs\E_Commerce_PrestaShop/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/E_Commerce_PrestaShop/my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/E_Commerce_PrestaShop/identity" title="Information" rel="nofollow">Information</a></li>
                  <li><a href="http://localhost/E_Commerce_PrestaShop/addresses" title="Addresses" rel="nofollow">Addresses</a></li>
                          <li><a href="http://localhost/E_Commerce_PrestaShop/order-history" title="Orders" rel="nofollow">Orders</a></li>
                          <li><a href="http://localhost/E_Commerce_PrestaShop/credit-slip" title="Credit slips" rel="nofollow">Credit slips</a></li>
                                
<!-- begin module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- begin C:\xampp\htdocs\E_Commerce_PrestaShop/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
  <li>
    <a href="http://localhost/E_Commerce_PrestaShop/module/blockwishlist/lists" title="My wishlists" rel="nofollow">
      Wishlist
    </a>
  </li>
<!-- end C:\xampp\htdocs\E_Commerce_PrestaShop/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->

<!-- begin C:\xampp\htdocs\E_Commerce_PrestaShop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->
<li>
  <a href="//localhost/E_Commerce_PrestaShop/module/ps_emailalerts/account" title="My alerts">
    My alerts
  </a>
</li>

<!-- end C:\xampp\htdocs\E_Commerce_PrestaShop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->

        <li><a href="http://localhost/E_Commerce_PrestaShop/?mylogout=" title="Log me out" rel="nofollow">Sign out</a></li>
       
	</ul>
</div>
<!-- end C:\xampp\htdocs\E_Commerce_PrestaShop/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
