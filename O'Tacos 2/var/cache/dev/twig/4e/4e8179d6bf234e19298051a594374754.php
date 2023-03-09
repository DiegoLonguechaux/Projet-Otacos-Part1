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

/* frite.html.twig */
class __TwigTemplate_ef1a7fbdd5bf91e45582ff746e029d24 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frite.html.twig"));

        // line 1
        echo "


            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFrite"]) || array_key_exists("listeFrite", $context) ? $context["listeFrite"] : (function () { throw new RuntimeError('Variable "listeFrite" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["frite"]) {
            // line 5
            echo "                <div>
                    <div class=\"button_categorie\">
                            <img class=\"button_image\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frite"], "image", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\">
                            <p class=\"button_content\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frite"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
                            <p class=\"button_description\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frite"], "description", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                            <p class=\"button_price\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frite"], "price", [], "any", false, false, false, 10), "html", null, true);
            echo " €</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "frite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


            {% for frite in listeFrite %}
                <div>
                    <div class=\"button_categorie\">
                            <img class=\"button_image\" src=\"{{frite.image}}\" alt=\"\">
                            <p class=\"button_content\">{{frite.title}}</p>
                            <p class=\"button_description\">{{frite.description}}</p>
                            <p class=\"button_price\">{{frite.price}} €</p>
                    </div>
                </div>
            {% endfor %}

", "frite.html.twig", "C:\\Users\\sella\\Desktop\\O'Tacos 2\\templates\\frite.html.twig");
    }
}
