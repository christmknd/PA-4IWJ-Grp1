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

/* BackEnd/evenement/_delete_form.html.twig */
class __TwigTemplate_2404fbe431d6a261efc1ebacede6bfe9c45759726a01e4ce3bf916bc82a2b729 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette evenement ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 3))), "html", null, true);
        echo "\">
    <button class=\"btn\" type=\"submit\">Supprimer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "BackEnd/evenement/_delete_form.html.twig";
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
        return new Source("", "BackEnd/evenement/_delete_form.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/evenement/_delete_form.html.twig");
    }
}
