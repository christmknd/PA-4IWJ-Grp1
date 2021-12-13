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

/* plateforme/index.html.twig */
class __TwigTemplate_242d651649cced5ffc3cf1641a289ba36522a31ebea9aef2e8c98cc7b494a0d5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "plateforme/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Présentation";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Présentation de la plateforme</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"card-panel lighten-5\">
                    <span class=\"black-text\">
                       La SPA a annoncé que durant l'été 2021, il y a eu plus de 16 000 animaux abandonnés en France.
                    Le nombre de cas d'abandon d'animaux est insupportable.
                    Afin de répondre à cette problématique nous souhaitons mettre en place une nouvelle plateforme pour les animaux.<br/>
                    Notre projet étudiant est destiné à tous les amis des animaux, il aide à digitaliser la procédure d’adoption et de recherche d’animaux perdus.
                    Cette plateforme est destinée aux actions suivantes :
                    </span>
                </div>
                <div class=\"parallax-container\">
                    <div class=\"parallax\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/landscape.c0712f76.jpeg"), "html", null, true);
        echo "\" style=\"max-width: 100%;height: auto\"></div>
                </div>
                <div class=\"card-panel lighten-5\">
                    <h2>Je souhaite donner mon animal</h2>
                    <p>En créant un compte sur la plateforme, je pourrais poster une nouvelle annonce renseignant les informations précises
                        de mon animal. La communauté de LaCarteDesAnimaux pourra vous contacter par mail et ainsi lui trouver un nouveau propriétaire.
                    </p>
                    <h2>Je souhaite adopter un animal</h2>
                    <p>En créant un compte sur la plateforme, je pourrais réaliser une recherche précise des animaux à adopter sur la plateforme.
                        Je pourrais ensuite contacter le propriétaire par mail afin de conclure l'adoption.
                    </p>
                    <h2>J'ai perdu mon animal</h2>
                    <p>En créant un compte sur la plateforme, je pourrais annoncer la perte de mon animal de compagnie.
                        La communauté de LaCarteDesAnimaux pourra vous contacter par mail si votre animal a été apperçu dans les horizons.
                        La perte est localisé sur une carte ce qui permet d'améliorer les chances de le retrouver.
                    </p>
                    <h2>J'ai trouvé un animal</h2>
                    <p>En créant un compte sur la plateforme, je pourrais chercher si l'animal que j'ai trouvé à été déclarer perdu par un membre
                        de la communauté de LaCarteDesAnimaux. Je pourrais ainsi contacter le propriétaire afin de lui remettre son animal.
                    </p><br/><br/>
                    Cette plateforme permet d’adopter auprès de particulier ou alors auprès d'association vérifié lors
                    d'événements exclusifs sur LaCarteDesAnimaux. Chaque Association est vérifié via le num de Siret correspondant.<br/><br/>
                    En éspérant que vous trouverez votre bonheur sur la plateforme,<br/>
                    Bonne expérience !<br/>
                    <br/>
                    L'équipe LaCarteDesAnimaux
                                <div class=\"card-action\">
                                    <a style=\"margin: 10px\" class=\"waves-effect waves-light btn\" href=\"mailto:esgipa2021@gmail.com\">Nous contacter</a>
                                </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "plateforme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plateforme/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/plateforme/index.html.twig");
    }
}
