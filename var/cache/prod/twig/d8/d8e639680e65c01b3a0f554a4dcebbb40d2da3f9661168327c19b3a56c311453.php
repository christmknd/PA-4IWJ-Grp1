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

/* annonce/_delete_form.html.twig */
class __TwigTemplate_f340f14ea44e2ad496f70800abfbe4857123fff183fce2e50e1210df09d4bf80 extends Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", [], "any", false, false, false, 3))), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"btn\" style=\"margin-top: 5px\">Supprimer</button>
</form>";
    }

    public function getTemplateName()
    {
        return "annonce/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "annonce/_delete_form.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/annonce/_delete_form.html.twig");
    }
}
