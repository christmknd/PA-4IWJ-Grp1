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

/* evenement/show.html.twig */
class __TwigTemplate_00281afd49c18d9c29807fa2e34c4a8a3d42c5a805b6cfab8db2b91fce6cb01d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/show.html.twig", 1);
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

    ";
        // line 37
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 37, $this->source); })()), "utilisateur", [], "any", false, false, false, 37)))) {
            // line 38
            echo "        <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">edit</a>
        ";
            // line 39
            echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
            echo "
    ";
        }
        // line 41
        echo "    <h2>Annonces dans cet evenement</h2>

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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 60, $this->source); })()), "annonces", [], "any", false, false, false, 60));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 61
            echo "            <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 65)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 66), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "lieu", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                ";
            // line 73
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "utilisateur", [], "any", false, false, false, 73)))) {
                // line 74
                echo "                    <td>
                        <form method=\"post\" action=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_annonce_from_evenement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">
                            <button class=\"btn\">Supprimer annonce</button>
                        </form>
                    </td>
                ";
            }
            // line 80
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "            <tr>
                <td colspan=\"13\">Pas d'annonce</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
        </tbody>
    </table>
    ";
        // line 89
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "utilisateur", [], "any", false, false, false, 89)))) {
            // line 90
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
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "annonces", [], "any", false, false, false, 109));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 110
                echo "                ";
                if (!twig_in_filter($context["annonce"], twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 110, $this->source); })()), "annonces", [], "any", false, false, false, 110))) {
                    // line 111
                    echo "                    <tr>
                        <td>";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 112), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 113), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 114), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 115
                    echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 115)) ? ("Yes") : ("No"));
                    echo "</td>
                        <td>";
                    // line 116
                    ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 116)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 116), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 117), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 118), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 119), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "lieu", [], "any", false, false, false, 120), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 121), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 122), "html", null, true);
                    echo "</td>
                        <td>
                            <a class=\"btn\" href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                    echo "\">visualiser</a>
                            <form method=\"post\" action=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_annonce_to_evenement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                    echo "\">
                                <button class=\"btn\">Ajouter annonce</button>
                            </form>
                        </td>
                    </tr>
                ";
                }
                // line 131
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 132
                echo "                <tr>
                    <td colspan=\"13\">Pas d'annonce</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
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
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 136,  354 => 132,  349 => 131,  340 => 125,  336 => 124,  331 => 122,  327 => 121,  323 => 120,  319 => 119,  315 => 118,  311 => 117,  307 => 116,  303 => 115,  299 => 114,  295 => 113,  291 => 112,  288 => 111,  285 => 110,  280 => 109,  259 => 90,  257 => 89,  252 => 86,  243 => 82,  237 => 80,  229 => 75,  226 => 74,  224 => 73,  220 => 72,  216 => 71,  212 => 70,  208 => 69,  204 => 68,  200 => 67,  196 => 66,  192 => 65,  188 => 64,  184 => 63,  180 => 62,  177 => 61,  172 => 60,  151 => 41,  146 => 39,  141 => 38,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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

    {% if app.user == evenement.utilisateur %}
        <a class=\"btn\" href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\">edit</a>
        {{ include('evenement/_delete_form.html.twig') }}
    {% endif %}
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
                        <form method=\"post\" action=\"{{ path('remove_annonce_from_evenement', {'id': evenement.id, 'annonce_id': annonce.id}) }}\">
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
                            <a class=\"btn\" href=\"{{ path('annonce_show', {'id': annonce.id}) }}\">visualiser</a>
                            <form method=\"post\" action=\"{{ path('add_annonce_to_evenement', {'id': evenement.id, 'annonce_id':annonce.id}) }}\">
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
", "evenement/show.html.twig", "/Users/dev/Desktop/PA-4IWJ-Grp1/app/templates/evenement/show.html.twig");
    }
}
