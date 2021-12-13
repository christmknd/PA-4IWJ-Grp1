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

/* annonce/index.html.twig */
class __TwigTemplate_bfdb2af7ff47fec75a03cc790cb26d091386189ffaf64e4f53bfe4867a06eb88 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "annonce/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Mes annonces";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Liste de mes annonces</h1>

    <section class=\"mesAnnonces\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 10
            echo "            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"card\" style=\"border-radius: 10px\">
                        <span class=\"card-title\"> <h3
                                    style=\"text-align: center;text-transform: uppercase\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 14), "html", null, true);
            echo "</h3></span>
                        <h5 style=\"text-align: center; color: ";
            // line 15
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 15), "Adoption"))) ? ("teal") : ("red"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
                        <hr>
                        <div class=\"card-content\" style=\"text-align: center\">
                            <h5 style=\"color: black\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                            <p>Age: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 19), "html", null, true);
            echo " ans</p>
                            <p>Date de création de l'annonce:
                                <strong>";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</strong></p>
                        </div>
                        <div class=\"row\">
                            <div style=\"display: flex; justify-content: start;\" class=\"col s6\">
                                <a class=\"btn\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Visualiser</a>
                                <a class=\"btn\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Modifier</a>
                                <div style=\"margin-top: -5px\">";
            // line 27
            echo twig_include($this->env, $context, "annonce/_delete_form.html.twig");
            echo "</div>
                            </div>
                            <div style=\"display: flex; justify-content: end;\" class=\"col s6\">
                                <form method=\"post\"
                                      action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_toggle_is_published", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\"
                                            style=\"background-color: ";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isPublished", [], "any", false, false, false, 33)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isPublished", [], "any", false, false, false, 33)) ? ("Publié") : ("Brouillon"));
            echo "</button>
                                </form>
                                <form method=\"post\"
                                      action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_toggle_is_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\"
                                            style=\"background-color: ";
            // line 38
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFinish", [], "any", false, false, false, 38)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFinish", [], "any", false, false, false, 38)) ? ("Donné") : ("En attente"));
            echo "</button>
                                </form>
                            </div>
                        </div>
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
            // line 46
            echo "            <div class=\"row\">
                <p>Pas d'annonce</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </section>

    <div class=\"btn-annonce\" style=\"margin-top: 20px ; margin-bottom: 20px;\">
        <a class=\"btn\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\">Créer annonce</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  180 => 50,  171 => 46,  148 => 38,  143 => 36,  135 => 33,  130 => 31,  123 => 27,  119 => 26,  115 => 25,  108 => 21,  103 => 19,  99 => 18,  91 => 15,  87 => 14,  81 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "annonce/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/annonce/index.html.twig");
    }
}
