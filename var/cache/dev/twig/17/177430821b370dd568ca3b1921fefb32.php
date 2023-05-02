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

/* hotelAdmin/search.html.twig */
class __TwigTemplate_a3aa834acd05e77a4345dd130cc09131 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagewrapper' => [$this, 'block_pagewrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotelAdmin/search.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "hotelAdmin/search.html.twig", 1);
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
        echo "\tHotels
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_pagewrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagewrapper"));

        // line 8
        echo "
\t<h1>Hotels</h1>

\t<form id=\"search-form\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_search");
        echo "\" method=\"get\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t</form>

\t<hr>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nomhotel</th>
\t\t\t\t<th>NbEtoile</th>
\t\t\t\t<th>Site</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 34
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomhotel", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "site", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "gouvernorat", [], "any", false, false, false, 41), "nomGouver", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "price", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_show", ["idh" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_edit", ["idh" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">edit</a>

\t\t\t\t\t\t";
            // line 47
            echo twig_include($this->env, $context, "hotelAdmin/_delete_form.html.twig");
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 51
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_new");
        echo "\">Create new</a>

\t<script>
\t\t\$(function () {
\$('#search-form').submit(function (e) {
e.preventDefault();

\$.ajax({
url: \$(this).attr('action'),
data: \$(this).serialize(),
success: function (data) {
\$('#search-results').html(data);
}
});
});
});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "hotelAdmin/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 58,  191 => 55,  182 => 51,  165 => 47,  160 => 45,  156 => 44,  151 => 42,  147 => 41,  142 => 39,  137 => 37,  133 => 36,  129 => 35,  126 => 34,  108 => 33,  85 => 13,  80 => 11,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-back.html.twig\" %}

{% block title %}
\tHotels
{% endblock %}

{% block pagewrapper %}

\t<h1>Hotels</h1>

\t<form id=\"search-form\" action=\"{{ path('hotel_search') }}\" method=\"get\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ query }}\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t</form>

\t<hr>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nomhotel</th>
\t\t\t\t<th>NbEtoile</th>
\t\t\t\t<th>Site</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for hotel in hotels %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ hotel.nomhotel }}</td>
\t\t\t\t\t<td>{{ hotel.nbEtoile }}</td>
\t\t\t\t\t<td>{{ hotel.site }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ hotel.image) }}\" alt=\"\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ hotel.gouvernorat.nomGouver }}</td>
\t\t\t\t\t<td>{{ hotel.price }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_hotel_show', {'idh': hotel.idh}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_hotel_edit', {'idh': hotel.idh}) }}\">edit</a>

\t\t\t\t\t\t{{ include('hotelAdmin/_delete_form.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('admin_hotel_new') }}\">Create new</a>

\t<script>
\t\t\$(function () {
\$('#search-form').submit(function (e) {
e.preventDefault();

\$.ajax({
url: \$(this).attr('action'),
data: \$(this).serialize(),
success: function (data) {
\$('#search-results').html(data);
}
});
});
});
\t</script>
{% endblock %}
", "hotelAdmin/search.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\hotelAdmin\\search.html.twig");
    }
}
