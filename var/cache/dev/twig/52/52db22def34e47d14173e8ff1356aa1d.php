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

/* front/home.html.twig */
class __TwigTemplate_eb13e87f8bb15d05d454eee587fd3aed extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/home.html.twig", 1);
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
        echo "Home - Tounesna
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
        echo "    <li class=\"active\"><a href=\"";
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
        echo "    <li class=\"active\"><a href=\"";
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
        echo "        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"images/templatemo_slide_1.jpg\" alt=\"Special 1\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"flex-caption visible-lg\">
                                    <span class=\"price\">\$7,500</span>
                                    <h3 class=\"title\">Venice, Italy</h3>
                                    <p>Travel is a responsive Bootstrap layout from 
                                    <span class=\"blue\">template</span><span class=\"green\">mo</span> website.
\t\t\t\t\t\t\t\t\t\tAll images used in this template are from 
                            \t\t\t<a rel=\"nofollow\" href=\"http://unsplash.com\" target=\"_parent\">Unsplash</a>.</p>
                                    <a href=\"#\" class=\"slider-btn\">Pre-booking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"images/templatemo_slide_2.jpg\" alt=\"Special 2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"flex-caption visible-lg\">
                                    <span class=\"price\">\$12,400</span>
                                    <h3 class=\"title\">Bercelona, Spain</h3>
                                    <p>You may visit <a href=\"http://tourkrub.co\" target=\"_parent\">Tour Krub</a> for Thai Tour Packages. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href=\"#\" class=\"slider-btn\">Reserve Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"images/templatemo_slide_3.jpg\" alt=\"Special 3\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"flex-caption visible-lg\">
                                    <span class=\"price\">\$20,800</span>
                                    <h3 class=\"title\">Basel, Switzerland</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href=\"#\" class=\"slider-btn\">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- /.flexslider -->

        
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"our-listing owl-carousel\">
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 94
            echo "                    <div class=\"list-item\">
                        <div class=\"list-thumb\">
                            <div class=\"title\">
                                <h4>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "gouvernorat", [], "any", false, false, false, 97), "nomGouver", [], "any", false, false, false, 97), "html", null, true);
            echo "</h4>
                            </div>
                            <img src=\"../images/destination_1.jpg\" alt=\"destination 1\">
                        </div> <!-- /.list-thumb -->
                        <div class=\"list-content\">
                        <div style=\"display: flex;\">
                            <h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "site", [], "any", false, false, false, 103), "html", null, true);
            echo "</h5>
                            <h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 104), "html", null, true);
            echo "</h5>
                        </div>
                        <div style=\"display: flex;\">
                            <span style=\"margin-left: 0; margin-right: auto;\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomhotel", [], "any", false, false, false, 107), "html", null, true);
            echo "</span>
                            <span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "price", [], "any", false, false, false, 108), "html", null, true);
            echo " TND</span>
                        </div>
                            <a href=\"#\" class=\"price-btn\">Réserver</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            echo "                    <div class=\"list-item\">
                    no records found
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

\t\t<div class=\"middle-content\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 118,  270 => 114,  259 => 108,  255 => 107,  249 => 104,  245 => 103,  236 => 97,  231 => 94,  226 => 93,  163 => 32,  156 => 31,  149 => 28,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  120 => 20,  113 => 19,  106 => 16,  102 => 14,  98 => 13,  94 => 12,  90 => 11,  86 => 10,  82 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
Home - Tounesna
{% endblock %}

{% block navs %}
    <li class=\"active\"><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li class=\"active\"><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}
        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"images/templatemo_slide_1.jpg\" alt=\"Special 1\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"flex-caption visible-lg\">
                                    <span class=\"price\">\$7,500</span>
                                    <h3 class=\"title\">Venice, Italy</h3>
                                    <p>Travel is a responsive Bootstrap layout from 
                                    <span class=\"blue\">template</span><span class=\"green\">mo</span> website.
\t\t\t\t\t\t\t\t\t\tAll images used in this template are from 
                            \t\t\t<a rel=\"nofollow\" href=\"http://unsplash.com\" target=\"_parent\">Unsplash</a>.</p>
                                    <a href=\"#\" class=\"slider-btn\">Pre-booking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"images/templatemo_slide_2.jpg\" alt=\"Special 2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"flex-caption visible-lg\">
                                    <span class=\"price\">\$12,400</span>
                                    <h3 class=\"title\">Bercelona, Spain</h3>
                                    <p>You may visit <a href=\"http://tourkrub.co\" target=\"_parent\">Tour Krub</a> for Thai Tour Packages. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href=\"#\" class=\"slider-btn\">Reserve Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"images/templatemo_slide_3.jpg\" alt=\"Special 3\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"flex-caption visible-lg\">
                                    <span class=\"price\">\$20,800</span>
                                    <h3 class=\"title\">Basel, Switzerland</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href=\"#\" class=\"slider-btn\">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- /.flexslider -->

        
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"our-listing owl-carousel\">
        {% for hotel in hotels %}
                    <div class=\"list-item\">
                        <div class=\"list-thumb\">
                            <div class=\"title\">
                                <h4>{{ hotel.gouvernorat.nomGouver }}</h4>
                            </div>
                            <img src=\"../images/destination_1.jpg\" alt=\"destination 1\">
                        </div> <!-- /.list-thumb -->
                        <div class=\"list-content\">
                        <div style=\"display: flex;\">
                            <h5 style=\"margin-left: 0; margin-right: auto;\">{{ hotel.site }}</h5>
                            <h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ hotel.nbEtoile }}</h5>
                        </div>
                        <div style=\"display: flex;\">
                            <span style=\"margin-left: 0; margin-right: auto;\">{{ hotel.nomhotel }}</span>
                            <span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ hotel.price }} TND</span>
                        </div>
                            <a href=\"#\" class=\"price-btn\">Réserver</a>
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

\t\t<div class=\"middle-content\"></div>
{% endblock %}", "front/home.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\front\\home.html.twig");
    }
}
