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

/* gouvernoratAdmin/search.html.twig */
class __TwigTemplate_01b4674186242f1fee41e1af4c1e7d0e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gouvernoratAdmin/search.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "gouvernoratAdmin/search.html.twig", 1);
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
        echo "\tGouvernorats
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
        echo "    <h1>Gouvernorats</h1>

    <form id=\"search-form\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorat_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>

    <hr>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom Gouvernorat</th>
                <th>Region</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gouvernorats"]) || array_key_exists("gouvernorats", $context) ? $context["gouvernorats"] : (function () { throw new RuntimeError('Variable "gouvernorats" does not exist.', 29, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["gouvernorat"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "nomGouver", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "region", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>
                    <img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "image", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" alt=\"\">
                </td>
                <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gouvernorat_show", ["idGouver" => twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "idGouver", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gouvernorat_edit", ["idGouver" => twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "idGouver", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">edit</a>
    ";
            // line 39
            echo twig_include($this->env, $context, "gouvernoratAdmin/_delete_form.html.twig");
            echo "
                </td>
            </tr>
        ";
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
            // line 43
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gouvernorat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gouvernorat_new");
        echo "\">Create new</a>

    <script>
        \$(function () {
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
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gouvernoratAdmin/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 50,  174 => 47,  165 => 43,  148 => 39,  144 => 38,  140 => 37,  134 => 34,  129 => 32,  125 => 31,  122 => 30,  104 => 29,  84 => 12,  79 => 10,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-back.html.twig\" %}

{% block title %}
\tGouvernorats
{% endblock %}

{% block pagewrapper %}
    <h1>Gouvernorats</h1>

    <form id=\"search-form\" action=\"{{ path('gouvernorat_search') }}\" method=\"get\">
        <div class=\"form-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ query }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>

    <hr>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom Gouvernorat</th>
                <th>Region</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for gouvernorat in gouvernorats %}
            <tr>
                <td>{{ gouvernorat.nomGouver }}</td>
                <td>{{ gouvernorat.region }}</td>
                <td>
                    <img style=\"height: 100px; object-fit: cover;\" class=\"img-fluid\" src=\"{{ asset('/uploads/' ~ gouvernorat.image) }}\" alt=\"\">
                </td>
                <td>
                    <a href=\"{{ path('admin_gouvernorat_show', {'idGouver': gouvernorat.idGouver}) }}\">show</a>
                    <a href=\"{{ path('admin_gouvernorat_edit', {'idGouver': gouvernorat.idGouver}) }}\">edit</a>
    {{ include('gouvernoratAdmin/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('admin_gouvernorat_new') }}\">Create new</a>

    <script>
        \$(function () {
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
    </script>
{% endblock %}
", "gouvernoratAdmin/search.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\gouvernoratAdmin\\search.html.twig");
    }
}
