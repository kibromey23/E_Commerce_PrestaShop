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

/* @Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig */
class __TwigTemplate_0ed32f0ddbe3d58dcdba52f8dc41b7abefba6a1595960d28a87159893417eda6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig"));

        // line 25
        echo "
<div class=\"file-uploader__item\">
    <button type=\"button\" class=\"btn file-uploader__remove-btn\">
        <i class=\"material-icons file-uploader__remove-icon\">cancel</i>
        <span class=\"sr-only\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove file", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
    </button>
    <div class=\"file-uploader__preview-container\">
        <img class=\"file-uploader__preview-img\" />
        <span class=\"file-uploader__preview-placeholder material-icons\">insert_drive_file</span>
    </div>
    <p class=\"file-uploader__name\" title=\"\"></p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 29,  43 => 25,);
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

<div class=\"file-uploader__item\">
    <button type=\"button\" class=\"btn file-uploader__remove-btn\">
        <i class=\"material-icons file-uploader__remove-icon\">cancel</i>
        <span class=\"sr-only\">{{ 'Remove file'|trans({}, 'Modules.Psxdesign.Admin') }}</span>
    </button>
    <div class=\"file-uploader__preview-container\">
        <img class=\"file-uploader__preview-img\" />
        <span class=\"file-uploader__preview-placeholder material-icons\">insert_drive_file</span>
    </div>
    <p class=\"file-uploader__name\" title=\"\"></p>
</div>
", "@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig", "C:\\xampp\\htdocs\\E_Commerce_PrestaShop\\modules\\psxdesign\\views\\templates\\components\\Partials\\file_uploader_preview_template.html.twig");
    }
}
