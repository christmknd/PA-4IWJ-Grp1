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
class __TwigTemplate_92a4d1b0bc2da8a9d62d595dd5e38cdd0a3b16a68ab49936596988e692f01033 extends Template
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
        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/evenement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux ADMIN - Évènement";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Évènement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Utilisateur</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 12), "pseudo", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "dateEvent", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "dateEvent", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "address", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "ville", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "zipCode", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "pays", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"last-button\" style=\"padding-top: 10px;\">
        <a class=\"btn\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">edit</a>
        ";
        // line 47
        echo twig_include($this->env, $context, "BackEnd/evenement/_delete_form.html.twig");
        echo "
    </div>

    <hr style=\"margin-top: 20px ; border: 1px solid black\"/>

    <h2>Annonces dans cet evenement</h2>
    <table class=\"table\" style=\"margin-bottom: 20px\">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Type</th>
            <th>Description</th>
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "annonces", [], "any", false, false, false, 69));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 70
            echo "            <tr>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 74)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 74), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                ";
            // line 81
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 81)))) {
                // line 82
                echo "                    <td>
                        <form method=\"post\" action=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_remove_annonce", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 83), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\">
                            <button class=\"btn\">Supprimer annonce</button>
                        </form>
                    </td>
                ";
            }
            // line 88
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            <tr>
                <td colspan=\"13\">Pas d'annonce</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        </tbody>
    </table>

    <hr style=\"margin-top: 20px ; border: 1px solid black\"/>

    ";
        // line 100
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 100)))) {
            // line 101
            echo "        <h2>Mes annonces exclues de l'événement</h2>

        <table class=\"table\" style=\"margin-bottom: 20px\">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Description</th>
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
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119), "annonces", [], "any", false, false, false, 119));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 120
                echo "                ";
                if (!twig_in_filter($context["annonce"], twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "annonces", [], "any", false, false, false, 120))) {
                    // line 121
                    echo "                    <tr>
                        <td>";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 122), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 123), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 124), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 125
                    ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 125)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 125), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 126), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 127), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 128), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 129), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 130), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 131), "html", null, true);
                    echo "</td>
                        <td>
                            <a class=\"btn\" href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                    echo "\">visualiser</a>
                            <form method=\"post\" action=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_add_annonce", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 134), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                    echo "\">
                                <button class=\"btn\">Ajouter annonce</button>
                            </form>
                        </td>
                    </tr>
                ";
                }
                // line 140
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 141
                echo "                <tr>
                    <td colspan=\"13\">Pas d'annonce</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "
            </tbody>
        </table>
    ";
        }
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
        return array (  338 => 145,  329 => 141,  324 => 140,  315 => 134,  311 => 133,  306 => 131,  302 => 130,  298 => 129,  294 => 128,  290 => 127,  286 => 126,  282 => 125,  278 => 124,  274 => 123,  270 => 122,  267 => 121,  264 => 120,  259 => 119,  239 => 101,  237 => 100,  229 => 94,  220 => 90,  214 => 88,  206 => 83,  203 => 82,  201 => 81,  197 => 80,  193 => 79,  189 => 78,  185 => 77,  181 => 76,  177 => 75,  173 => 74,  169 => 73,  165 => 72,  161 => 71,  158 => 70,  153 => 69,  128 => 47,  124 => 46,  115 => 40,  108 => 36,  101 => 32,  94 => 28,  87 => 24,  80 => 20,  73 => 16,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/evenement/show.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/evenement/show.html.twig");
    }
}
