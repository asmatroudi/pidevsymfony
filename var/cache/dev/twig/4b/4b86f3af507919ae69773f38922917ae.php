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

/* rate_hotel/show.html.twig */
class __TwigTemplate_b9a4fc3d2ebacb7157e3538313f3c7a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate_hotel/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>RateHotel</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>RateHotel</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdRate</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rate_hotel"]) || array_key_exists("rate_hotel", $context) ? $context["rate_hotel"] : (function () { throw new RuntimeError('Variable "rate_hotel" does not exist.', 12, $this->source); })()), "idRate", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rate_hotel"]) || array_key_exists("rate_hotel", $context) ? $context["rate_hotel"] : (function () { throw new RuntimeError('Variable "rate_hotel" does not exist.', 16, $this->source); })()), "idUser", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rate</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rate_hotel"]) || array_key_exists("rate_hotel", $context) ? $context["rate_hotel"] : (function () { throw new RuntimeError('Variable "rate_hotel" does not exist.', 20, $this->source); })()), "rate", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate_hotel_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate_hotel_edit", ["idRate" => twig_get_attribute($this->env, $this->source, (isset($context["rate_hotel"]) || array_key_exists("rate_hotel", $context) ? $context["rate_hotel"] : (function () { throw new RuntimeError('Variable "rate_hotel" does not exist.', 27, $this->source); })()), "idRate", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "rate_hotel/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "rate_hotel/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  95 => 27,  90 => 25,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>RateHotel</title>

{% block body %}
    <h1>RateHotel</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdRate</th>
                <td>{{ rate_hotel.idRate }}</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>{{ rate_hotel.idUser }}</td>
            </tr>
            <tr>
                <th>Rate</th>
                <td>{{ rate_hotel.rate }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_rate_hotel_index') }}\">back to list</a>

    <a href=\"{{ path('app_rate_hotel_edit', {'idRate': rate_hotel.idRate}) }}\">edit</a>

    {{ include('rate_hotel/_delete_form.html.twig') }}
{% endblock %}
", "rate_hotel/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\rate_hotel\\show.html.twig");
    }
}
