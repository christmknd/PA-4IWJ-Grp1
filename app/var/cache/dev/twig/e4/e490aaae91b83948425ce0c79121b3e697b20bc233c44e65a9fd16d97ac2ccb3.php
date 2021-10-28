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
class __TwigTemplate_5a931ec4c4f0eada442ce7c66306b7d5323664e5844b07166b25253ce35e1269 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favori/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favori/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "favori/index.html.twig", 1);
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

        echo "Mes favoris";
        
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
        echo "    <h1> List de mes favoris</h1>
<div class=\"example-wrapper\">
    <h2>Mes annonces favorites</h2>
        <div class=\"row \">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 11
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 11)) {
                // line 12
                echo "                    <div class=\"col s1 m4\">
                        <div class=\"card blue-grey darken-1\">
                            <div class=\"card-content white-text\">
                                <span class=\"card-title\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 15), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 15), "html", null, true);
                echo "</span>
                                <p>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 16), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"card-content\">
                                <form method=\"post\" action=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">
                                    <button class=\"material-icons\">";
                // line 20
                echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "favori", [], "any", false, false, false, 20)) ? ("star") : ("star_border"));
                echo "</button>
                                </form>
                            </div>
                            <div class=\"card-action\">
                                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">visualiser</a><span style=\"height: auto; width: auto\" class=\"badge yellow\"><i class=\"material-icons\">remove_red_eye</i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 24), "html", null, true);
                echo "</span>
                                <p>Publié par ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "utilisateur", [], "any", false, false, false, 25), "pseudo", [], "any", false, false, false, 25), "html", null, true);
                echo ", le ";
                ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                            </div>
                        </div>
                    </div>
            ";
            } else {
                // line 30
                echo "                <div class=\"col s1 m4\"/>
        ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>

    <h2>Mes évènements favoris</h2>
        <div class=\"collection \">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 38
            echo "            <div class=\"col s1 m6\">
                <div class=\"card blue-grey darken-1\">
                    <div class=\"card-content white-text\">
                        <span class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 41), "html", null, true);
            echo "</span>
                        <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                        <p>Le ";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 43), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-content\">
                        <form method=\"post\" action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement_toggle", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
                            <button class=\"material-icons\">";
            // line 47
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 47, $this->source); })()), "favori", [], "any", false, false, false, 47)) ? ("star") : ("star_border"));
            echo "</button>
                        </form>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">visualiser</a>
                        ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "etat", [], "any", false, false, false, 52)) {
                // line 53
                echo "                            <span class=\"badge green\">Valide</span>
                        ";
            } else {
                // line 55
                echo "                            <span class=\"badge red\">Annulé</span>
                        ";
            }
            // line 57
            echo "                        <p>Publié par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "utilisateur", [], "any", false, false, false, 57), "pseudo", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <div class=\"col s1 m6\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  230 => 64,  223 => 62,  212 => 57,  208 => 55,  204 => 53,  202 => 52,  198 => 51,  191 => 47,  187 => 46,  179 => 43,  175 => 42,  171 => 41,  166 => 38,  161 => 37,  155 => 33,  149 => 32,  145 => 30,  135 => 25,  129 => 24,  122 => 20,  118 => 19,  112 => 16,  106 => 15,  101 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes favoris{% endblock %}

{% block body %}
    <h1> List de mes favoris</h1>
<div class=\"example-wrapper\">
    <h2>Mes annonces favorites</h2>
        <div class=\"row \">
        {% for annonce in annonces %}
            {% if annonce.etat  %}
                    <div class=\"col s1 m4\">
                        <div class=\"card blue-grey darken-1\">
                            <div class=\"card-content white-text\">
                                <span class=\"card-title\">{{ annonce.titre }} - {{ annonce.type }}</span>
                                <p>{{ annonce.description }}</p>
                            </div>
                            <div class=\"card-content\">
                                <form method=\"post\" action=\"{{ path('favori_annonce_toggle', {'id': annonce.id}) }}\">
                                    <button class=\"material-icons\">{{ annonce.favori ? 'star' : 'star_border' }}</button>
                                </form>
                            </div>
                            <div class=\"card-action\">
                                <a href=\"{{ path('annonce_show', {'id': annonce.id}) }}\">visualiser</a><span style=\"height: auto; width: auto\" class=\"badge yellow\"><i class=\"material-icons\">remove_red_eye</i>{{ annonce.nbrViews }}</span>
                                <p>Publié par {{ annonce.utilisateur.pseudo }}, le {{ annonce.atCreated ? annonce.atCreated|date('Y-m-d') : '' }}</p>
                            </div>
                        </div>
                    </div>
            {% else %}
                <div class=\"col s1 m4\"/>
        {% endif %}
        {% endfor %}
        </div>

    <h2>Mes évènements favoris</h2>
        <div class=\"collection \">
        {% for evenement in evenements %}
            <div class=\"col s1 m6\">
                <div class=\"card blue-grey darken-1\">
                    <div class=\"card-content white-text\">
                        <span class=\"card-title\">{{ evenement.titre }}</span>
                        <p>{{ evenement.description }}</p>
                        <p>Le {{ evenement.date ? evenement.date|date('Y-m-d H:i:s') : '' }} à {{ evenement.lieu }}</p>
                    </div>
                    <div class=\"card-content\">
                        <form method=\"post\" action=\"{{ path('favori_evenement_toggle', {'id': annonce.id}) }}\">
                            <button class=\"material-icons\">{{ annonce.favori ? 'star' : 'star_border' }}</button>
                        </form>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\">visualiser</a>
                        {% if evenement.etat  %}
                            <span class=\"badge green\">Valide</span>
                        {% else %}
                            <span class=\"badge red\">Annulé</span>
                        {% endif %}
                        <p>Publié par {{ evenement.utilisateur.pseudo }}</p>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col s1 m6\"/>
        {% endfor %}
        </div>
</div>
{% endblock %}
", "favori/index.html.twig", "/Users/dev/Desktop/PA-4IWJ-Grp1/app/templates/favori/index.html.twig");
    }
}
