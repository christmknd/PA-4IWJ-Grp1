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

/* user/show.html.twig */
class __TwigTemplate_7b077c01c453c30b2f7b2b3ecac421335778e88d2e8db6ea1c3016a0d5abba33 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Mon profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s8 offset-s2\">
                <div class=\"card text-center\">
                    <div class=\"card-title\">
                        <h1 style=\"text-align: center\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
                        <h5 style=\"text-align: center\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "typeDeCompte", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                        ";
        // line 13
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "typeDeCompte", [], "any", false, false, false, 13), "Association"))) {
            // line 14
            echo "                    <br/><h5 style=\"text-align: center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "siret", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                        ";
        }
        // line 16
        echo "                        <hr>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <div class=\"col m6\">
                                <i class=\"small material-icons\">email</i>
                            </div>
                            <div class=\"col m6\">
                                ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col m6\">
                                <i class=\"small material-icons\">verified_user</i>
                            </div>
                            <div style=\"display: flex; justify-content: space-around\" class=\"col m6\">
                                ";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 32)) ? ("Oui") : ("Non"));
        echo "
                                ";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 33)) {
            // line 34
            echo "                                        <form  method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_post_mail");
            echo "\">
                                            <button style =\"background-color: #2446af; margin: 5px\" class=\"btn\">Envoyer lien d'activation</button>
                                        </form>
                                ";
        }
        // line 38
        echo "                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div style=\"padding-left: 10px\" class=\"action-btn\">
                            <ul>
                               <li>
                                   <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit");
        echo "\">
                                       <button style =\"background-color:#ffcc00; margin: 5px\" class=\"btn\">
                                           Modifier profil
                                       </button>
                                   </a>
                               </li>
                                <li>
                                    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">
                                        <button style =\"background-color:#ffcc00; margin: 5px\" class=\"btn\">
                                            Modifier mot de passe
                                        </button>
                                    </a>
                                </li>
                                <li>";
        // line 59
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "</li>
                            </ul>
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
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  136 => 53,  126 => 46,  116 => 38,  108 => 34,  106 => 33,  102 => 32,  91 => 24,  81 => 16,  75 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/show.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/user/show.html.twig");
    }
}
