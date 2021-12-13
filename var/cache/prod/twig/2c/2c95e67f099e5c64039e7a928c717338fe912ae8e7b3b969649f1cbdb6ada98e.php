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

/* mention_legale/index.html.twig */
class __TwigTemplate_cb8ca06095ef94f75f5f73f55918ed2f92f56e453e0fb6d9510d69532ec15ced extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mention_legale/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Mentions légales";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col s12\">
            <p style=\"text-align:center\"><span style=\"color:rgb(255, 0, 0)\"><span
                            style=\"background-color:rgb(211, 211, 211)\">Si vous utilisez nos Mentions Légales, vous vous engagez à laisser les liens </span><strong><span
                                style=\"background-color:rgb(211, 211, 211)\">Crédit sans en modifier ni les liens ni les ancres.</span></strong><span
                            style=\"background-color:rgb(211, 211, 211)\"> </span></span><br/>
                <span style=\"color:rgb(255, 0, 0)\"><span style=\"background-color:rgb(211, 211, 211)\">Par avance merci pour votre compréhension et le respect du travail effectué par toute l'équipe</span></span>
            </p>
            <div class=\"parallax-container\">
                <div class=\"parallax\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/landscape.c0712f76.jpeg"), "html", null, true);
        echo "\" style=\"max-width: 100%;height: auto\"></div>
            </div>
            <div class=\"card-panel lighten-5\">
                <h1>MENTIONS LEGALES :</h1>

                <p style=\"text-align:justify\"><strong> </strong><br/>
                    Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la
                    Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et
                    visiteurs du site : <a href=\"http://lacartedesanimaux.fr\" target=\"_blank\">lacartedesanimaux.fr</a> les
                    informations suivantes :</p>

                <p style=\"text-align:justify\"><strong>ÉDITEUR</strong></p>

                <p style=\"text-align:justify\">Le site <a href=\"http://lacartedesanimaux.fr\"
                                                         style=\"color: rgb(7, 130, 193); font-family: sans-serif, Arial, Verdana, \"
                                                         target=\"_blank\">lacartedesanimaux.fr</a> est la propriété exclusive
                    de <strong>LCDA </strong><strong>La carte des animaux</strong>, qui l'édite.</p>

                <p style=\"text-align:justify\"><strong>La carte des animaux</strong><strong> </strong><br/>
                    <strong>LCDA </strong>au capital de<strong> </strong><strong>10000000 </strong>€Tél  : <strong>01 56 06
                        90 41</strong></p>

                <p style=\"text-align:justify\"><strong>242 Rue du Faubourg Saint-Antoine </strong><strong>75012
                        Paris</strong><br/>
                    Immatriculée au Registre du Commerce et des Sociétés de  <strong>Nanterre B 531 458 669 </strong>sous le
                    numéro<strong> </strong><strong>53145866900037</strong><strong> </strong></p>

                <p style=\"text-align:justify\">Numéro TVA intracommunautaire : <strong>Nanterre B 531 458 669</strong><br/>
                    Adresse de courrier électronique : <strong>esgipa2021@gmail.com</strong> <br/>
                     <br/>
                    Directeur de la  publication : <strong>LaCarteDesAnimaux</strong><br/>
                    Contactez le responsable de la publication : <strong>esgipa2021@gmail.com</strong></p>

                <p style=\"text-align:justify\"> </p>

                <p style=\"text-align:justify\"><strong>HÉBERGEMENT</strong></p>

                <p style=\"text-align:justify\">Le site est hébergé par <strong>LaCarteDesAnimaux LaCarteDesAnimaux 75000
                        Paris</strong><br/>
                    <u><strong>CREDITS :</strong></u> les mentions légales ont étés générées par <strong><a
                                href=\"https://www.generer-mentions-legales.com\">mentions légales</a></strong><br/>
                    Horaires de la <strong><a href=\"http://www.patinoire.biz/p+patinoire-de-lyon---charlemagne+113.html\">Patinoire Lyon</a></strong>
                </p>

                <p style=\"text-align:justify\"> </p>

                <p style=\"text-align:justify\"><strong>DESCRIPTION DES SERVICES FOURNIS</strong></p>

                <p style=\"text-align:justify\">Le site <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\"
                                                         target=\"_blank\">lacartedesanimaux.fr</a> a pour objet de fournir
                    une information concernant l’ensemble des activités de la société. Le proprietaire du site s’efforce de
                    fournir sur le site <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des
                    omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait
                    des tiers partenaires qui lui fournissent ces informations. Tous les informations proposées sur le site
                    <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\"
                       target=\"_blank\">lacartedesanimaux.fr</a> sont données à titre indicatif, sont non exhaustives, et
                    sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis
                    leur mise en ligne.  </p>

                <p><strong>PROPRIÉTÉ INTELLECTUELLE ET CONTREFAÇONS</strong></p>

                <p>Le proprietaire du site est propriétaire des droits de propriété intellectuelle ou détient les droits
                    d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo,
                    icônes, sons, logiciels… Toute reproduction, représentation, modification, publication, adaptation
                    totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite,
                    sauf autorisation écrite préalable à l'email : esgipa2021@gmail.com  . Toute exploitation non autorisée
                    du site ou de l’un quelconque de ces éléments qu’il contient sera considérée comme constitutive d’une
                    contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de
                    Propriété Intellectuelle.  </p>

                <p><strong>LIENS HYPERTEXTES ET COOKIES</strong></p>

                <p>Le site <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en
                    place avec l’autorisation de le proprietaire du site . Cependant, le proprietaire du site n’a pas la
                    possibilité de vérifier le contenu des sites ainsi visités  et décline donc toute responsabilité de ce
                    fait quand aux risques éventuels de contenus illicites. L’utilisateur est informé que lors de ses
                    visites sur le site <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>,
                    un ou des cookies sont susceptible de s’installer automatiquement sur son ordinateur. Un cookie est un
                    fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des
                    informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à
                    faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures
                    de fréquentation. Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et
                    éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr Le refus
                    d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur
                    peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies
                    : Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez
                    Bloquer tous les cookies. Validez sur Ok. Sous Netscape : onglet édition / préférences. Cliquez sur
                    Avancées et choisissez Désactiver les cookies. Validez sur Ok.  </p>

                <p><strong>PROTECTION DES BIENS ET DES PERSONNES - GESTION DES DONNÉES PERSONNELLES</strong></p>

                <p>Utilisateur : Internaute se connectant, utilisant le site susnommé : <a
                            href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la
                    loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24
                    octobre 1995.</p>

                <p>Sur le site <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>,
                    le proprietaire du site ne collecte des informations personnelles relatives à l'utilisateur que pour le
                    besoin de certains services proposés par le site <a href=\"http://lacartedesanimaux.fr\"
                                                                        style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>.
                    L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par
                    lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a
                            href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    l’obligation ou non de fournir ces informations. Conformément aux dispositions des articles 38 et
                    suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout
                    utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données
                    personnelles le concernant. Pour l’exercer, adressez votre demande à <a
                            href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    par email : email du webmaster ou  en effectuant sa demande écrite et signée, accompagnée d’une copie du
                    titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse
                    doit être envoyée.</p>

                <p>Aucune information personnelle de l'utilisateur du site <a href=\"http://lacartedesanimaux.fr\"
                                                                              style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque
                    à des tiers. Seule l'hypothèse du rachat du site <a href=\"http://lacartedesanimaux.fr\"
                                                                        style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    à le proprietaire du site et de ses droits permettrait la transmission des dites informations à
                    l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification
                    des données vis à vis de l'utilisateur du site <a href=\"http://lacartedesanimaux.fr\"
                                                                      style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>.
                </p>

                <p>Le site <a href=\"http://lacartedesanimaux.fr\" style=\"text-align: justify;\" target=\"_blank\">lacartedesanimaux.fr</a>
                    est en conformité avec le RGPD voir notre politique RGPD  <a href=\"lacartedesanimaux.fr/RGPD\">lacartedesanimaux.fr/RGPD</a>.
                </p>

                <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la
                    directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
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
        return "mention_legale/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mention_legale/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/mention_legale/index.html.twig");
    }
}
