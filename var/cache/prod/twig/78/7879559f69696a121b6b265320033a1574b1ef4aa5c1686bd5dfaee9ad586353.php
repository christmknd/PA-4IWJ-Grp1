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

/* registration/register.html.twig */
class __TwigTemplate_50545e884597edc931fb5af823b918a917b499909dbaba826093dbf3b871fed3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Inscription";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <h1>Inscription</h1>
    ";
        // line 11
        if (((0 === twig_compare(($context["typeDeCompte"] ?? null), "association")) || (0 === twig_compare(($context["typeDeCompte"] ?? null), "personne")))) {
            // line 12
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
            echo "
        ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pseudo", [], "any", false, false, false, 13), 'row');
            echo "
        ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 14), 'row');
            echo "
        ";
            // line 15
            if ((0 === twig_compare(($context["typeDeCompte"] ?? null), "association"))) {
                // line 16
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "siret", [], "any", false, false, false, 16), 'row');
                echo "
            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 18
                    echo "                <div class=\"alert alert-danger\" role=\"alert\">";
                    echo twig_escape_filter($this->env, $context["errorMessage"], "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 21), 'row', ["label" => "Password"]);
            // line 23
            echo "
        <button type=\"submit\" class=\"btn\">S'inscrire</button>
        ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
            echo "

    ";
        } else {
            // line 28
            echo "        <section>
            <div style=\"background-color: #5a636b;\" class=\"row\">
                <!-- IMAGE CARD Particulier -->
                <div class=\"col s6 m6\">
                    <div class=\"card\">
                        <div style=\"text-align: center\" class=\"card\">
                            <span class=\"card-title\">Particulier</span>
                        </div>
                        <div style=\"text-align: center\" class=\"card-content\">
                            <ul>
                                <li>Déposer des annonnces</li>
                                <li>Déclarer des pertes</li>
                                <li>Répondre aux annonnces</li>
                                <li>S'inscrire à des évènements</li>
                            </ul>
                        </div>
                        <div style=\"text-align: center;\" class=\"card-action\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_person");
            echo "\">Je suis
                                un particulier</a>
                        </div>
                    </div>
                </div>
                <!-- IMAGE CARD Association -->
                <div class=\"col s6 m6\">
                    <div class=\"card\">
                        <div style=\"text-align: center\" class=\"card\">
                            <span class=\"card-title\">Association</span>
                        </div>
                        <div style=\"text-align: center;\" class=\"card-content\">
                            <ul>
                                <li>Créer des évènements publiques</li>
                                <li>Déposer des annonnces</li>
                                <li>Déclarer des pertes</li>
                            </ul>
                        </div>
                        <div style=\"text-align: center;\" class=\"card-action\">
                            <a style=\"margin: 10px\" class=\"waves-effect waves-light btn\"
                               href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_association");
            echo "\">Je suis une association</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 65,  146 => 45,  127 => 28,  121 => 25,  117 => 23,  114 => 21,  111 => 20,  102 => 18,  98 => 17,  93 => 16,  91 => 15,  87 => 14,  83 => 13,  78 => 12,  76 => 11,  72 => 9,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/registration/register.html.twig");
    }
}
