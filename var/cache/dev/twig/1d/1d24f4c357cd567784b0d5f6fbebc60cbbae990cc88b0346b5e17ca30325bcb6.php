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

/* @Modules/psshipping/views/templates/admin/index.html.twig */
class __TwigTemplate_f146947e9449c1b502a4b2b64918f7b12123fed12d556df69428563288d04569 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psshipping/views/templates/admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psshipping/views/templates/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/psshipping/views/templates/admin/index.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "  <div id=\"psshipping-app\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
<style>
  body {
    background-color: white!important;
  }
</style>
";
        // line 33
        if ((0 === twig_compare((isset($context["hotReloadModeEnabled"]) || array_key_exists("hotReloadModeEnabled", $context) ? $context["hotReloadModeEnabled"] : (function () { throw new RuntimeError('Variable "hotReloadModeEnabled" does not exist.', 33, $this->source); })()), false))) {
            // line 34
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["appCss"]) || array_key_exists("appCss", $context) ? $context["appCss"] : (function () { throw new RuntimeError('Variable "appCss" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        if ((isset($context["hotReloadModeEnabled"]) || array_key_exists("hotReloadModeEnabled", $context) ? $context["hotReloadModeEnabled"] : (function () { throw new RuntimeError('Variable "hotReloadModeEnabled" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "  <script type=\"module\" src=\"http://localhost:5173/@vite/client\"></script>
  <script type=\"module\" src=\"http://localhost:5173/src/main.ts\"></script>
";
        } else {
            // line 43
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["appLink"]) || array_key_exists("appLink", $context) ? $context["appLink"] : (function () { throw new RuntimeError('Variable "appLink" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\" type=\"module\"></script>
";
        }
        // line 45
        echo "<script>
  var defaultIsoCode = '";
        // line 46
        echo (isset($context["defaultIsoCode"]) || array_key_exists("defaultIsoCode", $context) ? $context["defaultIsoCode"] : (function () { throw new RuntimeError('Variable "defaultIsoCode" does not exist.', 46, $this->source); })());
        echo "'
  var psxShippingApiUrl = '";
        // line 47
        echo (isset($context["psxShippingApiUrl"]) || array_key_exists("psxShippingApiUrl", $context) ? $context["psxShippingApiUrl"] : (function () { throw new RuntimeError('Variable "psxShippingApiUrl" does not exist.', 47, $this->source); })());
        echo "'
  var isOnboardingDone = ";
        // line 48
        echo twig_escape_filter($this->env, json_encode((isset($context["isOnboardingDone"]) || array_key_exists("isOnboardingDone", $context) ? $context["isOnboardingDone"] : (function () { throw new RuntimeError('Variable "isOnboardingDone" does not exist.', 48, $this->source); })())), "html", null, true);
        echo "
  var contextPsAccounts = ";
        // line 49
        echo json_encode((isset($context["contextPsAccounts"]) || array_key_exists("contextPsAccounts", $context) ? $context["contextPsAccounts"] : (function () { throw new RuntimeError('Variable "contextPsAccounts" does not exist.', 49, $this->source); })()));
        echo "
  var tokenPsAccounts = '";
        // line 50
        echo (isset($context["tokenPsAccounts"]) || array_key_exists("tokenPsAccounts", $context) ? $context["tokenPsAccounts"] : (function () { throw new RuntimeError('Variable "tokenPsAccounts" does not exist.', 50, $this->source); })());
        echo "'
  var psBillingContext = ";
        // line 51
        echo json_encode((isset($context["psBillingContext"]) || array_key_exists("psBillingContext", $context) ? $context["psBillingContext"] : (function () { throw new RuntimeError('Variable "psBillingContext" does not exist.', 51, $this->source); })()));
        echo "
  var isMultiShopContext = ";
        // line 52
        echo twig_escape_filter($this->env, json_encode((isset($context["isMultiShopContext"]) || array_key_exists("isMultiShopContext", $context) ? $context["isMultiShopContext"] : (function () { throw new RuntimeError('Variable "isMultiShopContext" does not exist.', 52, $this->source); })())), "html", null, true);
        echo "
  var shops = ";
        // line 53
        echo json_encode((isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 53, $this->source); })()));
        echo "
  var routes = ";
        // line 54
        echo json_encode((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 54, $this->source); })()));
        echo "
  var phpVersion = '";
        // line 55
        echo (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 55, $this->source); })());
        echo "'
  var moduleVersion = '";
        // line 56
        echo (isset($context["moduleVersion"]) || array_key_exists("moduleVersion", $context) ? $context["moduleVersion"] : (function () { throw new RuntimeError('Variable "moduleVersion" does not exist.', 56, $this->source); })());
        echo "'
  var cdnUrl = '";
        // line 57
        echo (isset($context["cdnUrl"]) || array_key_exists("cdnUrl", $context) ? $context["cdnUrl"] : (function () { throw new RuntimeError('Variable "cdnUrl" does not exist.', 57, $this->source); })());
        echo "'
  var psVersion = '";
        // line 58
        echo (isset($context["psVersion"]) || array_key_exists("psVersion", $context) ? $context["psVersion"] : (function () { throw new RuntimeError('Variable "psVersion" does not exist.', 58, $this->source); })());
        echo "'
  var activeHooks = ";
        // line 59
        echo json_encode((isset($context["activeHooks"]) || array_key_exists("activeHooks", $context) ? $context["activeHooks"] : (function () { throw new RuntimeError('Variable "activeHooks" does not exist.', 59, $this->source); })()));
        echo "
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psshipping/views/templates/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 59,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  139 => 45,  133 => 43,  128 => 40,  126 => 39,  116 => 38,  102 => 34,  100 => 33,  91 => 27,  81 => 26,  70 => 23,  60 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  <div id=\"psshipping-app\"></div>
{% endblock %}

{% block stylesheets %}
{{ parent() }} 
<style>
  body {
    background-color: white!important;
  }
</style>
{% if hotReloadModeEnabled == false %}
  <link rel=\"stylesheet\" href=\"{{ appCss }}\" type=\"text/css\" media=\"all\">
{% endif %}
{% endblock %}

{% block javascripts %}
{% if hotReloadModeEnabled %}
  <script type=\"module\" src=\"http://localhost:5173/@vite/client\"></script>
  <script type=\"module\" src=\"http://localhost:5173/src/main.ts\"></script>
{% else %}
  <script src=\"{{ appLink }}\" type=\"module\"></script>
{% endif %}
<script>
  var defaultIsoCode = '{{ defaultIsoCode|raw }}'
  var psxShippingApiUrl = '{{ psxShippingApiUrl|raw }}'
  var isOnboardingDone = {{ isOnboardingDone|json_encode }}
  var contextPsAccounts = {{ contextPsAccounts|json_encode|raw }}
  var tokenPsAccounts = '{{ tokenPsAccounts|raw }}'
  var psBillingContext = {{ psBillingContext|json_encode|raw }}
  var isMultiShopContext = {{ isMultiShopContext|json_encode }}
  var shops = {{ shops|json_encode|raw }}
  var routes = {{ routes|json_encode|raw }}
  var phpVersion = '{{ phpVersion|raw }}'
  var moduleVersion = '{{ moduleVersion|raw }}'
  var cdnUrl = '{{ cdnUrl|raw }}'
  var psVersion = '{{ psVersion|raw }}'
  var activeHooks = {{ activeHooks|json_encode|raw }}
</script>
{% endblock %}
", "@Modules/psshipping/views/templates/admin/index.html.twig", "C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\modules\\psshipping\\views\\templates\\admin\\index.html.twig");
    }
}
