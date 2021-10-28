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

/* BackEnd/evenement/show.html.twig */
class __TwigTemplate_d405ef61d13529cbedb3aff0adc550d4440b891d266163152caca5b17a07c1c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackEnd/evenement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackEnd/evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/evenement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Evenement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Utilisateur</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 12, $this->source); })()), "utilisateur", [], "any", false, false, false, 12), "pseudo", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "lieu", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "etat", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">edit</a>
    ";
        // line 38
        echo twig_include($this->env, $context, "BackEnd/evenement/_delete_form.html.twig");
        echo "

    <h2>Annonces dans cet evenement</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Type</th>
            <th>Description</th>
            <th>Etat</th>
            <th>AtCreated</th>
            <th>NbrViews</th>
            <th>NomAnimal</th>
            <th>Espece</th>
            <th>Lieu</th>
            <th>Sexe</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 58, $this->source); })()), "annonces", [], "any", false, false, false, 58));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 59
            echo "            <tr>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 63)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 64
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 64), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "lieu", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                ";
            // line 71
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 71, $this->source); })()), "utilisateur", [], "any", false, false, false, 71)))) {
                // line 72
                echo "                    <td>
                        <form method=\"post\" action=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_remove_annonce", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">
                            <button class=\"btn\">Supprimer annonce</button>
                        </form>
                    </td>
                ";
            }
            // line 78
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "            <tr>
                <td colspan=\"13\">Pas d'annonce</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
        </tbody>
    </table>
    ";
        // line 87
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 87, $this->source); })()), "utilisateur", [], "any", false, false, false, 87)))) {
            // line 88
            echo "        <h2>Mes annonces exclues de l'événement</h2>

        <table class=\"table\">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Description</th>
                <th>Etat</th>
                <th>AtCreated</th>
                <th>NbrViews</th>
                <th>NomAnimal</th>
                <th>Espece</th>
                <th>Lieu</th>
                <th>Sexe</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "annonces", [], "any", false, false, false, 107));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 108
                echo "                ";
                if (!twig_in_filter($context["annonce"], twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 108, $this->source); })()), "annonces", [], "any", false, false, false, 108))) {
                    // line 109
                    echo "                    <tr>
                        <td>";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 110), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 111), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 112), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 113
                    echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 113)) ? ("Yes") : ("No"));
                    echo "</td>
                        <td>";
                    // line 114
                    ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 114)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 114), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 115), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 116), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 117), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "lieu", [], "any", false, false, false, 118), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 119), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 120), "html", null, true);
                    echo "</td>
                        <td>
                            <a class=\"btn\" href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                    echo "\">visualiser</a>
                            <form method=\"post\" action=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_add_annonce", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                    echo "\">
                                <button class=\"btn\">Ajouter annonce</button>
                            </form>
                        </td>
                    </tr>
                ";
                }
                // line 129
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 130
                echo "                <tr>
                    <td colspan=\"13\">Pas d'annonce</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "
            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackEnd/evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 134,  348 => 130,  343 => 129,  334 => 123,  330 => 122,  325 => 120,  321 => 119,  317 => 118,  313 => 117,  309 => 116,  305 => 115,  301 => 114,  297 => 113,  293 => 112,  289 => 111,  285 => 110,  282 => 109,  279 => 108,  274 => 107,  253 => 88,  251 => 87,  246 => 84,  237 => 80,  231 => 78,  223 => 73,  220 => 72,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  202 => 67,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  171 => 59,  166 => 58,  143 => 38,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BackEnd/base.html.twig' %}

{% block title %}Evenement{% endblock %}

{% block body %}
    <h1>Evenement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Utilisateur</th>
                <td>{{ evenement.utilisateur.pseudo }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ evenement.titre }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ evenement.date ? evenement.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ evenement.lieu }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evenement.description }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ evenement.etat ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn\" href=\"{{ path('admin_evenements_edit', {'id': evenement.id}) }}\">edit</a>
    {{ include('BackEnd/evenement/_delete_form.html.twig') }}

    <h2>Annonces dans cet evenement</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Type</th>
            <th>Description</th>
            <th>Etat</th>
            <th>AtCreated</th>
            <th>NbrViews</th>
            <th>NomAnimal</th>
            <th>Espece</th>
            <th>Lieu</th>
            <th>Sexe</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        {% for annonce in evenement.annonces %}
            <tr>
                <td>{{ annonce.titre }}</td>
                <td>{{ annonce.type }}</td>
                <td>{{ annonce.description }}</td>
                <td>{{ annonce.etat ? 'Yes' : 'No' }}</td>
                <td>{{ annonce.atCreated ? annonce.atCreated|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ annonce.nbrViews }}</td>
                <td>{{ annonce.nomAnimal }}</td>
                <td>{{ annonce.espece }}</td>
                <td>{{ annonce.lieu }}</td>
                <td>{{ annonce.sexe }}</td>
                <td>{{ annonce.age }}</td>
                {% if app.user == evenement.utilisateur %}
                    <td>
                        <form method=\"post\" action=\"{{ path('admin_evenements_remove_annonce', {'id': evenement.id, 'annonce_id': annonce.id}) }}\">
                            <button class=\"btn\">Supprimer annonce</button>
                        </form>
                    </td>
                {% endif %}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"13\">Pas d'annonce</td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    {% if app.user == evenement.utilisateur %}
        <h2>Mes annonces exclues de l'événement</h2>

        <table class=\"table\">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Description</th>
                <th>Etat</th>
                <th>AtCreated</th>
                <th>NbrViews</th>
                <th>NomAnimal</th>
                <th>Espece</th>
                <th>Lieu</th>
                <th>Sexe</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            {% for annonce in app.user.annonces %}
                {% if annonce not in evenement.annonces %}
                    <tr>
                        <td>{{ annonce.titre }}</td>
                        <td>{{ annonce.type }}</td>
                        <td>{{ annonce.description }}</td>
                        <td>{{ annonce.etat ? 'Yes' : 'No' }}</td>
                        <td>{{ annonce.atCreated ? annonce.atCreated|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ annonce.nbrViews }}</td>
                        <td>{{ annonce.nomAnimal }}</td>
                        <td>{{ annonce.espece }}</td>
                        <td>{{ annonce.lieu }}</td>
                        <td>{{ annonce.sexe }}</td>
                        <td>{{ annonce.age }}</td>
                        <td>
                            <a class=\"btn\" href=\"{{ path('admin_evenements_show', {'id': annonce.id}) }}\">visualiser</a>
                            <form method=\"post\" action=\"{{ path('admin_evenements_add_annonce', {'id': evenement.id, 'annonce_id':annonce.id}) }}\">
                                <button class=\"btn\">Ajouter annonce</button>
                            </form>
                        </td>
                    </tr>
                {% endif %}
            {% else %}
                <tr>
                    <td colspan=\"13\">Pas d'annonce</td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "BackEnd/evenement/show.html.twig", "/Users/dev/Desktop/PA-4IWJ-Grp1/app/templates/BackEnd/evenement/show.html.twig");
    }
}
