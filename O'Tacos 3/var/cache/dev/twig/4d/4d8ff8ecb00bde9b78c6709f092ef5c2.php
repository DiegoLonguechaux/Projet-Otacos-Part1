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

/* tacosoptions.html.twig */
class __TwigTemplate_0f1c677671176a7d97ab34fd1f6abf15 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tacosoptions.html.twig"));

        // line 1
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTacosOption"]) || array_key_exists("listeTacosOption", $context) ? $context["listeTacosOption"] : (function () { throw new RuntimeError('Variable "listeTacosOption" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tacos"]) {
            // line 2
            echo "
                    <div class=\"picture\">
                        <div class=\"picture_food\">
                            <img class=\"imgoption\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                    </div>
                
                
                    <div class=\"item_card\">
                        <div class=\"items_card\">
                            <div class=\"group_title_card\">
                                <div class=\"croix\">
                                    <a href=\"croix\">
                                        <img class=\"croix_item\" src=\"/images/croix.svg\" alt=\"\">
                                    </a>
                                </div>
                                <h1 class=\"card_title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h1>
                                <h1 class=\"card_title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "price", [], "any", false, false, false, 19), "html", null, true);
            echo " € </h1>                    
                            </div>
                            <p class=\"choice\">Fait ton choix :</p>

                            <div class=\"button_option\">
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeTacosOption"]) || array_key_exists("listeTacosOption", $context) ? $context["listeTacosOption"] : (function () { throw new RuntimeError('Variable "listeTacosOption" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 25
                echo "                                <div class=\"button_recipe\">
                                    <p class=\"button_item\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 26), "html", null, true);
                echo " | + ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "priceoption", [], "any", false, false, false, 26), "html", null, true);
                echo " €</p>
                                </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                            </div>
                        </div>

                        <div class=\"valider\">
                            <div class=\"button_validation\">
                                <p class=\"button_valider\">Valider</p>
                            </div>
                        </div>
                    </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tacosoptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  85 => 26,  82 => 25,  78 => 24,  70 => 19,  66 => 18,  50 => 5,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("     {% for tacos in listeTacosOption %}

                    <div class=\"picture\">
                        <div class=\"picture_food\">
                            <img class=\"imgoption\" src=\"{{tacos.image}}\" alt=\"\">
                        </div>
                    </div>
                
                
                    <div class=\"item_card\">
                        <div class=\"items_card\">
                            <div class=\"group_title_card\">
                                <div class=\"croix\">
                                    <a href=\"croix\">
                                        <img class=\"croix_item\" src=\"/images/croix.svg\" alt=\"\">
                                    </a>
                                </div>
                                <h1 class=\"card_title\">{{tacos.title}}</h1>
                                <h1 class=\"card_title\">{{tacos.price}} € </h1>                    
                            </div>
                            <p class=\"choice\">Fait ton choix :</p>

                            <div class=\"button_option\">
                        {% for option in listeTacosOption %}
                                <div class=\"button_recipe\">
                                    <p class=\"button_item\">{{option.option}} | + {{option.priceoption}} €</p>
                                </div>
                        {% endfor %}
                            </div>
                        </div>

                        <div class=\"valider\">
                            <div class=\"button_validation\">
                                <p class=\"button_valider\">Valider</p>
                            </div>
                        </div>
                    </div>

        {% endfor %}", "tacosoptions.html.twig", "C:\\Users\\sellay1\\travail_local\\O'Tacos 3\\templates\\tacosoptions.html.twig");
    }
}
