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

/* evenement/show.html.twig */
class __TwigTemplate_48e18670b4d0ec8c3e8c791a1d45d69442de1e27ebad9cd17c26b169f63c05d1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "evenement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "LaCarteDesAnimaux - évènement";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"card\">
                    <div class=\"card-title\">
                        <h3 style=\"text-align: center\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "titre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
                        <div style=\"display: flex; justify-content: end;\">
                            ";
        // line 14
        if (($context["isFavori"] ?? null)) {
            // line 15
            echo "                                <p><span class=\"badge orange\">Favori</span></p>
                            ";
        }
        // line 17
        echo "                            <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_evenement_toggle", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">
                                <button class=\"material-icons\">";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "isFavori", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18)], "method", false, false, false, 18)) ? ("star") : ("star_border"));
        echo "</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class=\"card-content\">
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                            <div class=\"col s6\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">date_range</i></div>
                            <div class=\"col s6\">";
        // line 30
        ((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "dateEvent", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "dateEvent", [], "any", false, false, false, 30), "d-m-Y à H:i"), "html", null, true))) : (print ("")));
        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                            <div class=\"col s6\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "address", [], "any", false, false, false, 34), "html", null, true);
        echo "
                                , ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "zipCode", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "ville", [], "any", false, false, false, 35), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <p> Publié le ";
        // line 44
        ((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "atCreated", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "atCreated", [], "any", false, false, false, 44), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>
    <p> Vue ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "nbrViews", [], "any", false, false, false, 45), "html", null, true);
        echo " fois</p>


    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "isVerified", [], "any", false, false, false, 48)) {
            // line 49
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 49)))) {
                // line 50
                echo "            <div class=\"last-button\" style=\"padding-top: 10px;\">
                <a class=\"btn\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">edit</a>
                ";
                // line 52
                echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
                echo "
            </div>
        ";
            } else {
                // line 55
                echo "            <a class=\"btn\" style=\"background-color:#50acec\" href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 55), "email", [], "any", false, false, false, 55), "html", null, true);
                echo "\">Contacter le
                propriétaire</a>
            ";
                // line 57
                if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ASSO")) {
                    // line 58
                    echo "                ";
                    if ( !($context["isContain"] ?? null)) {
                        // line 59
                        echo "                    <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_user_to_evenement", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
                        echo "\">
                        <button style=\"background-color:#50acec\" class=\"btn\" type=\"submit\">S'inscrire</button>
                    </form>
                ";
                    } else {
                        // line 63
                        echo "                    <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_user_from_evenement", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
                        echo "\">
                        <button style=\"background-color:#fa4545\" class=\"btn\" type=\"submit\">Se désinscrire</button>
                    </form>
                ";
                    }
                    // line 67
                    echo "            ";
                }
                // line 68
                echo "        ";
            }
            // line 69
            echo "    ";
        } else {
            // line 70
            echo "        <p>Compte restreint ! Votre compte doit être valide pour s'inscrire à l'évènement.</p>
        <p>Validez votre compte en cliquant sur le lien reçu par email.</p>
    ";
        }
        // line 73
        echo "

    <hr style=\"margin-top: 20px ; border: 1px solid black\"/>

    <h2>Annonces contenues dans cet evenement</h2>

    <span class=\"badge yellow\">Nombre d'annonces ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annoncesRegisted"] ?? null), "count", [], "method", false, false, false, 79), "html", null, true);
        echo "</span>


    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "annonces", [], "any", false, false, false, 82));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 83
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col s8 offset-s2\">
                    <div class=\"card\">
                        <div class=\"card-title\">
                            <h1 style=\"text-align: center\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 88), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 88), "html", null, true);
            echo " </h1>
                            <h5 style=\"text-align: center; color: darkgreen\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 89), "html", null, true);
            echo "</h5>
                            <hr>
                        </div>
                        <div class=\"card-content\">
                            <div class=\"row\">
                                <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                                <div class=\"col s6\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 95), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                                <div class=\"col s6\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "address", [], "any", false, false, false, 99), "html", null, true);
            echo "
                                    , ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "zipCode", [], "any", false, false, false, 100), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 100), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s6\"><i class=\"material-icons small\">pets</i></div>
                                <div class=\"col s6\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 104), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            // line 111
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 111)))) {
                // line 112
                echo "            <div>
                <form method=\"post\"
                      action=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_annonce_from_evenement", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 114), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\">
                    <button class=\"btn\">Supprimer annonce</button>
                </form>
            </div>
        ";
            }
            // line 119
            echo "        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "        <div class=\"card\">
            <p>Pas d'annonce</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
    </tbody>
    </table>

    ";
        // line 129
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "utilisateur", [], "any", false, false, false, 129)))) {
            // line 130
            echo "        <h2>Mes annonces exclues de l'événement</h2>

        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 132), "annonces", [], "any", false, false, false, 132));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 133
                echo "            ";
                if (!twig_in_filter($context["annonce"], twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "annonces", [], "any", false, false, false, 133))) {
                    // line 134
                    echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col s8 offset-s2\">
                            <div class=\"card\">
                                <div class=\"card-title\">
                                    <h1 style=\"text-align: center\">";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "nomAnimal", [], "any", false, false, false, 139), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "espece", [], "any", false, false, false, 139), "html", null, true);
                    echo " </h1>
                                    <h5 style=\"text-align: center; color: darkgreen\">";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 140), "html", null, true);
                    echo "</h5>
                                    <hr>
                                </div>
                                <div class=\"card-content\">
                                    <div class=\"row\">
                                        <div class=\"col s6\"><i class=\"material-icons small\">description</i></div>
                                        <div class=\"col s6\">";
                    // line 146
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 146), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col s6\"><i class=\"material-icons small\">home</i></div>
                                        <div class=\"col s6\">";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "address", [], "any", false, false, false, 150), "html", null, true);
                    echo "
                                            , ";
                    // line 151
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "zipCode", [], "any", false, false, false, 151), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ville", [], "any", false, false, false, 151), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col s6\"><i class=\"material-icons small\">pets</i></div>
                                        <div class=\"col s6\">";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "sexe", [], "any", false, false, false, 155), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"row\">
                                        <a class=\"btn\"
                                           href=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                    echo "\">visualiser</a>
                                        <form method=\"post\"
                                              action=\"";
                    // line 161
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_annonce_to_evenement", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 161), "annonce_id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                    echo "\">
                                            <button class=\"btn\">Ajouter annonce</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
                }
                // line 171
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 172
                echo "            <div class=\"card\">
                <p>Pas d'annonce</p>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "    ";
        }
        // line 177
        echo "
    <hr style=\"margin-top: 20px ; border: 1px solid black\"/>

    <h2>Users inscrits dans cet evenement</h2>

    <span class=\"badge yellow\">Nombre d'inscrits ";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usersRegisted"] ?? null), "count", [], "method", false, false, false, 182), "html", null, true);
        echo "</span>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Pseudo</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usersRegisted"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["userRegisted"]) {
            // line 191
            echo "            <tr>
                <td>";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userRegisted"], "pseudo", [], "any", false, false, false, 192), "html", null, true);
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 195
            echo "            <tr>
                <td colspan=\"13\">Pas d'inscrit</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userRegisted'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "
        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 199,  432 => 195,  424 => 192,  421 => 191,  416 => 190,  405 => 182,  398 => 177,  395 => 176,  386 => 172,  381 => 171,  368 => 161,  363 => 159,  356 => 155,  347 => 151,  343 => 150,  336 => 146,  327 => 140,  321 => 139,  314 => 134,  311 => 133,  306 => 132,  302 => 130,  300 => 129,  294 => 125,  285 => 121,  279 => 119,  271 => 114,  267 => 112,  265 => 111,  255 => 104,  246 => 100,  242 => 99,  235 => 95,  226 => 89,  220 => 88,  213 => 83,  208 => 82,  202 => 79,  194 => 73,  189 => 70,  186 => 69,  183 => 68,  180 => 67,  172 => 63,  164 => 59,  161 => 58,  159 => 57,  153 => 55,  147 => 52,  143 => 51,  140 => 50,  137 => 49,  135 => 48,  129 => 45,  125 => 44,  111 => 35,  107 => 34,  100 => 30,  93 => 26,  82 => 18,  77 => 17,  73 => 15,  71 => 14,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evenement/show.html.twig", "/Users/maximedaude/TechProjet/ESGI/PA-4IWJ-Grp1/templates/evenement/show.html.twig");
    }
}
