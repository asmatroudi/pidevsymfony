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

/* evenementAdmin/search.html.twig */
class __TwigTemplate_91cf324fb8c401b3ca5e69ba27589404 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenementAdmin/search.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "evenementAdmin/search.html.twig", 1);
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
        echo "\tEvenements
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
        echo "\t<h1>Evenements</h1>

\t<form id=\"search-form\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_search");
        echo "\" method=\"get\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t</form>

\t<hr>

    <a class=\"btn btn-primary\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sort_by_asc_date");
        echo "\">Date Asc</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sort_by_desc_date");
        echo "\">Date Desc</a>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Region</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Datev</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t<th>Auteur</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 37, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 38
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "region", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 41), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "gouvernorat", [], "any", false, false, false, 46), "nomGouver", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "auteur", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_show", ["idev" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idev", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["idev" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idev", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">edit</a>

\t\t\t\t\t\t";
            // line 53
            echo twig_include($this->env, $context, "evenementAdmin/_delete_form.html.twig");
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
            // line 57
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_new");
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
        return "evenementAdmin/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 64,  209 => 61,  200 => 57,  183 => 53,  178 => 51,  174 => 50,  169 => 48,  165 => 47,  161 => 46,  156 => 44,  151 => 42,  147 => 41,  143 => 40,  139 => 39,  136 => 38,  118 => 37,  98 => 20,  94 => 19,  84 => 12,  79 => 10,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-back.html.twig\" %}

{% block title %}
\tEvenements
{% endblock %}

{% block pagewrapper %}
\t<h1>Evenements</h1>

\t<form id=\"search-form\" action=\"{{ path('evenement_search') }}\" method=\"get\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ query }}\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t</form>

\t<hr>

    <a class=\"btn btn-primary\" href=\"{{path('sort_by_asc_date')}}\">Date Asc</a>
    <a class=\"btn btn-primary\" href=\"{{path('sort_by_desc_date')}}\">Date Desc</a>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Region</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Datev</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Gouvernorat</th>
\t\t\t\t<th>Auteur</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for evenement in evenements %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ evenement.region }}</td>
\t\t\t\t\t<td>{{ evenement.description }}</td>
\t\t\t\t\t<td>{{ evenement.datev ? evenement.datev|date('d-m-Y') : '' }}</td>
\t\t\t\t\t<td>{{ evenement.titre }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ evenement.image) }}\" alt=\"\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ evenement.gouvernorat.nomGouver }}</td>
\t\t\t\t\t<td>{{ evenement.auteur }}</td>
\t\t\t\t\t<td>{{ evenement.price }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_evenement_show', {'idev': evenement.idev}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_evenement_edit', {'idev': evenement.idev}) }}\">edit</a>

\t\t\t\t\t\t{{ include('evenementAdmin/_delete_form.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('admin_evenement_new') }}\">Create new</a>

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
", "evenementAdmin/search.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\evenementAdmin\\search.html.twig");
    }
}
