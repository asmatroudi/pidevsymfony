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

/* gouvernorat/index.html.twig */
class __TwigTemplate_2dbaf1b4bf15793ec75b5cddb7905cef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gouvernorat/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "gouvernorat/index.html.twig", 1);
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
        echo "Gouvernorats - Tounesna
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
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">Plats</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a></li>
    ";
        // line 16
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_mininavs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mininavs"));

        // line 20
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a></li>
    <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a></li>
    <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">Plats</a></li>
    <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a></li>
    <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a></li>
    <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a></li>
    ";
        // line 28
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
        <div class=\"page-top\" id=\"templatemo_about\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
            
                <div class=\"row\"><!-- first row -->
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gouvernorats"]) || array_key_exists("gouvernorats", $context) ? $context["gouvernorats"] : (function () { throw new RuntimeError('Variable "gouvernorats" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gouvernorat"]) {
            // line 41
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gouvernorat_show", ["idGouver" => twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "idGouver", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
                \t<div class=\"col-md-3\"><!-- first column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "nomGouver", [], "any", false, false, false, 44), "html", null, true);
            echo "</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"../images/about_1.jpg\" alt=\"image\" title=\"image\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gouvernorat"], "region", [], "any", false, false, false, 48), "html", null, true);
            echo "</h4>
                            ";
            // line 50
            echo "                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    ";
            // line 53
            echo "                </a>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                
                \t<div class=\"col-md-3\"><!-- first column -->
                    no records found
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gouvernorat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
    </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gouvernorat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 60,  206 => 55,  200 => 53,  196 => 50,  192 => 48,  185 => 44,  178 => 41,  173 => 40,  163 => 32,  156 => 31,  149 => 28,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  120 => 20,  113 => 19,  106 => 16,  102 => 14,  98 => 13,  94 => 12,  90 => 11,  86 => 10,  82 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
Gouvernorats - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li class=\"active\"><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li class=\"active\"><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_about\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
            
                <div class=\"row\"><!-- first row -->
        {% for gouvernorat in gouvernorats %}
                <a href=\"{{ path('app_gouvernorat_show', {'idGouver': gouvernorat.idGouver}) }}\">
                \t<div class=\"col-md-3\"><!-- first column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">{{ gouvernorat.nomGouver }}</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"../images/about_1.jpg\" alt=\"image\" title=\"image\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">{{ gouvernorat.region }}</h4>
                            {# <p>{{ gouvernorat.description }}</p> #}
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    {# <a href=\"{{ path('app_gouvernorat_show', {'idGouver': gouvernorat.idGouver}) }}\">show</a> #}
                </a>
        {% else %}
                
                \t<div class=\"col-md-3\"><!-- first column -->
                    no records found
            </div>
        {% endfor %}
        </div>
    </div>
    </div>

{% endblock %}
", "gouvernorat/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\gouvernorat\\index.html.twig");
    }
}
