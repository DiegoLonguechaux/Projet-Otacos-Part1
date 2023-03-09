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
                    <img src=\"./images/france.svg\" alt=\"\">
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
                    <img class=\"logotacos\" src=\"./images/logotacos.svg\" alt=\"\">
                    <div class=\"socialmedia\">
                        <img class=\"fb\" src=\"./images/fb.svg\" alt=\"\">
                        <img class=\"instagram\" src=\"./images/insta.svg\" alt=\"\">
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
            <div>
                <div class=\"header\">
                    <img class=\"return\" src=\"./images/return.svg\" alt=\"accueil\" href=\"accueil.html\">
                    <div class=\"header_content\">
                        <h1 class=\"header_title\">Limoges<br>A emporter</h1>
                    </div>
                    <img class=\"logo\" src=\"./images/logotacos.svg\" alt=\"\">
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
        // line 92
        if (array_key_exists("listeTacos", $context)) {
            // line 93
            echo "                <div>
                    <h2 class=\"title_categorie\">TACOS</h2>
                    <div class=\"buttons\">
                        ";
            // line 96
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
            echo "                <div>
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
            echo "                <div>
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
        echo "            </div>
        </section>
    </div>

 

    </main>
</body>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
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
        return array (  208 => 10,  201 => 9,  186 => 121,  179 => 117,  174 => 114,  172 => 113,  167 => 110,  160 => 106,  155 => 103,  153 => 102,  149 => 100,  142 => 96,  137 => 93,  135 => 92,  53 => 12,  50 => 9,  41 => 1,);
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
        <link href=\"{{ asset('../css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
</head>
<body>

<main class=\"page\">
    <div class=\"organisation\">
        <div class=\"barredenav\">
            <div class=\"sidebar\">

                <div class=\"selection_lang\">
                    <img src=\"./images/france.svg\" alt=\"\">
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
                    <img class=\"logotacos\" src=\"./images/logotacos.svg\" alt=\"\">
                    <div class=\"socialmedia\">
                        <img class=\"fb\" src=\"./images/fb.svg\" alt=\"\">
                        <img class=\"instagram\" src=\"./images/insta.svg\" alt=\"\">
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
            <div>
                <div class=\"header\">
                    <img class=\"return\" src=\"./images/return.svg\" alt=\"accueil\" href=\"accueil.html\">
                    <div class=\"header_content\">
                        <h1 class=\"header_title\">Limoges<br>A emporter</h1>
                    </div>
                    <img class=\"logo\" src=\"./images/logotacos.svg\" alt=\"\">
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
                    <div class=\"buttons\">
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
            </div>
        </section>
    </div>

 

    </main>
</body>
", "./base.html.twig", "C:\\Users\\sellay1\\travail_local\\O'tacos\\Itération 2\\O'Tacos 2\\templates\\base.html.twig");
    }
}
