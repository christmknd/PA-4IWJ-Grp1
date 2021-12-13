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

/* default/index.html.twig */
class __TwigTemplate_258ad520c63dc10b6f7b20c2be8ac82bf62a444f00b64d08d9e8ae02a31d9491 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - Accueil";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("base");
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
    ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "
        <section class=\"banner\">
            <!-- BANNIERE -->
            <div class=\"container-fluid\">
                <div class=\"parallax-container\">
                    <div class=\"parallax\" style=\"opacity: 0.6\">
                        <img style=\"max-width: 100%;height: auto\"
                             src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/animaux.e87a0d26.webp"), "html", null, true);
            echo "\">
                    </div>
                </div>
                <h2 style=\"text-align : center; font-family: Arial\">Une plateforme pour les amoureux des animaux</h2>
            </div>

            <!-- SLIDERS  -->

            <div class=\"container\">
                <div class=\"slider\">
                    <ul class=\"slides\" style=\"box-shadow: 10px 5px 5px lightgrey;\">
                        <li>
                            <img style=\"opacity: 0.6\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/chien-perdu.407f5e75.jpeg"), "html", null, true);
            echo "\">
                            <div class=\"caption center-align\">
                                <h3>Adoptez ou déclarez la perte de votre animal</h3>
                                <h5 style=\"font-family: Arial\">À partir de notre système d'annonces</h5>
                                <a class=\"waves-effect waves-light btn\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
            echo "\"> Déposer une
                                    annonce</a>
                            </div>
                        </li>
                        <li>
                            <img style=\"opacity: 0.6\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carte.3680e1fd.png"), "html", null, true);
            echo "\">
                            <div class=\"caption left-align\">
                                <h3>Visualisez toutes les annonces de la plateforme</h3>
                                <h5 style=\"font-family: Arial\">Avec notre carte interactive</h5>
                            </div>
                        </li>
                        <li>
                            <img style=\"opacity: 0.6\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/salon.064a3242.jpeg"), "html", null, true);
            echo "\">
                            <div class=\"caption right-align\">
                                <h3>Participez aux évenements publics</h3>
                                <h5 style=\"font-family: Arial\">Organisé par des associations <span
                                            style=\"text-decoration:underline; \">certifiées</span><br/>
                                    discutez, échangez et rencontrez votre futur animal de compagnie</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    ";
        }
        // line 65
        echo "

    <section class=\"result\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col m6 s12\" style=\"position: sticky ; top: 0; left: 0; padding-top: 150px\">
                    <!--The div element for the map -->
                    <div id=\"map\" style=\"height: 500px; width: 100%; box-shadow: 5px 5px 5px lightgrey;\"></div>
                </div>

                <div class=\"hide-on-small-only col m6 s12\" style=\"overflow: auto\">
                    <h3>Annonces en ligne</h3>
                    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formTriAnnonces"] ?? null), 'form_start');
        echo "
                    <div style=\"border: black 1px solid;\" class=\"row\">
                        <div style=\"border: black 1px solid;\" class=\"col s3\"> ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriAnnonces"] ?? null), "ageTri", [], "any", false, false, false, 79), 'row');
        echo "</div>
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriAnnonces"] ?? null), "nbrViewTri", [], "any", false, false, false, 80), 'row');
        echo "</div>
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriAnnonces"] ?? null), "dateAtCreatedTri", [], "any", false, false, false, 81), 'row');
        echo "</div>
                        <div style=\" display: flex;justify-content: center; align-content: center; padding-top: 30px;\" class=\"col s3\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriAnnonces"] ?? null), "submit", [], "any", false, false, false, 82), 'row');
        echo "</div>
                    </div>
                    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formTriAnnonces"] ?? null), 'form_end');
        echo "

                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formFilterAnnonce"] ?? null), 'form_start');
        echo "
                    <div style=\"border: black 1px solid;\" class=\"row\">
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFilterAnnonce"] ?? null), "sexe", [], "any", false, false, false, 88), 'row');
        echo "</div>
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFilterAnnonce"] ?? null), "espece", [], "any", false, false, false, 89), 'row');
        echo "</div>
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFilterAnnonce"] ?? null), "type", [], "any", false, false, false, 90), 'row');
        echo "</div>
                        <div style=\" display: flex;justify-content: center; align-content: center; padding-top: 30px;\" class=\"col s3\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFilterAnnonce"] ?? null), "submit", [], "any", false, false, false, 91), 'row');
        echo "</div>
                    </div>
                    ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formFilterAnnonce"] ?? null), 'form_end');
        echo "


                    <div class=\"row\">
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 98
            echo "                            <div  class=\"col s12\">
                                <div class=\"";
            // line 99
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 99), "Adoption"))) ? ("card teal") : ("card red lighten-2"));
            echo "\"
                                     style=\"border-style: ridge ; box-shadow: 10px 5px 5px lightgrey;\">
                                    <div class=\"card-content white-text\">
                                        <div style=\"display: flex; justify-content: space-between;\">
                                            <p class=\"card-title\"
                                               style=\"font-family: Lato;text-shadow: 1px 1px 10px lightgrey;\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 104), "html", null, true);
            echo "</p>
                                            <p class=\"card-title\"
                                               style=\"font-family: Lato;text-shadow: 1px 1px 10px lightgrey;text-decoration:underline;\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 106), "html", null, true);
            echo "</p>
                                        </div>
                                        <p style=\"font-family: Arial; text-overflow: ellipsis; max-height:200px; white-space: nowrap;
      overflow: hidden;\"> ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 109), "html", null, true);
            echo " </p>
                                        <p style=\"padding-top: 10px; font-family: Arial\">Localisation : ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 110), "html", null, true);
            echo "</p>
                                    </div>
                                    ";
            // line 112
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 113
                echo "                                        <div style=\"display: flex; justify-content: space-between;\" class=\"card-content\">
                                            <a class=\"waves-effect waves-light btn activator amber\"
                                               >Voir plus</a>
                                            <form method=\"post\"
                                                  action=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_annonce_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                echo "\">
                                                <button class=\"material-icons\">";
                // line 118
                echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 118)], "method", false, false, false, 118)) ? ("star") : ("star_border"));
                echo "</button>
                                            </form>
                                        </div>
                                    ";
            }
            // line 122
            echo "                                    <div class=\"card-reveal green lighten-5\">
                                        <span class=\"card-title grey-text text-darken-4\"><i
                                                    class=\"material-icons right\">close</i></span>
                                        <a class=\"waves-effect waves-light btn\"
                                           href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\">visualiser</a>
                                        <span style=\"height: auto; width: auto\" class=\"badge\">
                                            <i class=\"material-icons\">remove_red_eye</i>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nbrViews", [], "any", false, false, false, 128), "html", null, true);
            echo "</span>
                                        <p style=\"font-family: Arial\">Publié par ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "utilisateur", [], "any", false, false, false, 129), "pseudo", [], "any", false, false, false, 129), "html", null, true);
            echo ",
                                            le ";
            // line 130
            ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 130)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 130), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
                                    </div>
                                </div>
                            </div>
                            <div id=\"annonceJson\" class=\"annonceJson\" style=\"display: none\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "LatLng", [], "any", false, false, false, 134), "html", null, true);
            echo " </div>
                            <div id=\"annonceJson3\" class=\"annonceJson3\"
                                 style=\"display: none\"> ";
            // line 136
            echo twig_escape_filter($this->env, json_encode(["titre" => twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 136), "nomAnimal" => twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 136), "age" => twig_get_attribute($this->env, $this->source, $context["annonce"], "age", [], "any", false, false, false, 136), "espece" => twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 136), "sexe" => twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 136), "pseudo" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "utilisateur", [], "any", false, false, false, 136), "pseudo", [], "any", false, false, false, 136), "atCreated" => ((twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 136)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "atCreated", [], "any", false, false, false, 136), "d-m-Y")) : ("")), "lien" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 136)]), "LatLng" => twig_get_attribute($this->env, $this->source, $context["annonce"], "LatLng", [], "any", false, false, false, 136)]), "html", null, true);
            echo " </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "                            <div class=\"col s1 m4\">
                                <p style=\"font-family: Arial\">Pas d'annonces</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </div>

                    <h3>Évènements à venir</h3>
                    ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formTriEvenements"] ?? null), 'form_start');
        echo "
                    <div style=\"border: black 1px solid;\" class=\"row\">
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriEvenements"] ?? null), "nbrViewTri", [], "any", false, false, false, 147), 'row');
        echo "</div>
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriEvenements"] ?? null), "dateAtCreatedTri", [], "any", false, false, false, 148), 'row');
        echo "</div>
                        <div style=\"border: black 1px solid;\" class=\"col s3\">";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriEvenements"] ?? null), "dateEventTri", [], "any", false, false, false, 149), 'row');
        echo "</div>
                        <div style=\" display: flex;justify-content: center; align-content: center; padding-top: 30px;\" class=\"col s3\">";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formTriEvenements"] ?? null), "submit", [], "any", false, false, false, 150), 'row');
        echo "</div>
                    </div>
                    ";
        // line 152
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formTriEvenements"] ?? null), 'form_end');
        echo "


                    <div class=\"row\">
                        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 157
            echo "                            <div class=\"col s12\">
                                <div class=\"card cyan darken-2\"
                                     style=\"border-style: ridge; box-shadow: 10px 5px 5px lightgrey;\">
                                    <div class=\"card-content white-text\"
                                         style=\"font-family: Lato;text-shadow: 1px 1px 10px lightgrey;\">
                                        <span class=\"card-title\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 162), "html", null, true);
            echo "</span>
                                        <p style=\"font-family: Arial; text-overflow: ellipsis; max-height:200px; white-space: nowrap;
      overflow: hidden;\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 164), "html", null, true);
            echo "</p>
                                        <p style=\"padding-top: 10px; font-family: Arial\">Localisation : ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 165), "html", null, true);
            echo "</p>
                                        <p style=\"padding-top: 10px; font-family: Arial\">Date : ";
            // line 166
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 166), "d-m-Y à H:i"), "html", null, true))) : (print ("")));
            echo "</p>

                                    </div>
                                    ";
            // line 169
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 170
                echo "                                        <div style=\"display: flex; justify-content: space-between;\" class=\"card-content\">
                                            <a class=\"waves-effect waves-light btn activator amber\"
                                            >Voir plus</a>
                                            <form method=\"post\"
                                                  action=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                echo "\">
                                                <button class=\"material-icons\">";
                // line 175
                echo ((twig_get_attribute($this->env, $this->source, $context["evenement"], "isFavori", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 175)], "method", false, false, false, 175)) ? ("star") : ("star_border"));
                echo "</button>
                                            </form>
                                        </div>
                                    ";
            }
            // line 179
            echo "                                    <div class=\"card-reveal deep-purple lighten-5\">
                                        <span class=\"card-title grey-text text-darken-4\"><i
                                                    class=\"material-icons right\">close</i></span>
                                        <span style=\"height: auto; width: auto\" class=\"badge\">
                                            <i class=\"material-icons\">remove_red_eye</i>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbrViews", [], "any", false, false, false, 183), "html", null, true);
            echo "</span>
                                        <p style=\"font-family: Arial\">Publié par ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "utilisateur", [], "any", false, false, false, 184), "pseudo", [], "any", false, false, false, 184), "html", null, true);
            echo ",
                                            le ";
            // line 185
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "atCreated", [], "any", false, false, false, 185)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "atCreated", [], "any", false, false, false, 185), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "
                                        </p>
                                        <a class=\"waves-effect waves-light btn\" href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            echo "\">visualiser</a>
                                    </div>
                                </div>
                            </div>
                            <div id=\"evenementJson\" class=\"evenementJson\"
                                 style=\"display: none\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "LatLng", [], "any", false, false, false, 192), "html", null, true);
            echo "</div>
                            <div id=\"evenementJson3\" class=\"evenementJson3\"
                                 style=\"display: none\"> ";
            // line 194
            echo twig_escape_filter($this->env, json_encode(["titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 194), "ville" => twig_get_attribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 194), "dateEvent" => ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 194)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEvent", [], "any", false, false, false, 194), "d-m-Y à H:i")) : ("")), "annonces" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "annonces", [], "any", false, false, false, 194)), "user_registered" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "getListUserRegistered", [], "method", false, false, false, 194)), "pseudo" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "utilisateur", [], "any", false, false, false, 194), "pseudo", [], "any", false, false, false, 194), "atCreated" => ((twig_get_attribute($this->env, $this->source, $context["evenement"], "atCreated", [], "any", false, false, false, 194)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "atCreated", [], "any", false, false, false, 194), "d-m-Y")) : ("")), "lien" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 194)]), "LatLng" => twig_get_attribute($this->env, $this->source, $context["evenement"], "LatLng", [], "any", false, false, false, 194)]), "html", null, true);
            echo " </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 196
            echo "                            <div class=\"col s1 m4\">
                                <p style=\"font-family: Arial\">Pas d'evenements</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        annoncesJson()
        evenementsJson()
    </script>
    <script async
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAipTm3HoOVFjsVcePwaIRK9GhjqgvwS-U&callback=initMapIndex\">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems);
        });
    </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 200,  448 => 196,  441 => 194,  436 => 192,  428 => 187,  423 => 185,  419 => 184,  415 => 183,  409 => 179,  402 => 175,  398 => 174,  392 => 170,  390 => 169,  384 => 166,  380 => 165,  376 => 164,  371 => 162,  364 => 157,  359 => 156,  352 => 152,  347 => 150,  343 => 149,  339 => 148,  335 => 147,  330 => 145,  325 => 142,  316 => 138,  309 => 136,  304 => 134,  297 => 130,  293 => 129,  289 => 128,  284 => 126,  278 => 122,  271 => 118,  267 => 117,  261 => 113,  259 => 112,  254 => 110,  250 => 109,  244 => 106,  239 => 104,  231 => 99,  228 => 98,  223 => 97,  216 => 93,  211 => 91,  207 => 90,  203 => 89,  199 => 88,  194 => 86,  189 => 84,  184 => 82,  180 => 81,  176 => 80,  172 => 79,  167 => 77,  153 => 65,  136 => 51,  126 => 44,  118 => 39,  111 => 35,  96 => 23,  87 => 16,  85 => 15,  82 => 14,  78 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/default/index.html.twig");
    }
}
