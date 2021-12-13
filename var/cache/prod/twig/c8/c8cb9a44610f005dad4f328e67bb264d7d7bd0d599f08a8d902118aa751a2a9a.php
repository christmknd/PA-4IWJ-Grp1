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

/* register_event/inscription_event_email_user.html.twig */
class __TwigTemplate_7ee77b0865dd83c7bd0882e0754d90e0c9253ca76b48e5cc50f7e2c15bfb876c extends Template
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
        // line 1
        echo "<h1>Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 1), "html", null, true);
        echo ", vous êtes bien inscrit à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "titre", [], "any", false, false, false, 1), "html", null, true);
        echo " !</h1>
<h2>Description</h2>
<p> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "description", [], "any", false, false, false, 3), "html", null, true);
        echo "</p>
<h3>Date</h3>
<p>
    Le ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "dateEvent", [], "any", false, false, false, 6), "format", [0 => "d-m-Y à H:i"], "method", false, false, false, 6), "html", null, true);
        echo "
</p>
<h3>Lieu</h3>
<p>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "address", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "zipCode", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "ville", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "pays", [], "any", false, false, false, 10), "html", null, true);
        echo "
</p>

<p>
    LaCarteDesAnimaux !
</p>
";
    }

    public function getTemplateName()
    {
        return "register_event/inscription_event_email_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  51 => 6,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register_event/inscription_event_email_user.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/register_event/inscription_event_email_user.html.twig");
    }
}
