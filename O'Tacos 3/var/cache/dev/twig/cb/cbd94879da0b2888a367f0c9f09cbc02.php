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

/* boisson.html.twig */
class __TwigTemplate_03c1e86220ed286603cb30e5a92fc4f8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boisson.html.twig"));

        // line 1
        echo "

            ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeBoisson"]) || array_key_exists("listeBoisson", $context) ? $context["listeBoisson"] : (function () { throw new RuntimeError('Variable "listeBoisson" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["boisson"]) {
            // line 4
            echo "                <div onclick=\"window.location.href = '/click&collect/options';\">
                    <div class=\"button_categorie\">
                            <img class=\"button_image\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boisson"], "image", [], "any", false, false, false, 6), "html", null, true);
            echo "\" alt=\"\">
                            <p class=\"button_content\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boisson"], "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
                            <p class=\"button_description\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boisson"], "description", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
                            <p class=\"button_price\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boisson"], "price", [], "any", false, false, false, 9), "html", null, true);
            echo " €</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boisson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "boisson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

            {% for boisson in listeBoisson %}
                <div onclick=\"window.location.href = '/click&collect/options';\">
                    <div class=\"button_categorie\">
                            <img class=\"button_image\" src=\"{{boisson.image}}\" alt=\"\">
                            <p class=\"button_content\">{{boisson.title}}</p>
                            <p class=\"button_description\">{{boisson.description}}</p>
                            <p class=\"button_price\">{{boisson.price}} €</p>
                    </div>
                </div>
            {% endfor %}

", "boisson.html.twig", "C:\\Users\\sellay1\\travail_local\\O'Tacos 3\\templates\\boisson.html.twig");
    }
}
