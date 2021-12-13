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

/* BackEnd/evenement/index.html.twig */
class __TwigTemplate_a1f69fb4b002095bad56df8df6351f63fc9cace55b89d9e64c35036fb6190dbf extends Template
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
        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux ADMIN - Évènements en ligne";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Évènements en ligne</h1>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col m3\">
                <div class=\"collection\" style=\"box-shadow: 10px 5px 5px lightgrey;\" >
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">home</i></span>Interface Admin</a>
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">border_color</i></span>Annonce</a>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">event</i></span>Evenements</a>
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">group</i></span>Comptes</a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">account_box</i></span>Admin</a>
                </div>
            </div>
            <div class=\"col m9\">
                <table class=\"responsive-table striped\" style=\"margin-bottom : 20px\">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Ville</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 31
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
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">visualiser</a>
                                <a class=\"btn\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">modifier</a>
                                ";
            // line 40
            echo twig_include($this->env, $context, "BackEnd/evenement/_delete_form.html.twig");
            echo "
                                <form method=\"post\" action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_toggle_is_published", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\" style=\"background-color: ";
            // line 42
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isPublished", [], "any", false, false, false, 42)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isPublished", [], "any", false, false, false, 42)) ? ("Publié") : ("Brouillon"));
            echo "</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_toggle_is_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\" style=\"background-color: ";
            // line 45
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFinish", [], "any", false, false, false, 45)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFinish", [], "any", false, false, false, 45)) ? ("Fini") : ("À venir"));
            echo "</button>
                                </form>
                            </td>
                        </tr>
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
            // line 50
            echo "                        <tr>
                            <td colspan=\"7\">Pas d'evenement</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>





";
    }

    public function getTemplateName()
    {
        return "BackEnd/evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 54,  185 => 50,  165 => 45,  161 => 44,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  118 => 32,  100 => 31,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/evenement/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/evenement/index.html.twig");
    }
}
