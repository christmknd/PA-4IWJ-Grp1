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

/* base.html.twig */
class __TwigTemplate_29f12ae6785e0272e713a2db4b621c2ff4f4919368ad052acbfc650798ce8da3 extends Template
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
        // line 9
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</head>
<body>
<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper green darken-2\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\" class=\" hide-on-small-only brand-logo\"
               style=\"margin-left: 20px; font-family: Lato\">La carte des Animaux</a>
            <a href=\"#\" data-target=\"sidenav-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                    <a class=\"btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Mode Admin</a>
                ";
        }
        // line 24
        echo "                <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateforme");
        echo "\">Présentation</a></li>
                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces_index");
            echo "\">Annonces</a></li>
                    ";
            // line 28
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 29
                echo "                        <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements_registred");
                echo "\">Evenements</a></li>
                    ";
            }
            // line 31
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 32
                echo "                        <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_evenements_index");
                echo "\">Mes evenements</a></li>
                    ";
            }
            // line 34
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori");
            echo "\">Mes favoris</a></li>
                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\">Mon compte</a></li>
                    <li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
                ";
        } else {
            // line 38
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'incrire</a></li>
                    <li><a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                ";
        }
        // line 41
        echo "            </ul>
        </div>
    </nav>
    <ul class=\"sidenav\" id=\"sidenav-demo\">
        ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "            <a class=\"btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Mode Admin</a>
        ";
        }
        // line 48
        echo "        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateforme");
        echo "\">Présentation</a></li>
        ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces_index");
            echo "\">Annonces</a></li>
            ";
            // line 52
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 53
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_evenements_index");
                echo "\">Evenements</a></li>
            ";
            }
            // line 55
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori");
            echo "\">Mes favoris</a></li>
            <li><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\">Mon compte</a></li>
            <li><a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
        ";
        } else {
            // line 59
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'incrire</a></li>
            <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
        ";
        }
        // line 62
        echo "    </ul>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col s12\">
            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        </div>
    </div>
</div>

<footer class=\"page-footer green darken-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Qui sommes-nous ?</h5>
                <p class=\"grey-text text-lighten-4\">Une plateforme destiné à tous les amis des animaux afin de
                    digitaliser la procédure d’adoption ou
                    de recherche d’animaux perdus.
                </p>
                <a class=\"waves-effect waves-light btn\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateforme");
        echo "\">Voir plus</a>

            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Menu</h5>
                <ul>
                    <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateforme");
        echo "\">Présentation</a></li>
                    ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 92)) {
            // line 93
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces_index");
            echo "\">Annonces</a></li>
                        <li><a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori");
            echo "\">Mes favoris</a></li>
                        ";
            // line 95
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 96
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_evenements_index");
                echo "\">Mes evenements</a></li>
                        ";
            }
            // line 98
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\">Mon compte</a></li>
                        <li><a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
                    ";
        } else {
            // line 101
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'incrire</a></li>
                        <li><a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                    ";
        }
        // line 104
        echo "                    <li><a href=\"mailto:esgipa2021@gmail.com\">Nous contacter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2021 Copyright Carte Des Animaux
            <a class=\"grey-text text-lighten-4 right\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention_legale");
        echo "\">Mentions légales</a>
        </div>
    </div>
</footer>


<script>
    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 120
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 121
                echo "    M.toast({
        html: '";
                // line 122
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "',
        classes: '";
                // line 123
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "'
    });
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
    //navbar
    document.addEventListener('DOMContentLoaded', function () {
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
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("base");
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 69,  375 => 68,  368 => 11,  360 => 8,  353 => 5,  334 => 127,  328 => 126,  319 => 123,  315 => 122,  312 => 121,  307 => 120,  303 => 119,  293 => 112,  283 => 104,  278 => 102,  273 => 101,  268 => 99,  263 => 98,  257 => 96,  255 => 95,  251 => 94,  246 => 93,  244 => 92,  240 => 91,  236 => 90,  227 => 84,  212 => 71,  210 => 68,  202 => 62,  197 => 60,  192 => 59,  187 => 57,  183 => 56,  178 => 55,  172 => 53,  170 => 52,  165 => 51,  163 => 50,  159 => 49,  154 => 48,  148 => 46,  146 => 45,  140 => 41,  135 => 39,  130 => 38,  125 => 36,  121 => 35,  116 => 34,  110 => 32,  107 => 31,  101 => 29,  99 => 28,  94 => 27,  92 => 26,  88 => 25,  83 => 24,  77 => 22,  75 => 21,  68 => 17,  61 => 12,  59 => 11,  55 => 9,  53 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/base.html.twig");
    }
}
