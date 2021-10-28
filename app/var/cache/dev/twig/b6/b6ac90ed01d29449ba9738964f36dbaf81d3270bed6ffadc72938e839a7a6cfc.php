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
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "dateEvent", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "dateEvent", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "address", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 28, $this->source); })()), "ville", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "zipCode", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 36, $this->source); })()), "pays", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 44, $this->source); })()), "etat", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 49
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "utilisateur", [], "any", false, false, false, 49)))) {
            // line 50
            echo "        <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
        ";
            // line 51
            echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
            echo "
    ";
        }
        // line 53
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
            <th>Ville</th>
            <th>Sexe</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 72, $this->source); })()), "annonces", [], "any", false, false, false, 72));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 73
            echo "            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 77)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 78
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 78)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 78), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                ";
            // line 85
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "utilisateur", [], "any", false, false, false, 85)))) {
                // line 86
                echo "                    <td>
                        <form method=\"post\" action=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_annonce_from_evenement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\">
                            <button class=\"btn\">Supprimer annonce</button>
                        </form>
                    </td>
                ";
            }
            // line 92
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "            <tr>
                <td colspan=\"13\">Pas d'annonce</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        </tbody>
    </table>
    ";
        // line 101
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 101, $this->source); })()), "utilisateur", [], "any", false, false, false, 101)))) {
            // line 102
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
                <th>Ville</th>
                <th>Sexe</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "annonces", [], "any", false, false, false, 121));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 122
                echo "                ";
                if (!twig_in_filter($context["annonce"], twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 122, $this->source); })()), "annonces", [], "any", false, false, false, 122))) {
                    // line 123
                    echo "                    <tr>
                        <td>";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 124), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 125
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 125), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 126), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 127
                    echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 127)) ? ("Yes") : ("No"));
                    echo "</td>
                        <td>";
                    // line 128
                    ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 128), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 129), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 130), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 131), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 132), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 133), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 134
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 134), "html", null, true);
                    echo "</td>
                        <td>
                            <a class=\"btn\" href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                    echo "\">visualiser</a>
                            <form method=\"post\" action=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_annonce_to_evenement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                    echo "\">
                                <button class=\"btn\">Ajouter annonce</button>
                            </form>
                        </td>
                    </tr>
                ";
                }
                // line 143
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 144
                echo "                <tr>
                    <td colspan=\"13\">Pas d'annonce</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
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
        return array (  384 => 148,  375 => 144,  370 => 143,  361 => 137,  357 => 136,  352 => 134,  348 => 133,  344 => 132,  340 => 131,  336 => 130,  332 => 129,  328 => 128,  324 => 127,  320 => 126,  316 => 125,  312 => 124,  309 => 123,  306 => 122,  301 => 121,  280 => 102,  278 => 101,  273 => 98,  264 => 94,  258 => 92,  250 => 87,  247 => 86,  245 => 85,  241 => 84,  237 => 83,  233 => 82,  229 => 81,  225 => 80,  221 => 79,  217 => 78,  213 => 77,  209 => 76,  205 => 75,  201 => 74,  198 => 73,  193 => 72,  172 => 53,  167 => 51,  162 => 50,  160 => 49,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <td>{{ evenement.dateEvent ? evenement.dateEvent|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ evenement.address }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ evenement.ville }}</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>{{ evenement.zipCode }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ evenement.pays }}</td>
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
            <th>Ville</th>
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
                <td>{{ annonce.ville }}</td>
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
                <th>Ville</th>
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
                        <td>{{ annonce.ville }}</td>
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
