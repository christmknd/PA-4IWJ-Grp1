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
            'javascripts' => [$this, 'block_javascripts'],
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
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"example-wrapper\">

    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id=\"map\" style=\"height: 400px; width: 100%\"></div>

    <h1>Annonces en ligne</h1>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTriAnnonces"]) || array_key_exists("formTriAnnonces", $context) ? $context["formTriAnnonces"] : (function () { throw new RuntimeError('Variable "formTriAnnonces" does not exist.', 17, $this->source); })()), 'form');
        echo "
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFilterAnnonce"]) || array_key_exists("formFilterAnnonce", $context) ? $context["formFilterAnnonce"] : (function () { throw new RuntimeError('Variable "formFilterAnnonce" does not exist.', 18, $this->source); })()), 'form');
        echo "


        <div class=\"row \">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 23
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["annonce"], "etat", [], "any", false, false, false, 23)) {
                // line 24
                echo "                    <div class=\"col s1 m4\">
                        <div class=\"card blue-grey darken-1\">
                            <div class=\"card-content white-text\">
                                <span class=\"card-title\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 27), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                                <p>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
                                <p>Ville : ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
                            </div>
                            ";
                // line 31
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 32
                    echo "                            <div class=\"card-content\">
                                <form method=\"post\" action=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                    echo "\">
                                    <button class=\"material-icons\">";
                    // line 34
                    echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)], "method", false, false, false, 34)) ? ("star") : ("star_border"));
                    echo "</button>
                                </form>
                            </div>
                            ";
                }
                // line 38
                echo "                            <div class=\"card-action\">
                                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">visualiser</a><span style=\"height: auto; width: auto\" class=\"badge yellow\"><i class=\"material-icons\">remove_red_eye</i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 39), "html", null, true);
                echo "</span>
                                <p>Publié par ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "utilisateur", [], "any", false, false, false, 40), "pseudo", [], "any", false, false, false, 40), "html", null, true);
                echo ", le ";
                ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                            </div>
                        </div>
                    </div>
                    <div id=\"annonceJson\" class=\"annonceJson\" style=\"display: none\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "LatLng", [], "any", false, false, false, 44), "html", null, true);
                echo "</div>
        ";
            }
            // line 46
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <div class=\"col s1 m4\">
                <p>Pas d'annonces</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>

    <h1>Évènements à venir</h1>


        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTriEvenements"]) || array_key_exists("formTriEvenements", $context) ? $context["formTriEvenements"] : (function () { throw new RuntimeError('Variable "formTriEvenements" does not exist.', 56, $this->source); })()), 'form');
        echo "


        <div class=\"collection \">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 61
            echo "            <div class=\"col s1 m6\">
                <div class=\"card blue-grey darken-1\">
                    <div class=\"card-content white-text\">
                        <span class=\"card-title\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
                        <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
                        <p>Le ";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 66), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                    </div>
                    ";
            // line 68
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 69
                echo "                    <div class=\"card-content\">
                        <form method=\"post\" action=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">
                            <button class=\"material-icons\">";
                // line 71
                echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)], "method", false, false, false, 71)) ? ("star") : ("star_border"));
                echo "</button>
                        </form>
                    </div>
                    ";
            }
            // line 75
            echo "                    <div class=\"card-action\">
                        <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">visualiser</a>
                        ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "etat", [], "any", false, false, false, 77)) {
                // line 78
                echo "                            <span class=\"badge green\">Valide</span>
                        ";
            } else {
                // line 80
                echo "                            <span class=\"badge red\">Annulé</span>
                        ";
            }
            // line 82
            echo "                        <p>Publié par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "utilisateur", [], "any", false, false, false, 82), "pseudo", [], "any", false, false, false, 82), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <div id=\"evenementJson\" class=\"evenementJson\" style=\"display: none\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "LatLng", [], "any", false, false, false, 86), "html", null, true);
            echo "</div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "            <div class=\"col s1 m4\">
                <p>Pas d'evenements</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
    <script>
        annoncesJson()
        evenementsJson()
    </script>
    <script async
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAipTm3HoOVFjsVcePwaIRK9GhjqgvwS-U&callback=initMapIndex\">
    </script>
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
        return array (  309 => 92,  300 => 88,  293 => 86,  285 => 82,  281 => 80,  277 => 78,  275 => 77,  271 => 76,  268 => 75,  261 => 71,  257 => 70,  254 => 69,  252 => 68,  245 => 66,  241 => 65,  237 => 64,  232 => 61,  227 => 60,  220 => 56,  213 => 51,  204 => 47,  199 => 46,  194 => 44,  185 => 40,  179 => 39,  176 => 38,  169 => 34,  165 => 33,  162 => 32,  160 => 31,  155 => 29,  151 => 28,  145 => 27,  140 => 24,  137 => 23,  132 => 22,  125 => 18,  121 => 17,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LaCarteDesAnimaux - Accueil{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/map.js') }}\"></script>
{% endblock %}

{% block body %}
<div class=\"example-wrapper\">

    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id=\"map\" style=\"height: 400px; width: 100%\"></div>

    <h1>Annonces en ligne</h1>
        {{ form(formTriAnnonces) }}
        {{ form(formFilterAnnonce) }}


        <div class=\"row \">
        {% for annonce in annonces %}
            {% if annonce.etat  %}
                    <div class=\"col s1 m4\">
                        <div class=\"card blue-grey darken-1\">
                            <div class=\"card-content white-text\">
                                <span class=\"card-title\">{{ annonce.titre }} - {{ annonce.type }}</span>
                                <p>{{ annonce.description }}</p>
                                <p>Ville : {{ annonce.ville }}</p>
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
                    <div id=\"annonceJson\" class=\"annonceJson\" style=\"display: none\">{{ annonce.LatLng }}</div>
        {% endif %}
        {% else %}
            <div class=\"col s1 m4\">
                <p>Pas d'annonces</p>
            </div>
        {% endfor %}
        </div>

    <h1>Évènements à venir</h1>


        {{ form(formTriEvenements) }}


        <div class=\"collection \">
        {% for evenement in evenements %}
            <div class=\"col s1 m6\">
                <div class=\"card blue-grey darken-1\">
                    <div class=\"card-content white-text\">
                        <span class=\"card-title\">{{ evenement.titre }}</span>
                        <p>{{ evenement.description }}</p>
                        <p>Le {{ evenement.dateEvent ? evenement.dateEvent|date('Y-m-d H:i:s') : '' }} à {{ evenement.ville }}</p>
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
            <div id=\"evenementJson\" class=\"evenementJson\" style=\"display: none\">{{ evenement.LatLng }}</div>
        {% else %}
            <div class=\"col s1 m4\">
                <p>Pas d'evenements</p>
            </div>
        {% endfor %}
        </div>
    <script>
        annoncesJson()
        evenementsJson()
    </script>
    <script async
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAipTm3HoOVFjsVcePwaIRK9GhjqgvwS-U&callback=initMapIndex\">
    </script>
</div>
{% endblock %}
", "default/index.html.twig", "/Users/dev/Desktop/PA-4IWJ-Grp1/app/templates/default/index.html.twig");
    }
}
