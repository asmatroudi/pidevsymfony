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

/* front/services.html.twig */
class __TwigTemplate_8c6446be5fae273d2d8e604e8453c56c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/services.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "front/services.html.twig", 1);
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
        echo "Services - Tounesna
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
    <li class=\"active\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
    ";
        // line 14
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_mininavs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mininavs"));

        // line 18
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a></li>
    <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a></li>
    <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
    <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
    <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a></li>
    ";
        // line 25
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
        <div class=\"page-top\" id=\"templatemo_services\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Latest News</h3>
                            <div class=\"post-small\">
                                <div class=\"post-date\">
                                    <span class=\"time\">18</span>
                                    <span>June</span>
                                </div> <!-- /.post-thumb -->
                                <div class=\"post-content\">
                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
                                    <span>Donec auctor iaculis</span>
                                    <p>Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur.</p>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-small -->
                            <div class=\"post-small\">
                                <div class=\"post-date\">
                                    <span class=\"time\">14</span>
                                    <span>June</span>
                                </div> <!-- /.post-thumb -->
                                <div class=\"post-content\">
                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
                                    <span>Donec auctor iaculis</span>
                                    <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at.</p>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-small -->
                            <div class=\"post-small\">
                                <div class=\"post-date\">
                                    <span class=\"time\">12</span>
                                    <span>June</span>
                                </div> <!-- /.post-thumb -->
                                <div class=\"post-content\">
                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
                                    <span>Donec auctor iaculis</span>
                                    <p>Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis.</p>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-small -->
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4\">
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Consulting</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_1.jpg\" alt=\"\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Integer viverra erat nisi, sed faucibus velit ultricies facilisis. Nam eu felis ac ex fermentum scelerisque nec sed urna. Cras mollis bibendum fringilla.<br><br>Fusce condimentum neque eget diam blandit consequat. Integer at urna at risus ultrices vestibulum. Fusce pharetra viverra commodo.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4\">
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Our Services</h3>
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-bell-o\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Fusce pharetra</h4>
                                    <p>Change icons by <a rel=\"nofollow\" href=\"http://fontawesome.info/font-awesome-icon-world-map/\" target=\"_blank\">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-bell-o&quot;&gt;&lt;/i&gt;</strong></p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-cogs\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Nunc rhoncus</h4>
                                    <p>Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-pencil\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Curabitur quis</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->



        <div class=\"go-act\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"first-map\"></div>
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-8\">
                        <div class=\"act-btn\">
                            <div class=\"inner\">
                                <div class=\"price\">
                                    \$5,600
                                </div> <!-- /.price -->
                                <div class=\"title\">
                                    <h2>Europa Tour</h2>
                                    <span>Belgium, Austria, Poland, France, England</span>
                                </div>
                            </div> <!-- /.inner -->
                            <a href=\"#\" class=\"link\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </div> <!-- /.act-btn -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.go-act -->



        <div class=\"ticket-list\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Airlines</a></h4>
                            <p>Travel HTML Template is provided by <span class=\"blue\">template</span><span class=\"green\">mo</span>. Download, modify and use this layout for your travel or tour websites.<br><br> Aliquam justo lectus, fermentum vitae libero sollicitudin, tincidunt accumsan magna.Vestibulum congue lorem odio, at sodales nisi luctus quis.</p>
                            <a href=\"#\" class=\"ticket-btn\">Buy a ticket</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Best Cities</a></h4>
                            <p>Donec sit amet metus in quam consectetur posuere. Mauris scelerisque tortor sit amet porta lacinia. Suspendisse sit amet nisi volutpat, placerat.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna.</p>
                            <a href=\"#\" class=\"ticket-btn\">Explore Cities</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Travel Guides</a></h4>
                            <p>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.<br><br> Integer viverra erat nisi, sed faucibus velit ultricies facilisis. Nam eu felis ac ex fermentum scelerisque.</p>
                            <a href=\"#\" class=\"ticket-btn\">Details</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Special Events</a></h4>
                            <p>Aliquam ultricies eros commodo, scelerisque lorem sit amet, mollis odio. Ut malesuada sapien sit amet risus lobortis bibendum. Pellentesque eu ante augue.<br><br>Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit.</p>
                            <a href=\"#\" class=\"ticket-btn\">Check a calendar</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.ticket-list -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 29,  144 => 28,  137 => 25,  133 => 23,  129 => 22,  125 => 21,  121 => 20,  117 => 19,  112 => 18,  105 => 17,  98 => 14,  94 => 12,  90 => 11,  86 => 10,  82 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
Services - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li class=\"active\"><a href=\"{{ path('services') }}\">Services</a></li>
    <li><a href=\"{{ path('events') }}\">Events</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li class=\"active\"><a href=\"{{ path('services') }}\">Services</a></li>
    <li><a href=\"{{ path('events') }}\">Events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_services\">
        </div> <!-- /.page-header -->

        <div class=\"middle-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Latest News</h3>
                            <div class=\"post-small\">
                                <div class=\"post-date\">
                                    <span class=\"time\">18</span>
                                    <span>June</span>
                                </div> <!-- /.post-thumb -->
                                <div class=\"post-content\">
                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
                                    <span>Donec auctor iaculis</span>
                                    <p>Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur.</p>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-small -->
                            <div class=\"post-small\">
                                <div class=\"post-date\">
                                    <span class=\"time\">14</span>
                                    <span>June</span>
                                </div> <!-- /.post-thumb -->
                                <div class=\"post-content\">
                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
                                    <span>Donec auctor iaculis</span>
                                    <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at.</p>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-small -->
                            <div class=\"post-small\">
                                <div class=\"post-date\">
                                    <span class=\"time\">12</span>
                                    <span>June</span>
                                </div> <!-- /.post-thumb -->
                                <div class=\"post-content\">
                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
                                    <span>Donec auctor iaculis</span>
                                    <p>Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis.</p>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-small -->
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4\">
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Consulting</h3>
                            <div class=\"sample-thumb\">
                                <img src=\"images/event_1.jpg\" alt=\"\">
                            </div> <!-- /.sample-thumb -->
                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
                            <p>Integer viverra erat nisi, sed faucibus velit ultricies facilisis. Nam eu felis ac ex fermentum scelerisque nec sed urna. Cras mollis bibendum fringilla.<br><br>Fusce condimentum neque eget diam blandit consequat. Integer at urna at risus ultrices vestibulum. Fusce pharetra viverra commodo.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-4\">
                        <div class=\"widget-item\">
                            <h3 class=\"widget-title\">Our Services</h3>
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-bell-o\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Fusce pharetra</h4>
                                    <p>Change icons by <a rel=\"nofollow\" href=\"http://fontawesome.info/font-awesome-icon-world-map/\" target=\"_blank\">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-bell-o&quot;&gt;&lt;/i&gt;</strong></p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-cogs\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Nunc rhoncus</h4>
                                    <p>Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                            <div class=\"service-item\">
                                <div class=\"service-icon\">
                                    <i class=\"fa fa-pencil\"></i>
                                </div> <!-- /.service-icon -->
                                <div class=\"service-content\">
                                    <h4>Curabitur quis</h4>
                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                                </div> <!-- /.service-content -->
                            </div> <!-- /.service-item -->
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->



        <div class=\"go-act\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"first-map\"></div>
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-8\">
                        <div class=\"act-btn\">
                            <div class=\"inner\">
                                <div class=\"price\">
                                    \$5,600
                                </div> <!-- /.price -->
                                <div class=\"title\">
                                    <h2>Europa Tour</h2>
                                    <span>Belgium, Austria, Poland, France, England</span>
                                </div>
                            </div> <!-- /.inner -->
                            <a href=\"#\" class=\"link\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </div> <!-- /.act-btn -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.go-act -->



        <div class=\"ticket-list\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Airlines</a></h4>
                            <p>Travel HTML Template is provided by <span class=\"blue\">template</span><span class=\"green\">mo</span>. Download, modify and use this layout for your travel or tour websites.<br><br> Aliquam justo lectus, fermentum vitae libero sollicitudin, tincidunt accumsan magna.Vestibulum congue lorem odio, at sodales nisi luctus quis.</p>
                            <a href=\"#\" class=\"ticket-btn\">Buy a ticket</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Best Cities</a></h4>
                            <p>Donec sit amet metus in quam consectetur posuere. Mauris scelerisque tortor sit amet porta lacinia. Suspendisse sit amet nisi volutpat, placerat.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna.</p>
                            <a href=\"#\" class=\"ticket-btn\">Explore Cities</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Travel Guides</a></h4>
                            <p>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.<br><br> Integer viverra erat nisi, sed faucibus velit ultricies facilisis. Nam eu felis ac ex fermentum scelerisque.</p>
                            <a href=\"#\" class=\"ticket-btn\">Details</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">Special Events</a></h4>
                            <p>Aliquam ultricies eros commodo, scelerisque lorem sit amet, mollis odio. Ut malesuada sapien sit amet risus lobortis bibendum. Pellentesque eu ante augue.<br><br>Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit.</p>
                            <a href=\"#\" class=\"ticket-btn\">Check a calendar</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.ticket-list -->

{% endblock %}", "front/services.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\front\\services.html.twig");
    }
}
