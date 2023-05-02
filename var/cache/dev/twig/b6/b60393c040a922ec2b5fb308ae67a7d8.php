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

/* participation_activity/index.html.twig */
class __TwigTemplate_2845c09fc9088115daab9600530143ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navs' => [$this, 'block_navs'],
            'mininavs' => [$this, 'block_mininavs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_activity/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "participation_activity/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tMes Réservations Hotels - Tounesna
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_navs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navs"));

        // line 8
        echo "\t<li>
\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">Plats</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a>
\t</li>
\t";
        // line 30
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_mininavs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mininavs"));

        // line 34
        echo "\t<li>
\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">Plats</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a>
\t</li>
\t";
        // line 56
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "
\t<div class=\"page-top\" id=\"templatemo_contact\"></div>
\t<div class=\"middle-content\">
\t\t<div style=\"margin-bottom: 60px;\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1>Mes Participations Activities</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>NbPlaces</th>
\t\t\t\t\t\t\t<th>Date de participation</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>NumContact</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Date activity</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participation_activities"]) || array_key_exists("participation_activities", $context) ? $context["participation_activities"] : (function () { throw new RuntimeError('Variable "participation_activities" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation_activity"]) {
            // line 84
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "nbPlaces", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 86
            ((twig_get_attribute($this->env, $this->source, $context["participation_activity"], "date", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "date", [], "any", false, false, false, 86), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 88), "adresse", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 89), "numContact", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 91), "image", [], "any", false, false, false, 91))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 93
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 93), "date", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 93), "date", [], "any", false, false, false, 93), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 94), "type", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_activity"], "activity", [], "any", false, false, false, 95), "price", [], "any", false, false, false, 95) * twig_get_attribute($this->env, $this->source, $context["participation_activity"], "nbPlaces", [], "any", false, false, false, 95)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_activity_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participation_activity"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_activity_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["participation_activity"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation_activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Back to activities</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "participation_activity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 109,  287 => 106,  278 => 102,  269 => 98,  265 => 97,  260 => 95,  256 => 94,  252 => 93,  247 => 91,  242 => 89,  238 => 88,  234 => 87,  230 => 86,  226 => 85,  223 => 84,  218 => 83,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tMes Réservations Hotels - Tounesna
{% endblock %}

{% block navs %}
\t<li>
\t\t<a href=\"{{ path('home') }}\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('hotels') }}\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('plats') }}\">Plats</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('activities') }}\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('events') }}\">events</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('shop') }}\">shop</a>
\t</li>
\t{# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
\t{# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
\t<li>
\t\t<a href=\"{{ path('home') }}\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('hotels') }}\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('plats') }}\">Plats</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('activities') }}\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('events') }}\">events</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('shop') }}\">shop</a>
\t</li>
\t{# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
\t{# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

\t<div class=\"page-top\" id=\"templatemo_contact\"></div>
\t<div class=\"middle-content\">
\t\t<div style=\"margin-bottom: 60px;\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1>Mes Participations Activities</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>NbPlaces</th>
\t\t\t\t\t\t\t<th>Date de participation</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>NumContact</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Date activity</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for participation_activity in participation_activities %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ participation_activity.nbPlaces }}</td>
\t\t\t\t\t\t\t\t<td>{{ participation_activity.date ? participation_activity.date|date('d-m-Y') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{ participation_activity.activity.description }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_activity.activity.adresse }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_activity.activity.numContact }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ participation_activity.activity.image) }}\" alt=\"\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{  participation_activity.activity.date ? participation_activity.activity.date|date('d-m-Y') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_activity.activity.type }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_activity.activity.price * participation_activity.nbPlaces }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_participation_activity_show', {'id': participation_activity.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_participation_activity_edit', {'id': participation_activity.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a href=\"{{ path('activities') }}\">Back to activities</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>{% endblock %}
", "participation_activity/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\participation_activity\\index.html.twig");
    }
}
