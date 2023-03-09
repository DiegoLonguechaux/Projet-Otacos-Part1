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

/* product.html.twig */
class __TwigTemplate_078f27e953cdfe86b6724e4521d559fc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        // line 1
        echo "

            ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tacos"]) {
            // line 4
            echo "                <div>
                    <div class=\"button_categorie\">
                            <img class=\"button_image\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "tacosImage", [], "any", false, false, false, 6), "html", null, true);
            echo "\" alt=\"\">
                            <p class=\"button_content\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
                            <p class=\"button_description\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "description", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
                            <p class=\"button_price\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "price", [], "any", false, false, false, 9), "html", null, true);
            echo " €</p>
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
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

            {% for tacos in liste %}
                <div>
                    <div class=\"button_categorie\">
                            <img class=\"button_image\" src=\"{{tacos.tacosImage}}\" alt=\"\">
                            <p class=\"button_content\">{{tacos.title}}</p>
                            <p class=\"button_description\">{{tacos.description}}</p>
                            <p class=\"button_price\">{{tacos.price}} €</p>
                    </div>
                </div>
            {% endfor %}", "product.html.twig", "C:\\Users\\sellay1\\Travail_local\\O'Tacos 2\\templates\\product.html.twig");
    }
}
