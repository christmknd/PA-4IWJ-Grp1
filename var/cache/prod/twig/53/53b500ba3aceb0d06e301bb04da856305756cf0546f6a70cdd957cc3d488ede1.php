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

/* favori/index.html.twig */
class __TwigTemplate_3637fef69b4817dab04b9cf2129c27ad07248e5546700a247e54acabdfe15556 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "favori/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Mes favoris";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h2>Mes annonces favorites</h2>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 9
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"card teal lighten-5\">
                    <div class=\"card-title\">
                        <h1 style=\"text-align: center\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 13), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 13), "html", null, true);
            echo " </h1>
                        <h5 style=\"text-align: center; color: ";
            // line 14
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 14), "Adoption"))) ? ("teal") : ("red"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                        <hr>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                            <div class=\"col s6\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                            <div class=\"col s6\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "address", [], "any", false, false, false, 24), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "zipCode", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">pets</i></div>
                            <div class=\"col s6\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
                        </div>
                        <div style=\"display: flex; justify-content: space-between;\" class=\"card-content\">
                            <a class=\"waves-effect waves-light btn\"
                               href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">visualiser</a>
                            <form method=\"post\" action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                <button class=\"material-icons\">";
            // line 34
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34)], "method", false, false, false, 34)) ? ("star") : ("star_border"));
            echo "</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <div class=\"row\">
            <div class=\"col s12\">
                <p>Pas d'annonce</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "


    <h2>Mes évènements favoris</h2>

    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 54
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"card cyan lighten-5\">
                        <div class=\"card-title\">
                            <h3 style=\"text-align: center\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 59), "html", null, true);
            echo "</h3>
                        </div>
                        <hr>
                        <div class=\"card-content\">
                            <div class=\"row\">
                                <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                                <div class=\"col s6\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s6\"><i class=\"material-icons small\">date_range</i></div>
                                <div class=\"col s6\">";
            // line 69
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 69), "d-m-Y à H:i"), "html", null, true))) : (print ("")));
            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                                <div class=\"col s6\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "address", [], "any", false, false, false, 73), "html", null, true);
            echo "
                                    , ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "zipCode", [], "any", false, false, false, 74), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 74), "html", null, true);
            echo "</div>
                            </div>
                            <div style=\"display: flex; justify-content: space-between;\" class=\"card-content\">
                                <div style=\"display: flex;\">
                                    <a class=\"btn\"
                                       href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">visualiser</a>
                                    ";
            // line 80
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                // line 81
                echo "                                        ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getListEventRegistered", [], "any", false, false, false, 81), "contains", [0 => $context["evenement"]], "method", false, false, false, 81)) {
                    // line 82
                    echo "                                            <form method=\"post\"
                                                  action=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_user_to_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                    echo "\">
                                                <button style=\"background-color:#50acec\" class=\"btn\" type=\"submit\">
                                                    S'inscrire
                                                </button>
                                            </form>
                                        ";
                } else {
                    // line 89
                    echo "                                            <form method=\"post\"
                                                  action=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_user_from_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    echo "\">
                                                <button style=\"background-color:#fa4545\" class=\"btn\" type=\"submit\">Se
                                                    désinscrire
                                                </button>
                                            </form>
                                        ";
                }
                // line 96
                echo "                                    ";
            }
            // line 97
            echo "                                </div>
                                <form method=\"post\"
                                      action=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">
                                    <button class=\"material-icons\">";
            // line 100
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 100)], "method", false, false, false, 100)) ? ("star") : ("star_border"));
            echo "</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            echo "        <div class=\"col s12\">
            <p>Pas d'evenement</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
";
    }

    public function getTemplateName()
    {
        return "favori/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 113,  261 => 109,  247 => 100,  243 => 99,  239 => 97,  236 => 96,  227 => 90,  224 => 89,  215 => 83,  212 => 82,  209 => 81,  207 => 80,  203 => 79,  193 => 74,  189 => 73,  182 => 69,  175 => 65,  166 => 59,  159 => 54,  154 => 53,  147 => 48,  136 => 42,  123 => 34,  119 => 33,  115 => 32,  108 => 28,  97 => 24,  90 => 20,  79 => 14,  73 => 13,  67 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "favori/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/favori/index.html.twig");
    }
}
