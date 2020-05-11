<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_3b99c6e5b491a30328b1e982397739eb50b4a666d9cae76f2077c2be10511f90 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" show-all-sites-item=\"";
        // line 2
        echo ((($context["isMultiSitesEnabled"] ?? $this->getContext($context, "isMultiSitesEnabled"))) ? ("true") : ("false"));
        echo "\" class=\"sites_autocomplete\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" show-all-sites-item=\"{{ isMultiSitesEnabled ? 'true' : 'false' }}\" class=\"sites_autocomplete\"></div>
</div>
", "@CoreHome/_siteSelectHeader.twig", "C:\\wamp64\\www\\proyectos\\matomo\\plugins\\CoreHome\\templates\\_siteSelectHeader.twig");
    }
}
