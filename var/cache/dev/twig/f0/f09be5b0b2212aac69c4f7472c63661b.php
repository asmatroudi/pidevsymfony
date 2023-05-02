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

/* participation_event/index.html.twig */
class __TwigTemplate_d06570aba5c480a94ab270a7d0fef3a8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_event/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "participation_event/index.html.twig", 1);
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
        echo "\tMes Participations Events - Tounesna
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
\t\t\t\t<h1>Mes Participations Events</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>NbPlaces</th>
\t\t\t\t\t\t\t<th>Date de participation</th>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Region</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Date event</th>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participation_events"]) || array_key_exists("participation_events", $context) ? $context["participation_events"] : (function () { throw new RuntimeError('Variable "participation_events" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation_event"]) {
            // line 85
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation_event"], "nbPlaces", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 87
            ((twig_get_attribute($this->env, $this->source, $context["participation_event"], "date", [], "any", false, false, false, 87)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation_event"], "date", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 88), "titre", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 89), "description", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 90), "region", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 92), "image", [], "any", false, false, false, 92))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 94
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 94), "datev", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 94), "datev", [], "any", false, false, false, 94), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 95), "auteur", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 96), "gouvernorat", [], "any", false, false, false, 96), "nomGouver", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 97
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation_event"], "event", [], "any", false, false, false, 97), "price", [], "any", false, false, false, 97) * twig_get_attribute($this->env, $this->source, $context["participation_event"], "nbPlaces", [], "any", false, false, false, 97)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participation_event"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["participation_event"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation_event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Back to events</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "participation_event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 111,  292 => 108,  283 => 104,  274 => 100,  270 => 99,  265 => 97,  261 => 96,  257 => 95,  253 => 94,  248 => 92,  243 => 90,  239 => 89,  235 => 88,  231 => 87,  227 => 86,  224 => 85,  219 => 84,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tMes Participations Events - Tounesna
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
\t\t\t\t<h1>Mes Participations Events</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>NbPlaces</th>
\t\t\t\t\t\t\t<th>Date de participation</th>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Region</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Date event</th>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for participation_event in participation_events %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ participation_event.nbPlaces }}</td>
\t\t\t\t\t\t\t\t<td>{{ participation_event.date ? participation_event.date|date('d-m-Y') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_event.event.titre }}</td>
\t\t\t\t\t\t\t\t<td>{{ participation_event.event.description }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_event.event.region }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ participation_event.event.image) }}\" alt=\"\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{  participation_event.event.datev ? participation_event.event.datev|date('d-m-Y') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_event.event.auteur }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_event.event.gouvernorat.nomGouver }}</td>
\t\t\t\t\t\t\t\t<td>{{  participation_event.event.price * participation_event.nbPlaces }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_participation_event_show', {'id': participation_event.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_participation_event_edit', {'id': participation_event.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a href=\"{{ path('events') }}\">Back to events</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "participation_event/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\participation_event\\index.html.twig");
    }
}
