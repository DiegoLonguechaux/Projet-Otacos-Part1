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

/* tacos.html.twig */
class __TwigTemplate_4f9a717d46df117af1079951d486a7aa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tacos.html.twig"));

        // line 1
        echo "
            ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTacos"]) || array_key_exists("listeTacos", $context) ? $context["listeTacos"] : (function () { throw new RuntimeError('Variable "listeTacos" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tacos"]) {
            // line 3
            echo "                    <div onclick=\"window.location.href = '/click&collect/options';\">
                        <div class=\"button_categorie\">
                                <img class=\"button_image\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\" alt=\"\">
                                <p class=\"button_content\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
                                <p class=\"button_description\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "description", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
                                <p class=\"button_price\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tacos"], "price", [], "any", false, false, false, 8), "html", null, true);
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
        return "tacos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  55 => 6,  51 => 5,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
            {% for tacos in listeTacos %}
                    <div onclick=\"window.location.href = '/click&collect/options';\">
                        <div class=\"button_categorie\">
                                <img class=\"button_image\" src=\"{{tacos.image}}\" alt=\"\">
                                <p class=\"button_content\">{{tacos.title}}</p>
                                <p class=\"button_description\">{{tacos.description}}</p>
                                <p class=\"button_price\">{{tacos.price}} €</p>
                        </div>
                    </div>
            {% endfor %}", "tacos.html.twig", "C:\\Users\\sella\\Desktop\\Travail maison\\SAE 301\\PHP\\O'tacos\\Itération 3\\O'Tacos 3\\templates\\tacos.html.twig");
    }
}
