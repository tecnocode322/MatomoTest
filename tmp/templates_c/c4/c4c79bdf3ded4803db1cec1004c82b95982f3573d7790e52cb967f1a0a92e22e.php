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

/* @Feedback/index.twig */
class __TwigTemplate_bc2b73c334c58503d0c1ced885c3a02c34cda46b8751767a125fb21300815818 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["test_piwikUrl"] = "http://demo.matomo.org/";
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, ((($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")) == "http://demo.matomo.org/") || (($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")) == "https://demo.matomo.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AboutPiwikX", ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion"))]), "html", null, true);
        $context["headline"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@Feedback/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "
    <div id=\"feedback-faq\" class=\"admin\">
        <div piwik-content-block
             content-title=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, ($context["headline"] ?? $this->getContext($context, "headline")), "html_attr");
        echo "\"
             feature=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Help"]), "html_attr");
        echo "\">
            <p>";
        // line 14
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_MatomoIsACollaborativeProjectYouCanContributeAndDonateNextRelease", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/get-involved/'>", "</a>", "<a href='#donate'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/team/'>", "</a>"]);
        // line 23
        echo "
            </p>
        </div>

        <div piwik-content-block content-title=\"";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_HowCanWeHelp"]), "html_attr");
        echo "\" class=\"feedback-help-resources\">
            <form target=\"_blank\" method=\"GET\" action=\"https://matomo.org/\">
                <div class=\"search-matomo-form z-depth-1\">
                    <div class=\"search-field\">
                        <span class=\"icon-search\"></span>
                        <input type=\"text\" placeholder=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_SearchHelpResources"]), "html_attr");
        echo "\" name=\"s\"/>
                    </div>
                    <div class=\"search-button\">
                        <input type=\"submit\" value=\"Search\" class=\"btn hide-on-small-only\"/>
                    </div>
                </div>
            </form>

            <h4>";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_PopularHelpTopics"]), "html", null, true);
        echo "</h4>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popularHelpTopics"] ?? $this->getContext($context, "popularHelpTopics")));
        foreach ($context['_seq'] as $context["_key"] => $context["helpTopic"]) {
            // line 42
            echo "                <p> &bull;  <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["helpTopic"], "url", []), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$this->getAttribute($context["helpTopic"], "title", [])]), "html", null, true);
            echo "</a></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpTopic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
            <h4>";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_CommunityHelp"]), "html", null, true);
        echo "</h4>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/\">";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_UserGuides"]), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ViewUserGuides", "", ""]), "html", null, true);
        echo ".</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/\">";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_FAQs"]), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ViewAnswersToFAQ", "", ""]), "html", null, true);
        echo ".</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://forum.matomo.org/\">";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_Forums"]), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_VisitTheForums", "", ""]), "html", null, true);
        echo ".</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "API", "action" => "glossary"]]), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["API_Glossary"]), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["API_LearnAboutCommonlyUsedTerms2"]), "html", null, true);
        echo "</p>

            <h4>";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalHelp"]), "html", null, true);
        echo "</h4>
            <p>";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesIntro"]), "html", null, true);
        echo "</p>

            <p>";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesOfferIntro"]), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesDedicatedSupport"]), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesOnboarding"]), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesTraining"]), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesSupport"]), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 59
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalServicesEmailAlerts"]), "html", null, true);
        echo "</p>

            <form target=\"_blank\" action=\"https://matomo.org/support-plans/\">
                <input type=\"hidden\" name=\"pk_campaign\" value=\"App_Help\">
                <input type=\"hidden\" name=\"pk_source\" value=\"Matomo_App\">
                <input type=\"hidden\" name=\"pk_medium\" value=\"App_ContactUs_button\">
                <br />
                <input type=\"submit\" class=\"btn\" value=\"";
        // line 66
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_MoreDetails"]), "html", null, true);
        echo "\">
            </form>
        </div>

        <div piwik-content-block content-title=\"Premium products\">
            <p>Grow your business, understand your audience better and increase your sales and conversions with a premium plugin:
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/users-flow/'>Users Flow</a>: a visual representation of the most popular paths your users take through your website or app.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/ab-testing-learn-more/'>A/B Testing</a>: compare different versions of your websites or apps and detect the winning variation.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/conversion-funnels'>Funnels</a>: identify and understand where your visitors drop off in your conversion funnels.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/form-analytics/'>Form Analytics</a>: increase conversions and get better leads from your website forms.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/media-analytics-website/'>Video and Audio Analytics</a>: powerful insights into how your audience watches your videos and listens to your audio.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/roll-up-reporting/'>Roll-Up Reporting</a>: aggregate data from multiple websites, apps and shops into a Roll-Up site to gain new insights.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/search-keywords-performance/'>Search Keywords Performance</a>: all keywords searched by your users on Google+Bing+Yahoo into your Matomo reports.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/activity-log/'>Audit log</a>: better security and problem diagnostic with a detailed audit log of Matomo user activities.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/white-label/'>White Label</a>: give your clients access to their analytics reports where all Matomo-branded widgets are removed.</p>
            <p> &bull;  <strong><a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/premium-plugins'>All premium plugins.</a></strong></p>
        </div>

        <div piwik-content-block content-title=\"";
        // line 84
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_DoYouHaveBugReportOrFeatureRequest"]), "html_attr");
        echo "\">
            <p>";
        // line 85
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_HowToCreateTicket", "<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-bug-report'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-feature-request'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues/new'>", "</a>"]);
        // line 94
        echo "</p>
        </div>

        <div piwik-content-block content-title=\"";
        // line 97
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ReviewMatomoTitle"]), "html_attr");
        echo "\">
            <div ng-include=\"'plugins/Feedback/angularjs/feedback-popup/review-links.directive.html'\"></div>
        </div>

        <div class=\"footer\">
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.svg\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\">Newsletter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\">Facebook</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\">Twitter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/linkedin.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\">Linkedin</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/github.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/blog/\">Blog</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/get-involved/\">Get involved</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org\">Developers</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.matomo.org\">Marketplace</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/thank-you-all/\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>";
        // line 131
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_PrivacyClaim", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/privacy/'>", "</a>"]);
        // line 134
        echo "</small></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Feedback/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 134,  254 => 131,  217 => 97,  212 => 94,  210 => 85,  206 => 84,  185 => 66,  175 => 59,  171 => 58,  167 => 57,  163 => 56,  159 => 55,  155 => 54,  150 => 52,  146 => 51,  137 => 49,  131 => 48,  125 => 47,  119 => 46,  115 => 45,  112 => 44,  101 => 42,  97 => 41,  93 => 40,  82 => 32,  74 => 27,  68 => 23,  66 => 14,  62 => 13,  58 => 12,  53 => 9,  50 => 8,  45 => 1,  41 => 6,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.twig' %}

{% set test_piwikUrl='http://demo.matomo.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/'}}{% endset %}

{% set headline %}{{ 'General_AboutPiwikX'|translate(piwikVersion) }}{% endset %}

{% block content %}

    <div id=\"feedback-faq\" class=\"admin\">
        <div piwik-content-block
             content-title=\"{{ headline|e('html_attr') }}\"
             feature=\"{{ 'General_Help'|translate|e('html_attr') }}\">
            <p>{{ 'General_MatomoIsACollaborativeProjectYouCanContributeAndDonateNextRelease'|translate(
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org'>\",
                    \"</a>\",
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/get-involved/'>\",
                    \"</a>\",
                    \"<a href='#donate'>\",
                    \"</a>\",
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/team/'>\",
                    \"</a>\"
                )|raw }}
            </p>
        </div>

        <div piwik-content-block content-title=\"{{ \"Feedback_HowCanWeHelp\"|translate|e('html_attr') }}\" class=\"feedback-help-resources\">
            <form target=\"_blank\" method=\"GET\" action=\"https://matomo.org/\">
                <div class=\"search-matomo-form z-depth-1\">
                    <div class=\"search-field\">
                        <span class=\"icon-search\"></span>
                        <input type=\"text\" placeholder=\"{{'Feedback_SearchHelpResources'|translate|e('html_attr')}}\" name=\"s\"/>
                    </div>
                    <div class=\"search-button\">
                        <input type=\"submit\" value=\"Search\" class=\"btn hide-on-small-only\"/>
                    </div>
                </div>
            </form>

            <h4>{{'Feedback_PopularHelpTopics'|translate}}</h4>
            {% for helpTopic in popularHelpTopics %}
                <p> &bull;  <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{helpTopic.url|e('html_attr')}}\">{{helpTopic.title|translate}}</a></p>
            {% endfor %}

            <h4>{{ 'Feedback_CommunityHelp'|translate }}</h4>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/\">{{ 'Feedback_UserGuides'|translate }}</a> - {{ 'Feedback_ViewUserGuides'|translate(\"\",\"\") }}.</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/\">{{ 'Feedback_FAQs'|translate }}</a> - {{ 'Feedback_ViewAnswersToFAQ'|translate(\"\",\"\") }}.</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://forum.matomo.org/\">{{ 'Feedback_Forums'|translate }}</a> - {{ 'Feedback_VisitTheForums'|translate(\"\",\"\") }}.</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ linkTo({'module':\"API\",'action':\"glossary\"}) }}\">{{ 'API_Glossary'|translate }}</a> - {{ 'API_LearnAboutCommonlyUsedTerms2'|translate }}</p>

            <h4>{{ 'Feedback_ProfessionalHelp'|translate }}</h4>
            <p>{{ 'Feedback_ProfessionalServicesIntro'|translate }}</p>

            <p>{{ 'Feedback_ProfessionalServicesOfferIntro'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesDedicatedSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesOnboarding'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesTraining'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesEmailAlerts'|translate }}</p>

            <form target=\"_blank\" action=\"https://matomo.org/support-plans/\">
                <input type=\"hidden\" name=\"pk_campaign\" value=\"App_Help\">
                <input type=\"hidden\" name=\"pk_source\" value=\"Matomo_App\">
                <input type=\"hidden\" name=\"pk_medium\" value=\"App_ContactUs_button\">
                <br />
                <input type=\"submit\" class=\"btn\" value=\"{{ 'General_MoreDetails'|translate }}\">
            </form>
        </div>

        <div piwik-content-block content-title=\"Premium products\">
            <p>Grow your business, understand your audience better and increase your sales and conversions with a premium plugin:
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/users-flow/'>Users Flow</a>: a visual representation of the most popular paths your users take through your website or app.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/ab-testing-learn-more/'>A/B Testing</a>: compare different versions of your websites or apps and detect the winning variation.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/conversion-funnels'>Funnels</a>: identify and understand where your visitors drop off in your conversion funnels.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/form-analytics/'>Form Analytics</a>: increase conversions and get better leads from your website forms.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/media-analytics-website/'>Video and Audio Analytics</a>: powerful insights into how your audience watches your videos and listens to your audio.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/roll-up-reporting/'>Roll-Up Reporting</a>: aggregate data from multiple websites, apps and shops into a Roll-Up site to gain new insights.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/search-keywords-performance/'>Search Keywords Performance</a>: all keywords searched by your users on Google+Bing+Yahoo into your Matomo reports.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/activity-log/'>Audit log</a>: better security and problem diagnostic with a detailed audit log of Matomo user activities.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/white-label/'>White Label</a>: give your clients access to their analytics reports where all Matomo-branded widgets are removed.</p>
            <p> &bull;  <strong><a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/premium-plugins'>All premium plugins.</a></strong></p>
        </div>

        <div piwik-content-block content-title=\"{{ 'Feedback_DoYouHaveBugReportOrFeatureRequest'|translate|e('html_attr') }}\">
            <p>{{ 'Feedback_HowToCreateTicket'|translate(
            \"<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-bug-report'>\",
            \"</a>\",
            \"<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-feature-request'>\",
            \"</a>\",
            \"<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues'>\",
            \"</a>\",
            \"<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues/new'>\",
            \"</a>\"
            )|raw }}</p>
        </div>

        <div piwik-content-block content-title=\"{{'Feedback_ReviewMatomoTitle'|translate|e('html_attr') }}\">
            <div ng-include=\"'plugins/Feedback/angularjs/feedback-popup/review-links.directive.html'\"></div>
        </div>

        <div class=\"footer\">
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.svg\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\">Newsletter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\">Facebook</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\">Twitter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/linkedin.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\">Linkedin</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/github.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/blog/\">Blog</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/get-involved/\">Get involved</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org\">Developers</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.matomo.org\">Marketplace</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/thank-you-all/\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>{{ 'Feedback_PrivacyClaim'|translate(
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/privacy/'>\",
                    \"</a>\"
                )|raw}}</small></p>
        </div>
    </div>
{% endblock %}
", "@Feedback/index.twig", "C:\\wamp64\\www\\proyectos\\matomo\\plugins\\Feedback\\templates\\index.twig");
    }
}
