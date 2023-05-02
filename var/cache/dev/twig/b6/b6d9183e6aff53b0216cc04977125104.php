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

/* front/aboutus.html.twig */
class __TwigTemplate_eebfbd08cb65eeab8b889e518676c732 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aboutus.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/aboutus.html.twig", 1);
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
        echo "About Us - Tounesna
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
        <div class=\"page-top\" id=\"templatemo_about\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
            
                <div class=\"row\"><!-- first row -->
                
                \t<div class=\"col-md-6\"><!-- first column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Our Company</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/about_1.jpg\" alt=\"about us\" title=\"about us\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Vestibulum sodales tempus lacus</h4>
                            <p>Duis mattis neque vel rutrum finibus. Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur. Curabitur eu aliquam erat. Etiam sollicitudin est eu turpis dapibus aliquet. Ut vitae lacus vel nulla iaculis interdum.<br><br>
\t\t\t\t\t\t\tSuspendisse convallis congue tellus, nec ultricies sem molestie ac. Nunc lobortis elit orci, vitae suscipit urna dictum id. Nullam at elementum magna. Vivamus sit amet ipsum tortor. Nullam molestie eros quis risus pellentesque, eget pellentesque mauris placerat.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class=\"col-md-6\"><!-- second column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Our Team</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/about_2.jpg\" alt=\"company\" title=\"company\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Cum sociis natoque penatibus et magnis</h4>
                            <p>Curabitur eu aliquam erat. Etiam sollicitudin est eu turpis dapibus aliquet. Ut vitae lacus vel nulla iaculis interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
\t\t\t\t\t\t\tIn hac habitasse platea dictumst. Nulla mollis nisl id ipsum faucibus lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sit amet ultricies mauris. Nulla fermentum nisl felis, id blandit nunc vehicula vel.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    
                    
                </div> <!-- /.row first -->
                
                
                
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/aboutus.html.twig";
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
About Us - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li class=\"active\"><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li class=\"active\"><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_about\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
            
                <div class=\"row\"><!-- first row -->
                
                \t<div class=\"col-md-6\"><!-- first column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Our Company</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/about_1.jpg\" alt=\"about us\" title=\"about us\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Vestibulum sodales tempus lacus</h4>
                            <p>Duis mattis neque vel rutrum finibus. Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur. Curabitur eu aliquam erat. Etiam sollicitudin est eu turpis dapibus aliquet. Ut vitae lacus vel nulla iaculis interdum.<br><br>
\t\t\t\t\t\t\tSuspendisse convallis congue tellus, nec ultricies sem molestie ac. Nunc lobortis elit orci, vitae suscipit urna dictum id. Nullam at elementum magna. Vivamus sit amet ipsum tortor. Nullam molestie eros quis risus pellentesque, eget pellentesque mauris placerat.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class=\"col-md-6\"><!-- second column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Our Team</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/about_2.jpg\" alt=\"company\" title=\"company\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Cum sociis natoque penatibus et magnis</h4>
                            <p>Curabitur eu aliquam erat. Etiam sollicitudin est eu turpis dapibus aliquet. Ut vitae lacus vel nulla iaculis interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
\t\t\t\t\t\t\tIn hac habitasse platea dictumst. Nulla mollis nisl id ipsum faucibus lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sit amet ultricies mauris. Nulla fermentum nisl felis, id blandit nunc vehicula vel.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    
                    
                </div> <!-- /.row first -->
                
                
                
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->

{% endblock %}", "front/aboutus.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\front\\aboutus.html.twig");
    }
}
