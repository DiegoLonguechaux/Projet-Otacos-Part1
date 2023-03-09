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

/* panier.html.twig */
class __TwigTemplate_f3ee8d09120ae777f924a865b1c1150a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier.html.twig"));

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


        <div class=\"section\">
            

                <header>
                    <div class=\"header_panier\">
                        <div class=\"header__return\" onclick=\"window.location.href = '/click&collect';\">
                            <img src=\"/images/return.svg\" alt=\"\">
                        </div>
                        <div class=\"header__content\">
                            <h1 class=\"header__loc\">Limoges<br>A emporter</h1>
                        </div>
                            <img class=\"logo\" src=\"/images/logotacos.svg\" alt=\"\">
                        
                    </div>  
                </header>

            <div class=\"panier\">
                <div class=\"panier__content\">
                    <div>
                        <h2 class=\"title_categorie_panier\">TACOS</h2>
                        <div class=\"confirmation\">
                            <div class=\"button_resume\">
                                <p class=\"button_titre\">Taille M : Double dose de viande au choix</p>
                                <p class=\"button_option_panier\">Poulet</p>
                                <p class=\"button_price_panier\">7€</p>
                            </div>
                            <img class='croix' src=\"/images/croixblanche.svg\" alt=\"\">
                        </div>
                    </div>

                    <div>
                        <h2 class=\"title_categorie_panier\">FRITES</h2>
                        <div class=\"confirmation\">
                            <div class=\"button_resume\">
                                <p class=\"button_titre\">Frite sauce fuego</p>
                                <p class=\"button_option_panier\">Ketchup</p>
                                <p class=\"button_price_panier\">1.5€</p>
                            </div>
                            <img class='croix' src=\"/images/croixblanche.svg\" alt=\"\">
                        </div>
                    </div>

                    <div>
                        <h2 class=\"title_categorie_panier\">BOISSONS</h2>
                        <div class=\"confirmation\">
                            <div class=\"button_resume\">
                                <p class=\"button_titre\">coca-cola</p>
                                <p class=\"button_option_panier\"></p>
                                <p class=\"button_price_panier\">1€</p>
                            </div>
                            <img class='croix' src=\"/images/croixblanche.svg\" alt=\"\">
                        </div>
                    </div>
                </div>

                <div class=\"ticket\">

                    <h1 class=\"ticket__title\" >Récapitulatif commande</h1>
                    <div class=\"lieu\">
                        <img class=\"loc\" src=\"/images/LOC.png\" alt=\"\">
                        <p class=\"lieu_item\">Limoges <br> 39 Rue jean Jaurès, <br> 87000 Limoges</p>
                    </div>
                    <ul class=\"list__ticket\">                    
                        <li class=\"list__item\">
                            <p>x1 TACOS TAILLE L</p> <p>7€</p> 
                        </li>
                        <li class=\"list__item\">
                          <p>x1 FRITE SAUCE FUEGO</p> <p>1.50€</p>
                         </li>
                        <li class=\"list__item\">
                           <p>x1 COCA-COLA (50CL)</p> <p>1€</p>
                         </li>
                    </ul>
                    <div class=\"total\">
                        <div class=\"total__content\">
                            <p class=\"total__sous\">sous total</p>
                            <p class=\"total__sous-prix\">9.50€</p>
                        </div>
                        <HR>
                        <div class=\"total__content\">
                            <p class=\"total__item\">total</p>
                            <p class=\"total__prix\">9.50€</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

 

    </main>
    ";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "</body>";
        
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

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/scripts.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  232 => 156,  225 => 155,  215 => 8,  208 => 7,  201 => 158,  199 => 155,  52 => 10,  50 => 7,  42 => 1,);
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


        <div class=\"section\">
            

                <header>
                    <div class=\"header_panier\">
                        <div class=\"header__return\" onclick=\"window.location.href = '/click&collect';\">
                            <img src=\"/images/return.svg\" alt=\"\">
                        </div>
                        <div class=\"header__content\">
                            <h1 class=\"header__loc\">Limoges<br>A emporter</h1>
                        </div>
                            <img class=\"logo\" src=\"/images/logotacos.svg\" alt=\"\">
                        
                    </div>  
                </header>

            <div class=\"panier\">
                <div class=\"panier__content\">
                    <div>
                        <h2 class=\"title_categorie_panier\">TACOS</h2>
                        <div class=\"confirmation\">
                            <div class=\"button_resume\">
                                <p class=\"button_titre\">Taille M : Double dose de viande au choix</p>
                                <p class=\"button_option_panier\">Poulet</p>
                                <p class=\"button_price_panier\">7€</p>
                            </div>
                            <img class='croix' src=\"/images/croixblanche.svg\" alt=\"\">
                        </div>
                    </div>

                    <div>
                        <h2 class=\"title_categorie_panier\">FRITES</h2>
                        <div class=\"confirmation\">
                            <div class=\"button_resume\">
                                <p class=\"button_titre\">Frite sauce fuego</p>
                                <p class=\"button_option_panier\">Ketchup</p>
                                <p class=\"button_price_panier\">1.5€</p>
                            </div>
                            <img class='croix' src=\"/images/croixblanche.svg\" alt=\"\">
                        </div>
                    </div>

                    <div>
                        <h2 class=\"title_categorie_panier\">BOISSONS</h2>
                        <div class=\"confirmation\">
                            <div class=\"button_resume\">
                                <p class=\"button_titre\">coca-cola</p>
                                <p class=\"button_option_panier\"></p>
                                <p class=\"button_price_panier\">1€</p>
                            </div>
                            <img class='croix' src=\"/images/croixblanche.svg\" alt=\"\">
                        </div>
                    </div>
                </div>

                <div class=\"ticket\">

                    <h1 class=\"ticket__title\" >Récapitulatif commande</h1>
                    <div class=\"lieu\">
                        <img class=\"loc\" src=\"/images/LOC.png\" alt=\"\">
                        <p class=\"lieu_item\">Limoges <br> 39 Rue jean Jaurès, <br> 87000 Limoges</p>
                    </div>
                    <ul class=\"list__ticket\">                    
                        <li class=\"list__item\">
                            <p>x1 TACOS TAILLE L</p> <p>7€</p> 
                        </li>
                        <li class=\"list__item\">
                          <p>x1 FRITE SAUCE FUEGO</p> <p>1.50€</p>
                         </li>
                        <li class=\"list__item\">
                           <p>x1 COCA-COLA (50CL)</p> <p>1€</p>
                         </li>
                    </ul>
                    <div class=\"total\">
                        <div class=\"total__content\">
                            <p class=\"total__sous\">sous total</p>
                            <p class=\"total__sous-prix\">9.50€</p>
                        </div>
                        <HR>
                        <div class=\"total__content\">
                            <p class=\"total__item\">total</p>
                            <p class=\"total__prix\">9.50€</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

 

    </main>
    {% block javascripts %}
        <script src=\"{{ asset('/scripts.js') }}\"></script>
    {% endblock %}
</body>", "panier.html.twig", "C:\\Users\\sellay1\\travail_local\\O'tacos\\itération 4\\O'Tacos 4\\templates\\panier.html.twig");
    }
}
