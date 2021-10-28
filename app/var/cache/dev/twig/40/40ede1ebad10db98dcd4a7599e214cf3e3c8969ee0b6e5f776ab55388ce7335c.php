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

/* default/index.html.twig */
class __TwigTemplate_658d1250c1e2836be06bd88ec0b2a0f7a35f24847edb12e92d09d6ec3ad69e34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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

        echo "LaCarteDesAnimaux - Accueil";
        
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
        echo "<div class=\"example-wrapper\">
    <h1>Annonces en ligne</h1>


        <div class=\"row \">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 12
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 12)) {
                // line 13
                echo "                    <div class=\"col s1 m4\">
                        <div class=\"card blue-grey darken-1\">
                            <div class=\"card-content white-text\">
                                <span class=\"card-title\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 16), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 16), "html", null, true);
                echo "</span>
                                <p>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
                            </div>
                            ";
                // line 19
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 20
                    echo "                            <div class=\"card-content\">
                                <form method=\"post\" action=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\">
                                    <button class=\"material-icons\">";
                    // line 22
                    echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)], "method", false, false, false, 22)) ? ("star") : ("star_border"));
                    echo "</button>
                                </form>
                            </div>
                            ";
                }
                // line 26
                echo "                            <div class=\"card-action\">
                                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">visualiser</a><span style=\"height: auto; width: auto\" class=\"badge yellow\"><i class=\"material-icons\">remove_red_eye</i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                                <p>Publié par ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "utilisateur", [], "any", false, false, false, 28), "pseudo", [], "any", false, false, false, 28), "html", null, true);
                echo ", le ";
                ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                            </div>
                        </div>
                    </div>
            ";
            } else {
                // line 33
                echo "                <div class=\"col s1 m4\"/>
        ";
            }
            // line 35
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>

    <h1>Évènements à venir</h1>
        <div class=\"collection \">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 41
            echo "            <div class=\"col s1 m6\">
                <div class=\"card blue-grey darken-1\">
                    <div class=\"card-content white-text\">
                        <span class=\"card-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                        <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                        <p>Le ";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                    </div>
                    ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 49
                echo "                    <div class=\"card-content\">
                        <form method=\"post\" action=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
                            <button class=\"material-icons\">";
                // line 51
                echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)], "method", false, false, false, 51)) ? ("star") : ("star_border"));
                echo "</button>
                        </form>
                    </div>
                    ";
            }
            // line 55
            echo "                    <div class=\"card-action\">
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">visualiser</a>
                        ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "etat", [], "any", false, false, false, 57)) {
                // line 58
                echo "                            <span class=\"badge green\">Valide</span>
                        ";
            } else {
                // line 60
                echo "                            <span class=\"badge red\">Annulé</span>
                        ";
            }
            // line 62
            echo "                        <p>Publié par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "utilisateur", [], "any", false, false, false, 62), "pseudo", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <div class=\"col s1 m6\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 69,  238 => 67,  227 => 62,  223 => 60,  219 => 58,  217 => 57,  213 => 56,  210 => 55,  203 => 51,  199 => 50,  196 => 49,  194 => 48,  187 => 46,  183 => 45,  179 => 44,  174 => 41,  169 => 40,  163 => 36,  157 => 35,  153 => 33,  143 => 28,  137 => 27,  134 => 26,  127 => 22,  123 => 21,  120 => 20,  118 => 19,  113 => 17,  107 => 16,  102 => 13,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LaCarteDesAnimaux - Accueil{% endblock %}

{% block body %}
<div class=\"example-wrapper\">
    <h1>Annonces en ligne</h1>


        <div class=\"row \">
        {% for annonce in annonces %}
            {% if annonce.etat  %}
                    <div class=\"col s1 m4\">
                        <div class=\"card blue-grey darken-1\">
                            <div class=\"card-content white-text\">
                                <span class=\"card-title\">{{ annonce.titre }} - {{ annonce.type }}</span>
                                <p>{{ annonce.description }}</p>
                            </div>
                            {% if is_granted('ROLE_USER') %}
                            <div class=\"card-content\">
                                <form method=\"post\" action=\"{{ path('favori_annonce_toggle', {'id': annonce.id}) }}\">
                                    <button class=\"material-icons\">{{ annonce.isFavori(app.user) ? 'star' : 'star_border' }}</button>
                                </form>
                            </div>
                            {% endif %}
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

    <h1>Évènements à venir</h1>
        <div class=\"collection \">
        {% for evenement in evenements %}
            <div class=\"col s1 m6\">
                <div class=\"card blue-grey darken-1\">
                    <div class=\"card-content white-text\">
                        <span class=\"card-title\">{{ evenement.titre }}</span>
                        <p>{{ evenement.description }}</p>
                        <p>Le {{ evenement.date ? evenement.date|date('Y-m-d H:i:s') : '' }} à {{ evenement.lieu }}</p>
                    </div>
                    {% if is_granted('ROLE_USER') %}
                    <div class=\"card-content\">
                        <form method=\"post\" action=\"{{ path('favori_evenement_toggle', {'id': evenement.id}) }}\">
                            <button class=\"material-icons\">{{ evenement.isFavori(app.user) ? 'star' : 'star_border' }}</button>
                        </form>
                    </div>
                    {% endif %}
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
", "default/index.html.twig", "/Users/dev/Desktop/PA-4IWJ-Grp1/app/templates/default/index.html.twig");
    }
}
