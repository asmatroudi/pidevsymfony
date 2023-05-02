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

/* participation_event/show.html.twig */
class __TwigTemplate_e7ece8882c0bcc19e240cd241f394129 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_event/show.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "participation_event/show.html.twig", 1);
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
        echo "\tParticipationEvent - Tounesna
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
\t\t\t\t<h1>ParticipationEvent</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>NbPlaces</th>
\t\t\t\t\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 71, $this->source); })()), "nbPlaces", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<td>";
        // line 75
        ((twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 75, $this->source); })()), "date", [], "any", false, false, false, 75)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 75, $this->source); })()), "date", [], "any", false, false, false, 75), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 79, $this->source); })()), "event", [], "any", false, false, false, 79), "titre", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 83, $this->source); })()), "event", [], "any", false, false, false, 83), "description", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Region</th>
\t\t\t\t\t\t\t<td>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 87, $this->source); })()), "event", [], "any", false, false, false, 87), "region", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 92, $this->source); })()), "event", [], "any", false, false, false, 92), "image", [], "any", false, false, false, 92))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date event</th>
\t\t\t\t\t\t\t<td>";
        // line 97
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 97, $this->source); })()), "event", [], "any", false, false, false, 97), "datev", [], "any", false, false, false, 97)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 97, $this->source); })()), "event", [], "any", false, false, false, 97), "datev", [], "any", false, false, false, 97), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 101, $this->source); })()), "event", [], "any", false, false, false, 101), "auteur", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t\t\t\t<td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 105, $this->source); })()), "event", [], "any", false, false, false, 105), "gouvernorat", [], "any", false, false, false, 105), "nomGouver", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<td>";
        // line 109
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 109, $this->source); })()), "event", [], "any", false, false, false, 109), "price", [], "any", false, false, false, 109) * twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 109, $this->source); })()), "nbPlaces", [], "any", false, false, false, 109)), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_event_index");
        echo "\">back to list</a>

\t\t\t\t<a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_event_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["participation_event"]) || array_key_exists("participation_event", $context) ? $context["participation_event"] : (function () { throw new RuntimeError('Variable "participation_event" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\">edit</a>

\t\t\t\t";
        // line 118
        echo twig_include($this->env, $context, "participation_event/_delete_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "participation_event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 118,  284 => 116,  279 => 114,  271 => 109,  264 => 105,  257 => 101,  250 => 97,  242 => 92,  234 => 87,  227 => 83,  220 => 79,  213 => 75,  206 => 71,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tParticipationEvent - Tounesna
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
\t\t\t\t<h1>ParticipationEvent</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>NbPlaces</th>
\t\t\t\t\t\t\t<td>{{ participation_event.nbPlaces }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<td>{{ participation_event.date ? participation_event.date|date('d-m-Y') : '' }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<td>{{  participation_event.event.titre }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<td>{{ participation_event.event.description }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Region</th>
\t\t\t\t\t\t\t<td>{{  participation_event.event.region }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ participation_event.event.image) }}\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Date event</th>
\t\t\t\t\t\t\t<td>{{  participation_event.event.datev ? participation_event.event.datev|date('d-m-Y') : '' }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<td>{{  participation_event.event.auteur }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t\t\t\t<td>{{  participation_event.event.gouvernorat.nomGouver }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<td>{{  participation_event.event.price * participation_event.nbPlaces }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a href=\"{{ path('app_participation_event_index') }}\">back to list</a>

\t\t\t\t<a href=\"{{ path('app_participation_event_edit', {'id': participation_event.id}) }}\">edit</a>

\t\t\t\t{{ include('participation_event/_delete_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>{% endblock %}
", "participation_event/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\participation_event\\show.html.twig");
    }
}
