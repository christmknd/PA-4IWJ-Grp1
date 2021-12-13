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

/* evenement/index.html.twig */
class __TwigTemplate_76fdce74b576e31955dfffd9ea1ea9e83d03a0f3fab2469244935aa20d620955 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Mes événements";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Liste de mes événements</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 12
            echo "                <div class=\"card\" style=\"border-radius: 10px\">
                    <span class=\"card-title\"><h3
                                style=\"text-align: center;text-transform: uppercase\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 14), "html", null, true);
            echo "</h3></span>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                            <div class=\"col s6\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">date_range</i></div>
                            <div class=\"col s6\">";
            // line 22
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 22), "d-m-Y à H:i"), "html", null, true))) : (print ("")));
            echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                            <div class=\"col s6\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "address", [], "any", false, false, false, 26), "html", null, true);
            echo "
                                , ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "zipCode", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 27), "html", null, true);
            echo "</div>
                        </div>
                        <div class=\"row\">
                            <div style=\"display: flex; justify-content: start;\" class=\"col s6\">
                                <a class=\"btn\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">visualiser</a>
                                <a class=\"btn\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">modifier</a>
                                ";
            // line 33
            echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
            echo "
                            </div>
                            <div style=\"display: flex; justify-content: end;\" class=\"col s6\">
                                <form method=\"post\"
                                      action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_toggle_is_published", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\"
                                            style=\"background-color: ";
            // line 39
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isPublished", [], "any", false, false, false, 39)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isPublished", [], "any", false, false, false, 39)) ? ("Publié") : ("Brouillon"));
            echo "</button>
                                </form>
                                <form method=\"post\"
                                      action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_toggle_is_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\"
                                            style=\"background-color: ";
            // line 44
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFinish", [], "any", false, false, false, 44)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFinish", [], "any", false, false, false, 44)) ? ("Fini") : ("À venir"));
            echo "</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                        <div class=\"col s6\"><p>Pas d'evenement</p></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </div>
            </div>
        </div>
    </div>


    <div class=\"last-button\" style=\"margin-top: 20px ; margin-bottom: 20px\">
        <a class=\"btn\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\">Créer evenement</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  183 => 53,  176 => 51,  154 => 44,  149 => 42,  141 => 39,  136 => 37,  129 => 33,  125 => 32,  121 => 31,  112 => 27,  108 => 26,  101 => 22,  94 => 18,  87 => 14,  83 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evenement/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/evenement/index.html.twig");
    }
}
