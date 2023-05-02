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

/* produit/index.html.twig */
class __TwigTemplate_e4ea05a6e60a7a9112309b45f9f9783b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/index.html.twig", 1);
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
        echo "Hotels - Tounesna
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
    <li><a href=\"";
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
    <li class=\"active\"><a href=\"";
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
    <li><a href=\"";
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
    <li class=\"active\"><a href=\"";
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
        <div class=\"page-top\" id=\"templatemo_contact\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
        <div style=\"margin-bottom: 60px;\" class=\"container\">
            <div class=\"row\">
                <div class=\"our-listing owl-carousel\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "                    <div class=\"list-item\">
                        <div class=\"list-thumb\">
                            ";
            // line 46
            echo "                            <img style=\"height: 280px; object-fit: cover;\" src=\"../images/produit_1.jpg\" alt=\"produit\">
                        </div> <!-- /.list-thumb -->
                        <div class=\"list-content\">
                        <div style=\"display: flex;\">
                            <h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomp", [], "any", false, false, false, 50), "html", null, true);
            echo "</h5>
                            <h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 51), "html", null, true);
            echo " TND</h5>
                        </div>
                        <div style=\"display: flex;\">
                            <span style=\"margin-left: 0; margin-right: auto;\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 54), "html", null, true);
            echo "</span>
                            <span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "gouvernorat", [], "any", false, false, false, 55), "nomGouver", [], "any", false, false, false, 55), "html", null, true);
            echo "</span>
                        </div>
                        <div style=\"display: flex; margin-top: -20px;\">
                            ";
            // line 59
            echo "                            <a style=\"margin-right: 0; margin-left: auto;\" href=\"#\" class=\"price-btn\"><i class=\"fa fa-shopping-cart\"></i></a>
                        </div>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "                    <div class=\"list-item\">
                    no records found
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 68,  217 => 64,  208 => 59,  202 => 55,  198 => 54,  192 => 51,  188 => 50,  182 => 46,  178 => 41,  173 => 40,  163 => 32,  156 => 31,  149 => 28,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  120 => 20,  113 => 19,  106 => 16,  102 => 14,  98 => 13,  94 => 12,  90 => 11,  86 => 10,  82 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
Hotels - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li class=\"active\"><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li class=\"active\"><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_contact\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
        <div style=\"margin-bottom: 60px;\" class=\"container\">
            <div class=\"row\">
                <div class=\"our-listing owl-carousel\">
        {% for produit in produits %}
                    <div class=\"list-item\">
                        <div class=\"list-thumb\">
                            {# <div class=\"title\">
                                <h4>{{ produit.gouvernorat.nomGouver }}</h4>
                            </div> #}
                            <img style=\"height: 280px; object-fit: cover;\" src=\"../images/produit_1.jpg\" alt=\"produit\">
                        </div> <!-- /.list-thumb -->
                        <div class=\"list-content\">
                        <div style=\"display: flex;\">
                            <h5 style=\"margin-left: 0; margin-right: auto;\">{{ produit.nomp }}</h5>
                            <h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ produit.price }} TND</h5>
                        </div>
                        <div style=\"display: flex;\">
                            <span style=\"margin-left: 0; margin-right: auto;\">{{ produit.type }}</span>
                            <span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ produit.gouvernorat.nomGouver }}</span>
                        </div>
                        <div style=\"display: flex; margin-top: -20px;\">
                            {# <a style=\"margin-left: 0; margin-right: auto;\" href=\"#\" class=\"price-btn\">Book Now</a> #}
                            <a style=\"margin-right: 0; margin-left: auto;\" href=\"#\" class=\"price-btn\"><i class=\"fa fa-shopping-cart\"></i></a>
                        </div>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
        {% else %}
                    <div class=\"list-item\">
                    no records found
            </div>
        {% endfor %}
                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\produit\\index.html.twig");
    }
}
