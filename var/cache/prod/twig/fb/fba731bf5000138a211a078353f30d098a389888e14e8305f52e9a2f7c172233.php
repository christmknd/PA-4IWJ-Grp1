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

/* BackEnd/user/show.html.twig */
class __TwigTemplate_bf9f9ec9c71bcab3f5258b1145c2a12a7888da442b2c2f7b016c3d0604975d40 extends Template
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
        $this->parent = $this->loadTemplate("BackEnd/base.html.twig", "BackEnd/user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux ADMIN - Compte User";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col m3\">
                <div class=\"collection\" style=\"box-shadow: 10px 5px 5px lightgrey;\">
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
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th> <i class=\"small material-icons\"> account_box</i> </th>
                        <th>Pseudo</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th> <i class=\"small material-icons\">email</i> </th>
                        <th>Email</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th> <i class=\"small material-icons\">verified_user</i> </th>
                        <th>Compte vérifié</th>
                        <td>";
        // line 35
        echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 35)) ? ("Oui") : ("Non"));
        echo "</td>
                    </tr>
                    <tr>
                        <th> <i class=\"small material-icons\">supervisor_account</i> </th>
                        <th>Type de compte</th>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "typeDeCompte", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 42
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42), "typeDeCompte", [], "any", false, false, false, 42), "association"))) {
            // line 43
            echo "                        <tr>
                            <th>Siret</th>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "siret", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        // line 48
        echo "                    </tbody>
                </table>

                <div class=\"container\" style=\"margin: 25px\">
                    <div class=\"row\">
                        <div class=\"col s12\">
                            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">
                                <button style =\"background-color:#ffcc00\" class=\"btn\">
                                    Modifier profil
                                </button>
                            </a>
                        </div>
                        <div class=\"col s12\">
                            ";
        // line 61
        echo twig_include($this->env, $context, "BackEnd/user/_delete_form.html.twig");
        echo "
                        </div>
                        <div class=\"col s12\">
                            <a class=\"btn\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\">Revenir à la liste</a>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BackEnd/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 64,  155 => 61,  145 => 54,  137 => 48,  131 => 45,  127 => 43,  125 => 42,  120 => 40,  112 => 35,  104 => 30,  96 => 25,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BackEnd/user/show.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/BackEnd/user/show.html.twig");
    }
}
