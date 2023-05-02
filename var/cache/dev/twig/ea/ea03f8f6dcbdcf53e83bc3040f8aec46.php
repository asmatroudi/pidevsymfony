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

/* front/contact.html.twig */
class __TwigTemplate_b34417eb216be8a25c9f500a3d870c16 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/contact.html.twig", 1);
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
        echo "Contact - Tounesna
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
        echo "
        <div class=\"page-top\" id=\"templatemo_contact\">
        </div> <!-- /.page-header -->

        <div class=\"contact-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-6 map-wrapper\">
                        <h3 class=\"widget-title\">Our Location</h3>
                        <div class=\"map-holder\"></div>
                        <div class=\"contact-infos\">
                            <ul>
                                <li>987 Nay Yar Street, Analog Estate</li>
                                <li>Yangon 10440, Myanmar</li>
                                <li>Tel: 090-090-0880</li>
                                <li>Email: <a href=\"mailto:info@company.com\">info@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-6\">
                        <h3 class=\"widget-title\">Contact Us</h3>
                        <div class=\"contact-form\">
                            <form name=\"contactform\" id=\"contactform\" action=\"#\" method=\"post\">
                                <p>
                                    <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name\">
                                </p>
                                <p>
                                    <input name=\"email\" type=\"text\" id=\"email\" placeholder=\"Your Email\"> 
                                </p>
                                <p>
                                    <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\"> 
                                </p>
                                <p>
                                    <textarea name=\"message\" id=\"message\" placeholder=\"Message\"></textarea>    
                                </p>
                                <input type=\"submit\" class=\"mainBtn\" id=\"submit\" value=\"Send Message\">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 32,  156 => 31,  149 => 28,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  120 => 20,  113 => 19,  106 => 16,  102 => 14,  98 => 13,  94 => 12,  90 => 11,  86 => 10,  82 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
Contact - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li class=\"active\"><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li class=\"active\"><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_contact\">
        </div> <!-- /.page-header -->

        <div class=\"contact-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-6 map-wrapper\">
                        <h3 class=\"widget-title\">Our Location</h3>
                        <div class=\"map-holder\"></div>
                        <div class=\"contact-infos\">
                            <ul>
                                <li>987 Nay Yar Street, Analog Estate</li>
                                <li>Yangon 10440, Myanmar</li>
                                <li>Tel: 090-090-0880</li>
                                <li>Email: <a href=\"mailto:info@company.com\">info@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-6\">
                        <h3 class=\"widget-title\">Contact Us</h3>
                        <div class=\"contact-form\">
                            <form name=\"contactform\" id=\"contactform\" action=\"#\" method=\"post\">
                                <p>
                                    <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name\">
                                </p>
                                <p>
                                    <input name=\"email\" type=\"text\" id=\"email\" placeholder=\"Your Email\"> 
                                </p>
                                <p>
                                    <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\"> 
                                </p>
                                <p>
                                    <textarea name=\"message\" id=\"message\" placeholder=\"Message\"></textarea>    
                                </p>
                                <input type=\"submit\" class=\"mainBtn\" id=\"submit\" value=\"Send Message\">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>

{% endblock %}", "front/contact.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\front\\contact.html.twig");
    }
}
