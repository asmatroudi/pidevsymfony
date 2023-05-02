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

/* gouvernoratAdmin/show.html.twig */
class __TwigTemplate_2700cb036c80f2ebe1ea3c815a4ccd84 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gouvernoratAdmin/show.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "gouvernoratAdmin/show.html.twig", 1);
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
        echo "\tEdit Gouvernorat
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
        echo "    <h1>Gouvernorat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom Gouvernorat</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 14, $this->source); })()), "nomGouver", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 18, $this->source); })()), "region", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gouvernorat_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gouvernorat_edit", ["idGouver" => twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 25, $this->source); })()), "idGouver", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 27
        echo twig_include($this->env, $context, "gouvernoratAdmin/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gouvernoratAdmin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  103 => 25,  98 => 23,  90 => 18,  83 => 14,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-back.html.twig\" %}

{% block title %}
\tEdit Gouvernorat
{% endblock %}

{% block pagewrapper %}
    <h1>Gouvernorat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom Gouvernorat</th>
                <td>{{ gouvernorat.nomGouver }}</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>{{ gouvernorat.region }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('admin_gouvernorat_index') }}\">back to list</a>

    <a href=\"{{ path('admin_gouvernorat_edit', {'idGouver': gouvernorat.idGouver}) }}\">edit</a>

    {{ include('gouvernoratAdmin/_delete_form.html.twig') }}
{% endblock %}
", "gouvernoratAdmin/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\gouvernoratAdmin\\show.html.twig");
    }
}
