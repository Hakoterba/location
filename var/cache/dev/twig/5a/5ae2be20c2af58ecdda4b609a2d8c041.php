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

/* home/index.html.twig */
class __TwigTemplate_8b8b128eaf529754477db1d637cc7caf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
        .carousel-item img {
            object-fit: cover;
            height: 1000px;
            width: 100%;
        }
</style>
<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voiture");
        echo "\">Liste des voitures </a>
    <div class=\"container-fluid p-5\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <!-- Indicateurs -->
            <ol class=\"carousel-indicators\">
                <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\"></li>
                <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\"></li>
                <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\"></li>
            </ol>
            
            <!-- Images -->
            <div class=\"carousel-inner\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeVoiture"]) || array_key_exists("listeVoiture", $context) ? $context["listeVoiture"] : (function () { throw new RuntimeError('Variable "listeVoiture" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["voiture"]) {
            // line 26
            echo "                ";
            if (($context["key"] == 0)) {
                // line 27
                echo "                    ";
                $context["active"] = " active";
                // line 28
                echo "                ";
            } else {
                // line 29
                echo "                    ";
                $context["active"] = "";
                // line 30
                echo "                ";
            }
            // line 31
            echo "                <div class=\"carousel-item";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\">
                    <a href=\"#\">
                        <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/" . twig_get_attribute($this->env, $this->source, $context["voiture"], "image", [], "any", false, false, false, 33)) . "")), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"d-block w-100\">
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['voiture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
            
            <!-- Flèches -->
            <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Précédent</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Suivant</span>
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 37,  137 => 33,  131 => 31,  128 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  112 => 25,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
        .carousel-item img {
            object-fit: cover;
            height: 1000px;
            width: 100%;
        }
</style>
<a href=\"{{ path('app_voiture') }}\">Liste des voitures </a>
    <div class=\"container-fluid p-5\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <!-- Indicateurs -->
            <ol class=\"carousel-indicators\">
                <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\"></li>
                <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\"></li>
                <li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\"></li>
            </ol>
            
            <!-- Images -->
            <div class=\"carousel-inner\">
            {% for key, voiture in listeVoiture %}
                {% if key == 0 %}
                    {% set active = \" active\" %}
                {% else %}
                    {% set active = \"\" %}
                {% endif %}
                <div class=\"carousel-item{{active}}\">
                    <a href=\"#\">
                        <img src=\"{{ asset('images/' ~ voiture.image ~ '') }}\" alt=\"Image {{voiture.modele}}\" class=\"d-block w-100\">
                    </a>
                </div>
            {% endfor %}
            </div>
            
            <!-- Flèches -->
            <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Précédent</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Suivant</span>
            </a>
        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\TOTO\\Desktop\\dwwm\\projetLoc\\location\\templates\\home\\index.html.twig");
    }
}
