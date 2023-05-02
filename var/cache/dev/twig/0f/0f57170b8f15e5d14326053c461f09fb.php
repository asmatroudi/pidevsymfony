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

/* rate_hotel/index.html.twig */
class __TwigTemplate_43c7fa2630df9a7eb15938d9c4742fdd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate_hotel/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>RateHotel index</title>

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
        echo "    <h1>RateHotel index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdRate</th>
                <th>IdUser</th>
                <th>Rate</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rate_hotels"]) || array_key_exists("rate_hotels", $context) ? $context["rate_hotels"] : (function () { throw new RuntimeError('Variable "rate_hotels" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rate_hotel"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate_hotel"], "idRate", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate_hotel"], "idUser", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate_hotel"], "rate", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate_hotel_show", ["idRate" => twig_get_attribute($this->env, $this->source, $context["rate_hotel"], "idRate", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate_hotel_edit", ["idRate" => twig_get_attribute($this->env, $this->source, $context["rate_hotel"], "idRate", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate_hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate_hotel_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "rate_hotel/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  117 => 33,  108 => 29,  99 => 25,  95 => 24,  90 => 22,  86 => 21,  82 => 20,  79 => 19,  74 => 18,  60 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>RateHotel index</title>

{% block body %}
    <h1>RateHotel index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdRate</th>
                <th>IdUser</th>
                <th>Rate</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rate_hotel in rate_hotels %}
            <tr>
                <td>{{ rate_hotel.idRate }}</td>
                <td>{{ rate_hotel.idUser }}</td>
                <td>{{ rate_hotel.rate }}</td>
                <td>
                    <a href=\"{{ path('app_rate_hotel_show', {'idRate': rate_hotel.idRate}) }}\">show</a>
                    <a href=\"{{ path('app_rate_hotel_edit', {'idRate': rate_hotel.idRate}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_rate_hotel_new') }}\">Create new</a>
{% endblock %}
", "rate_hotel/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\rate_hotel\\index.html.twig");
    }
}
