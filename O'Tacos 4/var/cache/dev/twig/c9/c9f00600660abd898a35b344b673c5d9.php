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

/* ./pageoptionstacos.html.twig */
class __TwigTemplate_aae70bdaf3e2e2d1111747690ea0a8e5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./pageoptionstacos.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <title>Original French Tacos - O'Tacos</title>
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
                                <a class=\"primary-nav__link\" href=\"/click&collect\">Click & Collect</a>
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
            <div>
                <div class=\"header\">
                    <img onclick=\"window.location.href = '/click&collect';\" class=\"return\" src=\"/images/return.svg\" alt=\"accueil\">
                    <div class=\"header_content\">
                        <h1 class=\"header_title\" id=\"header_title\">Limoges<br>A emporter</h1>
                    </div>
                    <img class=\"logo\" id=\"logo\"src=\"/images/logotacos.svg\" alt=\"\">
                </div>


                

                

                <div class=\"card\">
                    ";
        // line 79
        echo twig_include($this->env, $context, "tacosoptionsclassic.html.twig");
        echo "
                </div> 
            </div> 
        </section>
    </div>
    </main>
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "./pageoptionstacos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 8,  136 => 7,  122 => 79,  51 => 10,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% block stylesheets %}
        <link href=\"{{ asset('/css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <title>Original French Tacos - O'Tacos</title>
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
                                <a class=\"primary-nav__link\" href=\"/click&collect\">Click & Collect</a>
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
            <div>
                <div class=\"header\">
                    <img onclick=\"window.location.href = '/click&collect';\" class=\"return\" src=\"/images/return.svg\" alt=\"accueil\">
                    <div class=\"header_content\">
                        <h1 class=\"header_title\" id=\"header_title\">Limoges<br>A emporter</h1>
                    </div>
                    <img class=\"logo\" id=\"logo\"src=\"/images/logotacos.svg\" alt=\"\">
                </div>


                

                

                <div class=\"card\">
                    {{ include('tacosoptionsclassic.html.twig') }}
                </div> 
            </div> 
        </section>
    </div>
    </main>
</body>", "./pageoptionstacos.html.twig", "C:\\Users\\sellay1\\travail_local\\O'Tacos 3\\templates\\pageoptionstacos.html.twig");
    }
}