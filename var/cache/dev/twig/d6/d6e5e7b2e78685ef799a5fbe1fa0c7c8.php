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

/* front/events.html.twig */
class __TwigTemplate_3c33d2c5d824fcaa37bb2691c0da9f94 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/events.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/events.html.twig", 1);
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
        echo "events - Tounesna
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
    <li class=\"active\"><a href=\"";
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
    <li class=\"active\"><a href=\"";
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
        <div class=\"page-top\" id=\"templatemo_events\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
            
                <div class=\"row\"><!-- first row -->
                
                \t<div class=\"col-md-4\"><!-- first column -->
                    
                        <div class=\"widget-item\">
                        
                            <h3 class=\"widget-title\">Upcoming events</h3>
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-rocket\"></i>
                                </div> <!-- /.service-icon -->
                              <div class=\"service-content\">
                                <h4>Tour Promotion</h4>
                                  <p>Change icons by <a rel=\"nofollow\" href=\"http://fontawesome.info/font-awesome-icon-world-map/\">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt;</strong></p>
                                </div> 
                                <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-trophy\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Europe Tour</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-heart\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Tour to Asia</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-globe\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>New Adventure</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                        </div> <!-- /.widget-item -->
                        
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- second column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Tour Event</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_1.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero</h4>
                            <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at. Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero. <br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- third column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Special Eve</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_2.jpg\" alt=\"Special Eve\" title=\"Special Eve\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p> Aenean in lacus ut ligula fermentum congue. Etiam et urna sodales, pellentesque leo non, volutpat lorem. Pellentesque aliquam turpis venenatis libero fermentum, in blandit nisl aliquam.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    
                    
                </div> <!-- /.row first -->
                
                <div class=\"row\"><!-- second row -->
                
                \t<div class=\"col-md-4\"><!-- first column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Attractions</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- second column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Promotions</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_4.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero, tincidunt accumsan magns. <br><br>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- third column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Best Hotels</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_5.jpg\" alt=\"Special Eve\" title=\"Special Eve\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id laoreet nibh. Quisque at feugiat magna. Nulla tincidunt nisi vitae ante consectetur commodo.<br><br>Fusce pharetra viverra commodo. Maecenas at iaculis quam. Praesent quis dui vitae erat sollicitudin aliquet.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    
                    
                </div> <!-- /.row second -->
                
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/events.html.twig";
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
events - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li class=\"active\"><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li class=\"active\"><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_events\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
            
                <div class=\"row\"><!-- first row -->
                
                \t<div class=\"col-md-4\"><!-- first column -->
                    
                        <div class=\"widget-item\">
                        
                            <h3 class=\"widget-title\">Upcoming events</h3>
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-rocket\"></i>
                                </div> <!-- /.service-icon -->
                              <div class=\"service-content\">
                                <h4>Tour Promotion</h4>
                                  <p>Change icons by <a rel=\"nofollow\" href=\"http://fontawesome.info/font-awesome-icon-world-map/\">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt;</strong></p>
                                </div> 
                                <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-trophy\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Europe Tour</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-heart\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Tour to Asia</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-globe\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>New Adventure</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            
                        </div> <!-- /.widget-item -->
                        
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- second column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Tour Event</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_1.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero</h4>
                            <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at. Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero. <br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- third column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Special Eve</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_2.jpg\" alt=\"Special Eve\" title=\"Special Eve\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p> Aenean in lacus ut ligula fermentum congue. Etiam et urna sodales, pellentesque leo non, volutpat lorem. Pellentesque aliquam turpis venenatis libero fermentum, in blandit nisl aliquam.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    
                    
                </div> <!-- /.row first -->
                
                <div class=\"row\"><!-- second row -->
                
                \t<div class=\"col-md-4\"><!-- first column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Attractions</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- second column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Promotions</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_4.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero, tincidunt accumsan magns. <br><br>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class=\"col-md-4\"><!-- third column -->
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Best Hotels</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_5.jpg\" alt=\"Special Eve\" title=\"Special Eve\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id laoreet nibh. Quisque at feugiat magna. Nulla tincidunt nisi vitae ante consectetur commodo.<br><br>Fusce pharetra viverra commodo. Maecenas at iaculis quam. Praesent quis dui vitae erat sollicitudin aliquet.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    
                    
                </div> <!-- /.row second -->
                
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->

{% endblock %}", "front/events.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\front\\events.html.twig");
    }
}
