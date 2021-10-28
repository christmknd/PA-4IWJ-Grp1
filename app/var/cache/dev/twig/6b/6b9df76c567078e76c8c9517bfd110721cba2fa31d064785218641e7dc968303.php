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
class __TwigTemplate_e0e268fd7513e3b97447cd1fa72f00cd87af0294a97a6e0cd27b717ea684c328 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 30
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</head>
<body>
<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper deep-orange darken-2\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\" class=\"brand-logo\" style=\"margin-left: 20px\">La carte des Animaux</a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "                    <a class=\"btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Mode Admin</a>
                ";
        }
        // line 43
        echo "                <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a></li>
                ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces_index");
            echo "\">Mes annonces</a></li>
                    <ul id=\"dropdown1\" class=\"dropdown-content\">
                        <li><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce");
            echo "\">Annonces</a></li>
                        <li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement");
            echo "\">Evenements</a></li>
                    </ul>
                    <li><a class=\"dropdown-trigger\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori");
            echo "\" data-target=\"dropdown1\">Mes favoris<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                    ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 52
                echo "                        <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_evenements_index");
                echo "\">Mes evenements</a></li>
                    ";
            }
            // line 54
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\">Mon compte</a></li>
                    <li><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
                ";
        } else {
            // line 57
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'incrire</a></li>
                    <li><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                ";
        }
        // line 60
        echo "            </ul>
        </div>
    </nav>
</div>

<div class=\"container\">
    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "</div>

<footer class=\"page-footer deep-orange darken-2\">
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Qui sommes-nous ?</h5>
                <p class=\"grey-text text-lighten-4\">Présentation projet</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Menu</h5>
                <ul>
                    <li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a></li>
                    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces_index");
            echo "\">Mes annonces</a></li>
                        <ul id=\"dropdown1\" class=\"dropdown-content\">
                            <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce");
            echo "\">Annonces</a></li>
                            <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement");
            echo "\">Evenements</a></li>
                        </ul>
                        <li><a class=\"dropdown-trigger\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori");
            echo "\" data-target=\"dropdown1\">Mes favoris<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                        ";
            // line 87
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 88
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_evenements_index");
                echo "\">Mes evenements</a></li>
                        ";
            }
            // line 90
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\">Mon compte</a></li>
                        <li><a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
                    ";
        } else {
            // line 93
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'incrire</a></li>
                        <li><a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                    ";
        }
        // line 96
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2021 Copyright Carte Des Animeaux
            <a class=\"grey-text text-lighten-4 right\" href=\"#\">Plus d'informations</a>
        </div>
    </div>
</footer>


<script>
    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 111
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 112
                echo "    M.toast({
        html: '";
                // line 113
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "',
        classes: '";
                // line 114
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "'
    });
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <style>
            body {
                display: flex;
                min-height: 50vh;
                flex-direction: column;
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  362 => 66,  344 => 32,  314 => 9,  304 => 8,  285 => 5,  265 => 118,  259 => 117,  250 => 114,  246 => 113,  243 => 112,  238 => 111,  234 => 110,  218 => 96,  213 => 94,  208 => 93,  203 => 91,  198 => 90,  192 => 88,  190 => 87,  186 => 86,  181 => 84,  177 => 83,  171 => 81,  169 => 80,  165 => 79,  151 => 67,  149 => 66,  141 => 60,  136 => 58,  131 => 57,  126 => 55,  121 => 54,  115 => 52,  113 => 51,  109 => 50,  104 => 48,  100 => 47,  94 => 45,  92 => 44,  87 => 43,  81 => 41,  79 => 40,  74 => 38,  67 => 33,  65 => 32,  61 => 30,  59 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Bienvenue!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    {% block stylesheets %}
        <style>
            body {
                display: flex;
                min-height: 50vh;
                flex-direction: column;
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
    {% endblock %}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    {% block javascripts %}{% endblock %}
</head>
<body>
<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper deep-orange darken-2\">
            <a href=\"{{path(\"default\")}}\" class=\"brand-logo\" style=\"margin-left: 20px\">La carte des Animaux</a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"btn\" href=\"{{ path('admin') }}\">Mode Admin</a>
                {% endif %}
                <li><a href=\"{{path(\"default\")}}\">Accueil</a></li>
                {% if app.user %}
                    <li><a href=\"{{path(\"mes_annonces_index\")}}\">Mes annonces</a></li>
                    <ul id=\"dropdown1\" class=\"dropdown-content\">
                        <li><a href=\"{{path(\"favori_annonce\")}}\">Annonces</a></li>
                        <li><a href=\"{{path(\"favori_evenement\")}}\">Evenements</a></li>
                    </ul>
                    <li><a class=\"dropdown-trigger\" href=\"{{path(\"favori\")}}\" data-target=\"dropdown1\">Mes favoris<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                    {% if is_granted('ROLE_ASSO') %}
                        <li><a href=\"{{path(\"mes_evenements_index\")}}\">Mes evenements</a></li>
                    {% endif %}
                    <li><a href=\"{{path(\"user_show\")}}\">Mon compte</a></li>
                    <li><a href=\"{{path(\"app_logout\")}}\">Se deconnecter</a></li>
                {% else %}
                    <li><a href=\"{{path(\"app_register\")}}\">S'incrire</a></li>
                    <li><a href=\"{{path(\"app_login\")}}\">Se connecter</a></li>
                {% endif %}
            </ul>
        </div>
    </nav>
</div>

<div class=\"container\">
    {% block body %}{% endblock %}
</div>

<footer class=\"page-footer deep-orange darken-2\">
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Qui sommes-nous ?</h5>
                <p class=\"grey-text text-lighten-4\">Présentation projet</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Menu</h5>
                <ul>
                    <li><a href=\"{{path(\"default\")}}\">Accueil</a></li>
                    {% if app.user %}
                        <li><a href=\"{{path(\"mes_annonces_index\")}}\">Mes annonces</a></li>
                        <ul id=\"dropdown1\" class=\"dropdown-content\">
                            <li><a href=\"{{path(\"favori_annonce\")}}\">Annonces</a></li>
                            <li><a href=\"{{path(\"favori_evenement\")}}\">Evenements</a></li>
                        </ul>
                        <li><a class=\"dropdown-trigger\" href=\"{{path(\"favori\")}}\" data-target=\"dropdown1\">Mes favoris<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                        {% if is_granted('ROLE_ASSO') %}
                            <li><a href=\"{{path(\"mes_evenements_index\")}}\">Mes evenements</a></li>
                        {% endif %}
                        <li><a href=\"{{path(\"user_show\")}}\">Mon compte</a></li>
                        <li><a href=\"{{path(\"app_logout\")}}\">Se deconnecter</a></li>
                    {% else %}
                        <li><a href=\"{{path(\"app_register\")}}\">S'incrire</a></li>
                        <li><a href=\"{{path(\"app_login\")}}\">Se connecter</a></li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2021 Copyright Carte Des Animeaux
            <a class=\"grey-text text-lighten-4 right\" href=\"#\">Plus d'informations</a>
        </div>
    </div>
</footer>


<script>
    {% for type, messages in app.flashes %}
    {% for message in messages %}
    M.toast({
        html: '{{ message }}',
        classes: '{{ type }}'
    });
    {% endfor %}
    {% endfor %}
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
</script>
</body>
</html>", "base.html.twig", "/Users/dev/Desktop/PA-4IWJ-Grp1/app/templates/base.html.twig");
    }
}
