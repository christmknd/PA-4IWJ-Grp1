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

/* BackEnd/annonce/index.html.twig */
class __TwigTemplate_bfaa745dd45697fc9a1a7bf694462945aa7f38092c0dec1477ffdcf44cc02d44 extends Template
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
        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/annonce/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux ADMIN - Annonces en ligne";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Annonces en ligne</h1>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col m3\">
                <div class=\"collection\" style=\"box-shadow: 10px 5px 5px lightgrey;
\">
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">home</i></span>Interface Admin</a>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">border_color</i></span>Annonce</a>
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">event</i></span>Evenements</a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">group</i></span>Comptes</a>
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show");
        echo "\" class=\"collection-item\"><span class=\"badge\"><i class=\" small material-icons\">account_box</i></span>Admin</a>
                </div>
            </div>
            <div class=\"col m9\">
                <table class=\"responsive-table striped\" style=\"margin-bottom: 20px\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date de création</th>
                        <th>Nombre de Vue</th>
                        <th>Nom Animal</th>
                        <th>Espece</th>
                        <th>Ville</th>
                        <th>Sexe</th>
                        <th>Age</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 38
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
            // line 39
            echo "                        <tr>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">visualiser</a>
                                <a class=\"btn\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Modifier</a>
                                ";
            // line 54
            echo twig_include($this->env, $context, "BackEnd/annonce/_delete_form.html.twig");
            echo "
                                <form method=\"post\" action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_toggle_is_published", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\" style=\"background-color: ";
            // line 56
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isPublished", [], "any", false, false, false, 56)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isPublished", [], "any", false, false, false, 56)) ? ("Publié") : ("Brouillon"));
            echo "</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_toggle_is_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                                    <button class=\"btn\" style=\"background-color: ";
            // line 59
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFinish", [], "any", false, false, false, 59)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFinish", [], "any", false, false, false, 59)) ? ("Donné") : ("En attente"));
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
            // line 64
            echo "                        <tr>
                            <td colspan=\"13\">Pas d'annonce</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>





";
    }

    public function getTemplateName()
    {
        return "BackEnd/annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 68,  220 => 64,  200 => 59,  196 => 58,  189 => 56,  185 => 55,  181 => 54,  177 => 53,  173 => 52,  168 => 50,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  125 => 39,  107 => 38,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/annonce/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/annonce/index.html.twig");
    }
}
