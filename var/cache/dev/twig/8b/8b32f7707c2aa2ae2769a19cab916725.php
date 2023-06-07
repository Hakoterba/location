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

/* reservation/list.html.twig */
class __TwigTemplate_5e7e6032ca3e6b5af716eee57875c576 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/list.html.twig", 1);
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

        echo "Mes réservations";
        
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
        echo "<div class=\"container mt-4\">
    <div class=\"table-responsive\">
        <h2>Réservations en cours</h2>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationEnCours"]) || array_key_exists("reservationEnCours", $context) ? $context["reservationEnCours"] : (function () { throw new RuntimeError('Variable "reservationEnCours" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "voiture", [], "any", false, false, false, 21), "marque", [], "any", false, false, false, 21), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "voiture", [], "any", false, false, false, 21), "modele", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 22), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 23), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prix", [], "any", false, false, false, 24), "html", null, true);
            echo "€</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"container mt-4\">
    <div class=\"table-responsive\">
        <h2>Réservations à venir</h2>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationFutur"]) || array_key_exists("reservationFutur", $context) ? $context["reservationFutur"] : (function () { throw new RuntimeError('Variable "reservationFutur" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 47
            echo "                    <tr>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "voiture", [], "any", false, false, false, 48), "marque", [], "any", false, false, false, 48), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "voiture", [], "any", false, false, false, 48), "modele", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 49), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 50), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prix", [], "any", false, false, false, 51), "html", null, true);
            echo "€</td>
                        <td>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "idReservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"
                                class=\"btn btn-danger\"
                                onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"container mt-4\">
    <h2>Réservations passées</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationPasse"]) || array_key_exists("reservationPasse", $context) ? $context["reservationPasse"] : (function () { throw new RuntimeError('Variable "reservationPasse" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 80
            echo "                    <tr>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "voiture", [], "any", false, false, false, 81), "marque", [], "any", false, false, false, 81), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "voiture", [], "any", false, false, false, 81), "modele", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 82), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 83), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prix", [], "any", false, false, false, 84), "html", null, true);
            echo "€</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 87,  235 => 84,  231 => 83,  227 => 82,  221 => 81,  218 => 80,  214 => 79,  194 => 61,  180 => 53,  175 => 51,  171 => 50,  167 => 49,  161 => 48,  158 => 47,  154 => 46,  133 => 27,  124 => 24,  120 => 23,  116 => 22,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes réservations{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"table-responsive\">
        <h2>Réservations en cours</h2>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                {% for reservation in reservationEnCours %}
                    <tr>
                        <td>{{ reservation.voiture.marque }} : {{ reservation.voiture.modele }}</td>
                        <td>{{ reservation.dateDebut|date('d-m-Y H:i') }}</td>
                        <td>{{ reservation.dateFin|date('d-m-Y H:i') }}</td>
                        <td>{{ reservation.prix }}€</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<div class=\"container mt-4\">
    <div class=\"table-responsive\">
        <h2>Réservations à venir</h2>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% for reservation in reservationFutur %}
                    <tr>
                        <td>{{ reservation.voiture.marque }} : {{ reservation.voiture.modele }}</td>
                        <td>{{ reservation.dateDebut|date('d-m-Y H:i') }}</td>
                        <td>{{ reservation.dateFin|date('d-m-Y H:i') }}</td>
                        <td>{{ reservation.prix }}€</td>
                        <td>
                            <a href=\"{{ path('reservation_delete', {'id': app.user.id, 'idReservation': reservation.id}) }}\"
                                class=\"btn btn-danger\"
                                onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<div class=\"container mt-4\">
    <h2>Réservations passées</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                {% for reservation in reservationPasse %}
                    <tr>
                        <td>{{ reservation.voiture.marque }} : {{ reservation.voiture.modele }}</td>
                        <td>{{ reservation.dateDebut|date('d-m-Y H:i') }}</td>
                        <td>{{ reservation.dateFin|date('d-m-Y H:i') }}</td>
                        <td>{{ reservation.prix }}€</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "reservation/list.html.twig", "C:\\Users\\TOTO\\Desktop\\dwwm\\projetLoc\\location\\templates\\reservation\\list.html.twig");
    }
}
