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

/* user/update.html.twig */
class __TwigTemplate_3edcc52726985fdfbba7d1057b2ad9eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/update.html.twig", 1);
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

        echo "Modification profil";
        
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
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
            <h1 class=\"text-center mt-2\">Modifier le profil</h1>
                <label class=\"form-label\" for=\"email\">Email</label>
                <input type=\"text\" id=\"email\" required=\"required\" class=\"form-control mb-3\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "\" disabled>
                <label class=\"form-label\" for=\"nom\">Nom</label>
                <input type=\"text\" id=\"nom\" required=\"required\" class=\"form-control mb-3\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "\" disabled>
                <label class=\"form-label\" for=\"prenom\">Prénom</label>
                <input type=\"text\" id=\"prenom\" required=\"required\" class=\"form-control mb-3\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
        echo "\" disabled>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 17, $this->source); })()), "adresse", [], "any", false, false, false, 17), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "adresse", [], "any", false, false, false, 17)]);
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 18, $this->source); })()), "codePostal", [], "any", false, false, false, 18), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "codePostal", [], "any", false, false, false, 18)]);
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 19, $this->source); })()), "ville", [], "any", false, false, false, 19), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "ville", [], "any", false, false, false, 19)]);
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 20, $this->source); })()), "numeroPermis", [], "any", false, false, false, 20), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "numeroPermis", [], "any", false, false, false, 20)]);
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), 'row', ["required" => false]);
        echo "
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateForm"]) || array_key_exists("updateForm", $context) ? $context["updateForm"] : (function () { throw new RuntimeError('Variable "updateForm" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
                ";
        // line 23
        if ((isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, (isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 26,  139 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  100 => 13,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification profil{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
            <h1 class=\"text-center mt-2\">Modifier le profil</h1>
                <label class=\"form-label\" for=\"email\">Email</label>
                <input type=\"text\" id=\"email\" required=\"required\" class=\"form-control mb-3\" value=\"{{ app.user.email }}\" disabled>
                <label class=\"form-label\" for=\"nom\">Nom</label>
                <input type=\"text\" id=\"nom\" required=\"required\" class=\"form-control mb-3\" value=\"{{ app.user.nom }}\" disabled>
                <label class=\"form-label\" for=\"prenom\">Prénom</label>
                <input type=\"text\" id=\"prenom\" required=\"required\" class=\"form-control mb-3\" value=\"{{ app.user.prenom }}\" disabled>
                {{ form_start(updateForm) }}
                    {{ form_row(updateForm.adresse, {'value': app.user.adresse}) }}
                    {{ form_row(updateForm.codePostal, {'value': app.user.codePostal}) }}
                    {{ form_row(updateForm.ville, {'value': app.user.ville}) }}
                    {{ form_row(updateForm.numeroPermis, {'value': app.user.numeroPermis}) }}
                    {{ form_row(updateForm.password, {'required': false}) }}
                {{ form_end(updateForm) }}
                {% if validation %}
                    <div class=\"alert alert-success\">{{ validation }}</div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

", "user/update.html.twig", "C:\\Users\\TOTO\\Desktop\\dwwm\\projetLoc\\location\\templates\\user\\update.html.twig");
    }
}
