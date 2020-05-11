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

/* @ProfessionalServices/promoSessionRecordings.twig */
class __TwigTemplate_c2109ffdf094143b8a8d4e494ec91d27383973a9aed1aa145badd2f901cf2dcd extends \Twig\Template
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
        echo "<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/heatmap-session-recording-learn-more/\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoSessionRecordings.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/heatmap-session-recording-learn-more/\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
", "@ProfessionalServices/promoSessionRecordings.twig", "C:\\wamp64\\www\\proyectos\\matomo\\plugins\\ProfessionalServices\\templates\\promoSessionRecordings.twig");
    }
}
