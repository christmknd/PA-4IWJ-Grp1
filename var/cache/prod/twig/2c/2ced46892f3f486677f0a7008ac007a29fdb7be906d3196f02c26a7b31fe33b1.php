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

/* BackEnd/default/index.html.twig */
class __TwigTemplate_83dd80d94535ab50904dc7b95d6c2ecce5f254ec563b29d2d57ed1ceda13344f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux ADMIN - Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"example-wrapper\">
    <h1>Interface admin</h1>

    <div class=\"container\">
        <div class=\"row\" style=\"padding: 5px\">
            <div class=\"card col s12 m3\">
                        <p><i class=\" large material-icons\">border_color</i></p>
                <div class=\"card-action\">
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        echo "\">Annonces</a>
                </div>
            </div>
            <div class=\"card col s12 m3\">
                <p><i class=\" large material-icons\">event</i></p>
                <div class=\"card-action\">
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements");
        echo "\">Evenements</a>
                </div>
            </div>
            <div class=\"card col s12 m3\">
                <p><i class=\" large material-icons\">group</i></p>
                <div class=\"card-action\">
                    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\">Comptes</a>
                </div>
            </div>
            <div class=\"card col s12 m3\">
                <p><i class=\" large material-icons\">account_box</i></p>
                <div class=\"card-action\">
                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show");
        echo "\">Admin</a>
                </div>
            </div>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "BackEnd/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  86 => 26,  77 => 20,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/default/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/default/index.html.twig");
    }
}
