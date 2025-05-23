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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig */
class __TwigTemplate_7e6117fa5f8b094108f2043138e58fae369a182d59b741f3244d0e84b35321c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig"));

        // line 25
        echo "
<div class=\"col-12 col-lg-4 mb-3\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme library", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h2>
    <p class=\"text-muted\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose the default Classic theme for a simple and minimalist store.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <p class=\"text-muted\">
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can choose other themes with more advanced customization from this list of themes.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            id=\"add-theme\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
    >
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import theme", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </button>
    <div
            class=\"ps-dropdown-menu dropdown-menu\"
            aria-labelledby=\"add-theme\"
    >
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_computer_modal\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from computer", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_web_modal\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from web", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_ftp_modal\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from FTP", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 50,  84 => 49,  80 => 48,  71 => 42,  58 => 32,  52 => 29,  47 => 27,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"col-12 col-lg-4 mb-3\">
    <h2>{{ 'Theme library'|trans({}, 'Modules.Psxdesign.Admin') }}</h2>
    <p class=\"text-muted\">
        {{ 'Choose the default Classic theme for a simple and minimalist store.'|trans({}, 'Modules.Psxdesign.Admin') }}
    </p>
    <p class=\"text-muted\">
        {{ 'You can choose other themes with more advanced customization from this list of themes.'|trans({}, 'Modules.Psxdesign.Admin') }}
    </p>
    <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            id=\"add-theme\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
    >
        {{ 'Import theme'|trans({}, 'Modules.Psxdesign.Admin') }}
    </button>
    <div
            class=\"ps-dropdown-menu dropdown-menu\"
            aria-labelledby=\"add-theme\"
    >
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_computer_modal\">{{ 'Import from computer'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_web_modal\">{{ 'Import from web'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_ftp_modal\">{{ 'Import from FTP'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
    </div>
</div>
", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig", "C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\ThemeLibrary\\theme_library_description.html.twig");
    }
}
