<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__2e6ae0a256237a15a5ce1bf81493fc85263cdd6dc23e627ef6f49db03e092735 */
class __TwigTemplate_ce5afebf5b9c512f16bbd4bdb3b78718b270eb1d46cd57e2cbbd9b6665b3ebc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__2e6ae0a256237a15a5ce1bf81493fc85263cdd6dc23e627ef6f49db03e092735"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__2e6ae0a256237a15a5ce1bf81493fc85263cdd6dc23e627ef6f49db03e092735"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/E_Commerce_PrestaShop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/E_Commerce_PrestaShop/img/app_icon.png\" />

<title>Themes • KB Electronics</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignThemeGeneral';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'ET';
    var _PS_VERSION_ = '8.2.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '5c5ab6bd1c0d4700091ee51cd6f09896';
    var currentIndex = 'index.php?controller=AdminPsxDesignThemeGeneral';
    var employee_token = '092573a40b86b08e3ca1646f81b348f7';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ';
    var admin_notification_get_link = '/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/common/notifications?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ';
    var admin_notification_push_link = adminNotificationPushLink = '/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/common/notifications/ack?_token=Y-";
        // line 40
        echo "kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.b13cfc23.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
";
        // line 68
        echo "var baseAdminDir = \"\\/E_Commerce_PrestaShop\\/admin045wkkpopkosqteubek\\/\";
var baseDir = \"\\/E_Commerce_PrestaShop\\/\";
var changeFormLanguageUrl = \"\\/E_Commerce_PrestaShop\\/admin045wkkpopkosqteubek\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/E_Commerce_PrestaShop\\/admin045wkkpopkosqteubek\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\";
var importThemeLink = \"\\/E_Commerce_PrestaShop\\/admin045wkkpopkosqteubek\\/index.php\\/modules\\/improve\\/design\\/themes\\/import?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/";
        // line 84
        echo "javascript\" src=\"/E_Commerce_PrestaShop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/E_Commerce_PrestaShop\\/admin045wkkpopkosqteubek\\/index.php?controller=AdminGamification&token=074b753a97bc17bf4ee392bd2e2a3d4c\";
            var current_id_tab = 136;
        </script><script type=\"module\" src=\"/E_Commerce_PrestaShop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<s";
        // line 103
        echo "cript type=\"module\" src=\"/E_Commerce_PrestaShop/modules/psxdesign/views/js/index-themes.js\"></script>
    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/common/notifications?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 123
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminpsxdesignthemegeneral developer-mode\"
  data-base-url=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php\"  data-token=\"Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5714ba0c2a9dcea6b7aff63254c08a0e\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/categories/new?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/E_Commerce_PrestaShop/ad";
        // line 157
        echo "min045wkkpopkosqteubek/index.php/sell/catalog/products-v2/create?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5437c9bc2c8dad597080721804647fcf\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"108\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes?-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"
        data-post-link=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Themes - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form colla";
        // line 194
        echo "psed\"
      method=\"post\"
      action=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminSearch&amp;token=12bd18619cd9724b67a86bf0cb770a09\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">boo";
        // line 212
        echo "k</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5714ba0c2a9dcea6b7aff63254c08a0e\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/categories/new?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/products-v2/create?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             da";
        // line 247
        echo "ta-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5437c9bc2c8dad597080721804647fcf\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"139\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes?-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"
      data-post-link=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Themes - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All ";
        // line 288
        echo "the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/performance/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/E_Commerce_PrestaShop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
 ";
        // line 335
        echo "           >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=15a33f545fb2e210039e182a6ed39ef7\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_or";
        // line 383
        echo "der_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/E_Commerce_PrestaShop/img/pr/default.jpg\" alt=\"Kibrom\" /></span>
        <span class=\"employee_profile\">Welcome back Kibrom</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/employees/1/edit?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-";
        // line 426
        echo "icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminLogin&amp;logout=1&amp;token=d972d37162157def7fbf08ce30993b97\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sig";
        // line 444
        echo "n out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/employees/toggle-navigation?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                            ";
        // line 488
        echo "            </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminDashboard&amp;token=c33a7602e93c88395b43fbf0f90164c2\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                         ";
        // line 526
        echo "                                   </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/invoices/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/credit-slips/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=";
        // line 556
        echo "\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/delivery-slips/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarts&amp;token=15a33f545fb2e210039e182a6ed39ef7\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/products?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
    ";
        // line 586
        echo "                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/products?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/categories?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/monitoring/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpo";
        // line 614
        echo "pkosqteubek/index.php?controller=AdminAttributesGroups&amp;token=2d95572ff82d6de4d4830a18c807d934\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/brands/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/attachments/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCartRules&amp;token=5437c9bc2c8dad597080721804647fcf\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                          ";
        // line 643
        echo "    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/stocks/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/customers/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/customers/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Customers
           ";
        // line 672
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/addresses/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCustomerThreads&amp;token=b8bb1184f44851f01eb75dd9ca049cd6\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" dat";
        // line 703
        echo "a-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCustomerThreads&amp;token=b8bb1184f44851f01eb75dd9ca049cd6\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/customer-service/order-messages/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminReturn&amp;token=704d9a74e4fd28aa98842bb8ea462b62\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/metrics/legacy/stats?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e";
        // line 731
        echo "-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/metrics/legacy/stats?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/metrics?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title";
        // line 765
        echo " link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/modules/catalog/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/modules/catalog/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-A";
        // line 795
        echo "dminModulesSf\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=0cd6a7175f281607dbdc1f69be7e9f1d\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsThemeCusto";
        // line 821
        echo "Configuration&amp;token=0cd6a7175f281607dbdc1f69be7e9f1d\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/themes/catalog/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"135\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/themes?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/design/mail_theme/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                      ";
        // line 851
        echo "                                      
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/design/cms-pages/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/design/modules/positions/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminImages&amp;token=776cf0e229e5ee5a37526015f37ab768\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/link-widget/list?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=";
        // line 877
        echo "\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarriers&amp;token=4a124e49c3bc8fca79de166970fb13d5\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarriers&amp;token=4a124e49c3bc8fca79de166970fb13d5\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5";
        // line 909
        echo "2\" id=\"subtab-AdminShipping\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/shipping/preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/payment/payment_methods?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/payment/payment_methods?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                       ";
        // line 939
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/payment/preferences?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/localization/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek";
        // line 968
        echo "/index.php/improve/international/localization/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/zones/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/taxes/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/translations/settings?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                          ";
        // line 997
        echo "              </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"140\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7ae144d272b4286cc8cd8a2f7763c5cb\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-140\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7ae144d272b4286cc8cd8a2f7763c5cb\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsfaceb";
        // line 1025
        echo "ookModule&amp;token=0041d92ee3405ba36e2a0cd0da763cc1\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/settings?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/preferences/preferences?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-se";
        // line 1062
        echo "ttings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/preferences/preferences?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/order-preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteub";
        // line 1091
        echo "ek/index.php/configure/shop/product-preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/customer-preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/contacts/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/seo-urls/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
            ";
        // line 1120
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminSearchConf&amp;token=b62cecd8b2b313282d980304cb5af8e0\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/system-information/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/ad";
        // line 1148
        echo "vanced/system-information/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/performance/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/administration/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/emails/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                         ";
        // line 1178
        echo "                                   
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/import/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/employees/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/sql-requests/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/logs/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Logs
 ";
        // line 1205
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/webservice-keys/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/feature-flags/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/security/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Security
                                </a>
                              </li>

                                                       ";
        // line 1232
        echo "                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"128\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminKlaviyoPsConfig&amp;token=046483f2b894824c78f744e9f3cb19be\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Customization</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/themes?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" aria-current=\"page\">Themes</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Themes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/en";
        // line 1285
        echo "/doc/AdminPsxDesignThemeGeneral?version=8.2.1&amp;country=en\" title=\"Help\">
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/themes?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"136\">
                      Themes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/logos?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignLogos\" class=";
        // line 1307
        echo "\"nav-link tab \" data-submenu=\"137\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/colors?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"138\">
                      Colors
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/fonts?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"139\">
                      Fonts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ";
        // line 1330
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                   </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminPsxDesignThemeGeneral?version=8.2.1&amp;country=en\" title=\"Help\">
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1361
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1395
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1361
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1395
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__2e6ae0a256237a15a5ce1bf81493fc85263cdd6dc23e627ef6f49db03e092735";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1662 => 1395,  1593 => 1361,  1558 => 123,  1543 => 1395,  1503 => 1361,  1470 => 1330,  1445 => 1307,  1421 => 1285,  1366 => 1232,  1337 => 1205,  1308 => 1178,  1276 => 1148,  1246 => 1120,  1215 => 1091,  1184 => 1062,  1145 => 1025,  1115 => 997,  1084 => 968,  1053 => 939,  1021 => 909,  987 => 877,  959 => 851,  927 => 821,  899 => 795,  867 => 765,  831 => 731,  801 => 703,  768 => 672,  737 => 643,  706 => 614,  676 => 586,  644 => 556,  612 => 526,  572 => 488,  526 => 444,  506 => 426,  461 => 383,  411 => 335,  362 => 288,  319 => 247,  282 => 212,  262 => 194,  223 => 157,  184 => 123,  162 => 103,  141 => 84,  123 => 68,  93 => 40,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/E_Commerce_PrestaShop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/E_Commerce_PrestaShop/img/app_icon.png\" />

<title>Themes • KB Electronics</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPsxDesignThemeGeneral\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'ET\\';
    var _PS_VERSION_ = \\'8.2.1\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'5c5ab6bd1c0d4700091ee51cd6f09896\\';
    var currentIndex = \\'index.php?controller=AdminPsxDesignThemeGeneral\\';
    var employee_token = \\'092573a40b86b08e3ca1646f81b348f7\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\\';
    var admin_notification_get_link = \\'/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/common/notifications?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/common/notifications/ack?_token=Y-' | raw }}{{ 'kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
  </script>



<link
      rel=\"preload\"
      href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.b13cfc23.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/E_Commerce_PrestaShop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
' | raw }}{{ 'var baseAdminDir = \"\\\\/E_Commerce_PrestaShop\\\\/admin045wkkpopkosqteubek\\\\/\";
var baseDir = \"\\\\/E_Commerce_PrestaShop\\\\/\";
var changeFormLanguageUrl = \"\\\\/E_Commerce_PrestaShop\\\\/admin045wkkpopkosqteubek\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\\\/E_Commerce_PrestaShop\\\\/admin045wkkpopkosqteubek\\\\/index.php\\\\/modules\\\\/improve\\\\/design\\\\/user\\\\/userId?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\";
var importThemeLink = \"\\\\/E_Commerce_PrestaShop\\\\/admin045wkkpopkosqteubek\\\\/index.php\\\\/modules\\\\/improve\\\\/design\\\\/themes\\\\/import?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psxDesignUpdateNotification = \"\\\\n<div class=\\\\\"psxdesign-notification\\\\\">\\\\n  1\\\\n<\\\\/div>\\\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/' | raw }}{{ 'javascript\" src=\"/E_Commerce_PrestaShop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/E_Commerce_PrestaShop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/E_Commerce_PrestaShop\\\\/admin045wkkpopkosqteubek\\\\/index.php?controller=AdminGamification&token=074b753a97bc17bf4ee392bd2e2a3d4c\";
            var current_id_tab = 136;
        </script><script type=\"module\" src=\"/E_Commerce_PrestaShop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<s' | raw }}{{ 'cript type=\"module\" src=\"/E_Commerce_PrestaShop/modules/psxdesign/views/js/index-themes.js\"></script>
    <script>
        window.userLocale  = \\'en\\';
        window.userflow_id = \\'ct_55jfryadgneorc45cjqxpbf6o4\\';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/common/notifications?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminpsxdesignthemegeneral developer-mode\"
  data-base-url=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php\"  data-token=\"Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5714ba0c2a9dcea6b7aff63254c08a0e\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/categories/new?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/E_Commerce_PrestaShop/ad' | raw }}{{ 'min045wkkpopkosqteubek/index.php/sell/catalog/products-v2/create?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5437c9bc2c8dad597080721804647fcf\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"108\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes?-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"
        data-post-link=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Themes - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form colla' | raw }}{{ 'psed\"
      method=\"post\"
      action=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminSearch&amp;token=12bd18619cd9724b67a86bf0cb770a09\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">boo' | raw }}{{ 'k</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5714ba0c2a9dcea6b7aff63254c08a0e\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/categories/new?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/products-v2/create?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             da' | raw }}{{ 'ta-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5437c9bc2c8dad597080721804647fcf\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders?token=5ea1e9f3bab2bc4eb548bb17fc140885\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"139\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes?-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"
      data-post-link=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Themes - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminQuickAccesses&token=076e13cbd7e15915e0e805fd839f8adc\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All ' | raw }}{{ 'the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/performance/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/E_Commerce_PrestaShop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
 ' | raw }}{{ '           >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=15a33f545fb2e210039e182a6ed39ef7\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_or' | raw }}{{ 'der_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/E_Commerce_PrestaShop/img/pr/default.jpg\" alt=\"Kibrom\" /></span>
        <span class=\"employee_profile\">Welcome back Kibrom</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/employees/1/edit?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-' | raw }}{{ 'icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminLogin&amp;logout=1&amp;token=d972d37162157def7fbf08ce30993b97\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sig' | raw }}{{ 'n out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/employees/toggle-navigation?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                            ' | raw }}{{ '            </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminDashboard&amp;token=c33a7602e93c88395b43fbf0f90164c2\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                         ' | raw }}{{ '                                   </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/invoices/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/credit-slips/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=' | raw }}{{ '\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/orders/delivery-slips/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarts&amp;token=15a33f545fb2e210039e182a6ed39ef7\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/products?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
    ' | raw }}{{ '                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/products?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/categories?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/monitoring/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpo' | raw }}{{ 'pkosqteubek/index.php?controller=AdminAttributesGroups&amp;token=2d95572ff82d6de4d4830a18c807d934\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/catalog/brands/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/attachments/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCartRules&amp;token=5437c9bc2c8dad597080721804647fcf\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                          ' | raw }}{{ '    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/stocks/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/customers/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/customers/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Customers
           ' | raw }}{{ '                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/addresses/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCustomerThreads&amp;token=b8bb1184f44851f01eb75dd9ca049cd6\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" dat' | raw }}{{ 'a-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCustomerThreads&amp;token=b8bb1184f44851f01eb75dd9ca049cd6\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/sell/customer-service/order-messages/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminReturn&amp;token=704d9a74e4fd28aa98842bb8ea462b62\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/metrics/legacy/stats?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e' | raw }}{{ '-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/metrics/legacy/stats?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/metrics?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title' | raw }}{{ ' link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/modules/catalog/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/modules/catalog/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-A' | raw }}{{ 'dminModulesSf\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/modules/manage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=0cd6a7175f281607dbdc1f69be7e9f1d\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsThemeCusto' | raw }}{{ 'Configuration&amp;token=0cd6a7175f281607dbdc1f69be7e9f1d\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/mbo/themes/catalog/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"135\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/themes?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/design/mail_theme/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                      ' | raw }}{{ '                                      
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/design/cms-pages/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/design/modules/positions/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminImages&amp;token=776cf0e229e5ee5a37526015f37ab768\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/link-widget/list?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=' | raw }}{{ '\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarriers&amp;token=4a124e49c3bc8fca79de166970fb13d5\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminCarriers&amp;token=4a124e49c3bc8fca79de166970fb13d5\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5' | raw }}{{ '2\" id=\"subtab-AdminShipping\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/shipping/preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/payment/payment_methods?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/payment/payment_methods?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                       ' | raw }}{{ '                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/payment/preferences?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/localization/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek' | raw }}{{ '/index.php/improve/international/localization/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/zones/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/taxes/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/improve/international/translations/settings?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                          ' | raw }}{{ '              </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"140\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7ae144d272b4286cc8cd8a2f7763c5cb\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-140\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7ae144d272b4286cc8cd8a2f7763c5cb\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminPsfaceb' | raw }}{{ 'ookModule&amp;token=0041d92ee3405ba36e2a0cd0da763cc1\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/settings?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/preferences/preferences?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-se' | raw }}{{ 'ttings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/preferences/preferences?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/order-preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteub' | raw }}{{ 'ek/index.php/configure/shop/product-preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/customer-preferences/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/contacts/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/shop/seo-urls/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
            ' | raw }}{{ '                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminSearchConf&amp;token=b62cecd8b2b313282d980304cb5af8e0\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/system-information/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/ad' | raw }}{{ 'vanced/system-information/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/performance/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/administration/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/emails/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                         ' | raw }}{{ '                                   
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/import/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/employees/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/sql-requests/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/logs/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Logs
 ' | raw }}{{ '                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/webservice-keys/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/feature-flags/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/configure/advanced/security/?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"link\"> Security
                                </a>
                              </li>

                                                       ' | raw }}{{ '                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"128\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php?controller=AdminKlaviyoPsConfig&amp;token=046483f2b894824c78f744e9f3cb19be\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Customization</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/themes?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" aria-current=\"page\">Themes</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Themes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/en' | raw }}{{ '/doc/AdminPsxDesignThemeGeneral?version=8.2.1&amp;country=en\" title=\"Help\">
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/themes?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"136\">
                      Themes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/logos?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignLogos\" class=' | raw }}{{ '\"nav-link tab \" data-submenu=\"137\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/colors?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"138\">
                      Colors
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/improve/design/fonts?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"139\">
                      Fonts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                                                                   </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminPsxDesignThemeGeneral?version=8.2.1&amp;country=en\" title=\"Help\">
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/E_Commerce_PrestaShop/admin045wkkpopkosqteubek/index.php/modules/pseditionbasic/homepage?_token=Y-kFSAQNUlqlm_EYw4LyxGzW0m4e-woTp0g87O6bNgQ\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__2e6ae0a256237a15a5ce1bf81493fc85263cdd6dc23e627ef6f49db03e092735", "");
    }
}
