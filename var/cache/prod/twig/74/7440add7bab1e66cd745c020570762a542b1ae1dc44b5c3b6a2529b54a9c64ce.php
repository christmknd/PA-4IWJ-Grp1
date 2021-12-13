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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_b5a0befd700b93b004af977c98bbd2500a7ae71954904000920210131cf374cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 1), "html", null, true);
        echo ", confirmez votre email !</h1>

<section>
    <p>
        Confirmez votre email en cliquant sur le lien suivant: <br><br>
        <a href=\"";
        // line 6
        echo ($context["signedUrl"] ?? null);
        echo "\">Confirmer mon email</a>.
        Ce lien expire dans ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["expiresAtMessageKey"] ?? null), ($context["expiresAtMessageData"] ?? null), "VerifyEmailBundle"), "html", null, true);
        echo ".
    </p>

    <p>
        LaCarteDesAnimaux !
    </p>
</section>
";
    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/confirmation_email.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/registration/confirmation_email.html.twig");
    }
}
