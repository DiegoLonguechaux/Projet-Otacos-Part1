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

/* ./base.html.twig */
class __TwigTemplate_e8c4356da3ded1bfc592ff62b2ec9e49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Original French Tacos - O'Tacos</title>
     ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>

<main class=\"page\">
    <div class=\"organisation\">
        <div class=\"barredenav\">
            <div class=\"sidebar\">

                <div class=\"selection_lang\">
                    <img src=\"/images/france.svg\" alt=\"\">
                    <a class=\"langue\" href=\"\">FR</a>
                </div>
    
                <div class=\"selection-nav\">
                    <nav class=\"primary-nav\">
                        <ul class=\"primary-nav__list\">
                            <li class=\"primary-nav__item active\">
                                <a class=\"primary-nav__link\" href=\"/\">Accueil</a>
                            </li>
                            <li class=\"primary-nav__item\">
                                <a class=\"primary-nav__link\" href=\"#\">Click & Collect</a>
                            </li>
                        </ul>
                    </nav>
                </div>
    
                <footer class=\"footer\">
                    <img class=\"logotacos\" src=\"/images/logotacos.svg\" alt=\"\">
                    <div class=\"socialmedia\">
                        <img class=\"fb\" src=\"/images/fb.svg\" alt=\"\">
                        <img class=\"instagram\" src=\"/images/insta.svg\" alt=\"\">
                    </div>
    
                    <div class=\"info\">
                        <ul class=\"info_list\">
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Contact</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Mentions légales</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>


        <section>
            <div class=\"header\">
                <img onclick=\"window.location.href = '/';\" class=\"return\" src=\"/images/return.svg\" alt=\"accueil\">
                <div class=\"header_content\">
                    <h1 class=\"header_title\">Limoges<br>A emporter</h1>
                </div>
                <img class=\"logo\" src=\"/images/logotacos.svg\" alt=\"\">
            </div>


            <div>
                <ul class=\"categorie\">
                    <li class=\"categorie_item_a\">
                        <a class=\"categorie_font\" href=\"/click&collect\">ALL</a>
                    </li>
                    <li class=\"categorie_item_t\">
                        <a class=\"categorie_font\" href=\"/tacos\">TACOS</a>
                    </li>
                        <li class=\"categorie_item_f\">
                        <a class=\"categorie_font\" href=\"/frites\">FRITES</a>
                    </li>
                    <li class=\"categorie_item_b\">
                        <a class=\"categorie_font\" href=\"/boissons\">BOISSONS</a>
                    </li>
                </ul>
            </div> 


            ";
        // line 91
        if (array_key_exists("listeTacos", $context)) {
            // line 92
            echo "                    <div>
                        <h2 class=\"title_categorie\">TACOS</h2>
                        <div class=\"buttons\" a href=\"/click&collect\" >
                            ";
            // line 95
            echo twig_include($this->env, $context, "tacos.html.twig");
            echo "
                        </div>
                    </div>

            ";
        }
        // line 100
        echo "                

            ";
        // line 102
        if (array_key_exists("listeFrite", $context)) {
            // line 103
            echo "                    <div>
                        <h2 class=\"title_categorie\">FRITES</h2>
                        <div class=\"buttons\">
                            ";
            // line 106
            echo twig_include($this->env, $context, "frite.html.twig");
            echo "
                        </div>
                    </div>
            ";
        }
        // line 110
        echo "


            ";
        // line 113
        if (array_key_exists("listeBoisson", $context)) {
            // line 114
            echo "                    <div>
                        <h2 class=\"title_categorie\">BOISSONS</h2>
                        <div class=\"buttons\">
                            ";
            // line 117
            echo twig_include($this->env, $context, "boisson.html.twig");
            echo "
                        </div>
                    </div>
            ";
        }
        // line 121
        echo "        </section>
    </div>
    
    <div class=\"valider_base\">
        <div class=\"button_validation\" onclick=\"window.location.href = '/click&collect/tacosclassicoptions/panier';\">
            <p class=\"button_valider\">Valider</p>
        </div>
    </div>
 

    </main>

    ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/scripts.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 134,  228 => 133,  218 => 10,  211 => 9,  203 => 136,  201 => 133,  187 => 121,  180 => 117,  175 => 114,  173 => 113,  168 => 110,  161 => 106,  156 => 103,  154 => 102,  150 => 100,  142 => 95,  137 => 92,  135 => 91,  54 => 12,  51 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Original French Tacos - O'Tacos</title>
     {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        <link href=\"{{ asset('/css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
</head>
<body>

<main class=\"page\">
    <div class=\"organisation\">
        <div class=\"barredenav\">
            <div class=\"sidebar\">

                <div class=\"selection_lang\">
                    <img src=\"/images/france.svg\" alt=\"\">
                    <a class=\"langue\" href=\"\">FR</a>
                </div>
    
                <div class=\"selection-nav\">
                    <nav class=\"primary-nav\">
                        <ul class=\"primary-nav__list\">
                            <li class=\"primary-nav__item active\">
                                <a class=\"primary-nav__link\" href=\"/\">Accueil</a>
                            </li>
                            <li class=\"primary-nav__item\">
                                <a class=\"primary-nav__link\" href=\"#\">Click & Collect</a>
                            </li>
                        </ul>
                    </nav>
                </div>
    
                <footer class=\"footer\">
                    <img class=\"logotacos\" src=\"/images/logotacos.svg\" alt=\"\">
                    <div class=\"socialmedia\">
                        <img class=\"fb\" src=\"/images/fb.svg\" alt=\"\">
                        <img class=\"instagram\" src=\"/images/insta.svg\" alt=\"\">
                    </div>
    
                    <div class=\"info\">
                        <ul class=\"info_list\">
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Contact</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Mentions légales</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>


        <section>
            <div class=\"header\">
                <img onclick=\"window.location.href = '/';\" class=\"return\" src=\"/images/return.svg\" alt=\"accueil\">
                <div class=\"header_content\">
                    <h1 class=\"header_title\">Limoges<br>A emporter</h1>
                </div>
                <img class=\"logo\" src=\"/images/logotacos.svg\" alt=\"\">
            </div>


            <div>
                <ul class=\"categorie\">
                    <li class=\"categorie_item_a\">
                        <a class=\"categorie_font\" href=\"/click&collect\">ALL</a>
                    </li>
                    <li class=\"categorie_item_t\">
                        <a class=\"categorie_font\" href=\"/tacos\">TACOS</a>
                    </li>
                        <li class=\"categorie_item_f\">
                        <a class=\"categorie_font\" href=\"/frites\">FRITES</a>
                    </li>
                    <li class=\"categorie_item_b\">
                        <a class=\"categorie_font\" href=\"/boissons\">BOISSONS</a>
                    </li>
                </ul>
            </div> 


            {% if listeTacos is defined %}
                    <div>
                        <h2 class=\"title_categorie\">TACOS</h2>
                        <div class=\"buttons\" a href=\"/click&collect\" >
                            {{ include('tacos.html.twig') }}
                        </div>
                    </div>

            {% endif %}
                

            {% if listeFrite is defined %}
                    <div>
                        <h2 class=\"title_categorie\">FRITES</h2>
                        <div class=\"buttons\">
                            {{ include('frite.html.twig') }}
                        </div>
                    </div>
            {% endif %}



            {% if listeBoisson is defined %}
                    <div>
                        <h2 class=\"title_categorie\">BOISSONS</h2>
                        <div class=\"buttons\">
                            {{ include('boisson.html.twig') }}
                        </div>
                    </div>
            {% endif %}
        </section>
    </div>
    
    <div class=\"valider_base\">
        <div class=\"button_validation\" onclick=\"window.location.href = '/click&collect/tacosclassicoptions/panier';\">
            <p class=\"button_valider\">Valider</p>
        </div>
    </div>
 

    </main>

    {% block javascripts %}
        <script src=\"{{ asset('/scripts.js') }}\"></script>
    {% endblock %}
</body>
", "./base.html.twig", "C:\\Users\\sellay1\\travail_local\\O'tacos\\itération 4\\O'Tacos 4\\templates\\base.html.twig");
    }
}
