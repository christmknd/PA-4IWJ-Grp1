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

/* BackEnd/evenement/edit.html.twig */
class __TwigTemplate_bcd48f116e95d27fcd55a21b94d84d8859409619b17b37684fd0e572e6d387f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BackEnd/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/evenement/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux ADMIN - Modifier évènement";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autocompleteAuto.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <h1>Modifier évènement</h1>

    <div class=\"card-container\">
        <div class=\"panel\">
            ";
        // line 14
        echo twig_include($this->env, $context, "BackEnd/evenement/_form.html.twig", ["button_label" => "Modifier"]);
        echo "
        </div>
    </div>

    <div class=\"last-btn\" style=\"margin-top : 5px; margin-bottom: 20px;\">
        <a class=\"btn\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements");
        echo "\">Revenir à la liste</a>
        ";
        // line 20
        echo twig_include($this->env, $context, "BackEnd/evenement/_delete_form.html.twig");
        echo "
    </div>



    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAipTm3HoOVFjsVcePwaIRK9GhjqgvwS-U&libraries=places&callback=initMap&channel=GMPSB_addressselection_v1_cAB\" async defer></script>

";
    }

    public function getTemplateName()
    {
        return "BackEnd/evenement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  84 => 19,  76 => 14,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/evenement/edit.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/evenement/edit.html.twig");
    }
}
