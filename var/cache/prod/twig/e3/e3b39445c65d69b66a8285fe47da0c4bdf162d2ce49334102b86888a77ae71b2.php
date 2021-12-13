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

/* BackEnd/base.html.twig */
class __TwigTemplate_1f66e4beda1c6ecd3b5d8c45985ba026d91344821b022af5cb817b5f0fc8bb04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "</head>
<body>
<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper  purple lighten-3\">
            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"hide-on-small-only brand-logo\" style=\"margin-left: 20px\">La carte des Animaux - ADMIN</a>
            <a href=\"#\" data-target=\"sidenav-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <a class=\"btn\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Mode User</a>
                <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Se deconnecter</a></li>
            </ul>
        </div>
    </nav>
    <ul class=\"sidenav\" id=\"sidenav-demo\">
        <a class=\"btn\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Mode User</a>
        <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Se deconnecter</a></li>
    </ul>
</div>

<div class=\"container\">
    ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "</div>

<footer class=\"page-footer purple lighten-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Qui sommes-nous ?</h5>
                <p class=\"grey-text text-lighten-4\">Une plateforme destiné à tous les amis des animaux afin de
                    digitaliser la procédure d’adoption ou
                    de recherche d’animaux perdus.
                </p>
                <a class=\"waves-effect waves-light btn\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateforme");
        echo "\">Voir plus</a>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2021 Copyright Carte Des Animaux
            <a class=\"grey-text text-lighten-4 right\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention_legale");
        echo "\">Mentions légales</a>
        </div>
    </div>
</footer>

<script>
    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 100
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 101
                echo "    M.toast({
        html: '";
                // line 102
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "',
        classes: '";
                // line 103
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "'
    });
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function() {
        let elems = document.querySelectorAll('.sidenav');
        let instances = M.Sidenav.init(elems);
    });
</script>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Bienvenue!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <style>
            body {
                display: flex;
                min-height: 50vh;
                flex-direction: column;
            }
            .navbar-fixed {
                z-index: 998;
            }

            .container {
                width: 100%;
            }

            h1, h2, h3 , th {
                font-family: Lato;
                text-shadow: 1px 1px 10px lightgrey;
            }

            table , responsive-table {
                border-style: ridge;
                box-shadow: 10px 5px 5px lightgrey;
                overflow-x: auto;
                margin-bottom: 50px;
            }

            main {
                flex: 1 0 auto;
            }
            .page-footer a{
                color: white;
            }
            footer{
                position:static;
                bottom: 0px;
                right: 0px;
                left: 0px;
            }
        </style>
    ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "BackEnd/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 74,  243 => 51,  200 => 9,  196 => 8,  189 => 5,  171 => 107,  165 => 106,  156 => 103,  152 => 102,  149 => 101,  144 => 100,  140 => 99,  131 => 93,  121 => 86,  108 => 75,  106 => 74,  98 => 69,  94 => 68,  90 => 67,  82 => 62,  78 => 61,  74 => 60,  68 => 57,  61 => 52,  59 => 51,  55 => 49,  53 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/base.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/base.html.twig");
    }
}
