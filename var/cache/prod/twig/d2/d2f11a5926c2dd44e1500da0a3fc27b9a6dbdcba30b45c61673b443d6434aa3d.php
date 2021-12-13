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

/* annonce/show.html.twig */
class __TwigTemplate_cb62caf30433c0df0e0ad96e2b4d1c2e7a814df98acdfc02dd2b7d3d1c4b4b7f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Annonce";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s8 offset-s2\">
                <div class=\"card\">
                    <div class=\"card-title\">
                        <h1 style=\"text-align: center;\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "nomAnimal", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
                        <span class=\"badge\">
                                            <i class=\"material-icons\">remove_red_eye</i>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "nbrViews", [], "any", false, false, false, 14), "html", null, true);
        echo "
                            </span>
                        <h5 style=\"text-align: center; color: ";
        // line 16
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "type", [], "any", false, false, false, 16), "Adoption"))) ? ("teal") : ("red"));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "type", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
                        <hr>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                            <div class=\"col s6\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                            <div class=\"col s6\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "address", [], "any", false, false, false, 26), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "zipCode", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "ville", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">pets</i></div>
                            <div class=\"col s6\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "espece", [], "any", false, false, false, 30), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "sexe", [], "any", false, false, false, 30), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "age", [], "any", false, false, false, 30), "html", null, true);
        echo " ans</div>
                        </div>
                    </div>
                    <div class=\"button-list\" style=\"display: flex; justify-content: start;\">
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "isVerified", [], "any", false, false, false, 34)) {
            // line 35
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "utilisateur", [], "any", false, false, false, 35)))) {
                // line 36
                echo "                                <a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">Modifier</a>
                                <div style=\"margin-top: -5px\">";
                // line 37
                echo twig_include($this->env, $context, "annonce/_delete_form.html.twig");
                echo "</div>
                                <a class=\"btn\" href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces_index");
                echo "\">Revenir à la liste</a>
                            ";
            } else {
                // line 40
                echo "                                <a class=\"btn\" style=\"background-color:#50acec\"
                                   href=\"mailto:";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "utilisateur", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
                echo "\">Contacter
                                    le
                                    propriétaire</a>
                            ";
            }
            // line 45
            echo "                        ";
        } else {
            // line 46
            echo "                            <p>Compte restreint ! Votre compte doit être valide pour contacter le propriétaire.</p>
                            <p>Validez votre compte en cliquant sur le lien reçu par email.</p>
                        ";
        }
        // line 49
        echo "                    </div>
                    <div style=\"display: flex; justify-content: end;\">
                    ";
        // line 51
        if (($context["isFavori"] ?? null)) {
            // line 52
            echo "                        <span class=\"badge orange\">Favori</span>
                    ";
        }
        // line 54
        echo "                    <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce_toggle", ["id" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">
                        <button class=\"material-icons\">";
        // line 55
        echo ((twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "isFavori", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55)], "method", false, false, false, 55)) ? ("star") : ("star_border"));
        echo "</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




";
    }

    public function getTemplateName()
    {
        return "annonce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  163 => 54,  159 => 52,  157 => 51,  153 => 49,  148 => 46,  145 => 45,  138 => 41,  135 => 40,  130 => 38,  126 => 37,  121 => 36,  118 => 35,  116 => 34,  105 => 30,  94 => 26,  87 => 22,  76 => 16,  71 => 14,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "annonce/show.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/annonce/show.html.twig");
    }
}
