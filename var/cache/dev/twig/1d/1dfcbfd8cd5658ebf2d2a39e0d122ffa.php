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

/* activities/index.html.twig */
class __TwigTemplate_43e67f3ec029337d07df14075b3bdf57 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "activities/index.html.twig", 1);
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
        echo "Activities - Tounesna
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
    <li class=\"active\"><a href=\"";
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
    <li class=\"active\"><a href=\"";
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
        <div class=\"page-top\" id=\"templatemo_services\">
        </div> <!-- /.page-header -->

        ";
        // line 150
        echo "


        <div style=\"margin-top: 80px;\" class=\"ticket-list\">
            <div class=\"container\">
                <div class=\"row\">
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 156, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 157
            echo "                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 159), "html", null, true);
            echo "</a></h4>
                            <p><span style=\"color: #2f7c72;\" class=\"green\">In: </span>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "adresse", [], "any", false, false, false, 160), "html", null, true);
            echo "</p>
                            <p><span style=\"color: #2f7c72;\" class=\"green\"></span>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 161), "html", null, true);
            echo "</p>
                            <div style=\"margin: 20px 0;\" class=\"sample-thumb\">
                                <img src=\"../images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <p><span style=\"color: #2f7c72;\" class=\"green\">N° Tel: </span>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "numContact", [], "any", false, false, false, 165), "html", null, true);
            echo "</p>
                            <p><span style=\"color: #2f7c72;\" class=\"green\">On: </span>";
            // line 166
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 166), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                            <p><span style=\"color: #2f7c72;\" class=\"green\">Price: </span>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 167), "html", null, true);
            echo " TND</p>
                            <a href=\"#\" class=\"ticket-btn\">Participer</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 172
            echo "                
                    <div class=\"col-md-3 col-sm-6\">
                no records found
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.ticket-list -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "activities/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 177,  219 => 172,  209 => 167,  205 => 166,  201 => 165,  194 => 161,  190 => 160,  186 => 159,  182 => 157,  177 => 156,  169 => 150,  163 => 32,  156 => 31,  149 => 28,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  120 => 20,  113 => 19,  106 => 16,  102 => 14,  98 => 13,  94 => 12,  90 => 11,  86 => 10,  82 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
Activities - Tounesna
{% endblock %}

{% block navs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li class=\"active\"><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
    <li><a href=\"{{ path('home') }}\">Home</a></li>
    <li><a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a></li>
    <li><a href=\"{{ path('hotels') }}\">Hotels</a></li>
    <li><a href=\"{{ path('plats') }}\">Plats</a></li>
    <li class=\"active\"><a href=\"{{ path('activities') }}\">Activities</a></li>
    <li><a href=\"{{ path('events') }}\">events</a></li>
    <li><a href=\"{{ path('shop') }}\">shop</a></li>
    {# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
    {# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

        <div class=\"page-top\" id=\"templatemo_services\">
        </div> <!-- /.page-header -->

        {# <div class=\"middle-content\">
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
                            <h3 class=\"widget-title\">Our Activities</h3>
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
        </div> <!-- /.go-act --> #}



        <div style=\"margin-top: 80px;\" class=\"ticket-list\">
            <div class=\"container\">
                <div class=\"row\">
        {% for activity in activities %}
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"ticket-item\">
                            <h4><a href=\"#\">{{ activity.description }}</a></h4>
                            <p><span style=\"color: #2f7c72;\" class=\"green\">In: </span>{{ activity.adresse }}</p>
                            <p><span style=\"color: #2f7c72;\" class=\"green\"></span>{{ activity.type }}</p>
                            <div style=\"margin: 20px 0;\" class=\"sample-thumb\">
                                <img src=\"../images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
                            </div> <!-- /.sample-thumb -->
                            <p><span style=\"color: #2f7c72;\" class=\"green\">N° Tel: </span>{{ activity.numContact }}</p>
                            <p><span style=\"color: #2f7c72;\" class=\"green\">On: </span>{{ activity.date ? activity.date|date('Y-m-d') : '' }}</p>
                            <p><span style=\"color: #2f7c72;\" class=\"green\">Price: </span>{{ activity.price }} TND</p>
                            <a href=\"#\" class=\"ticket-btn\">Participer</a>
                        </div> <!-- /.ticket-item -->
                    </div> <!-- /.col-md-3 -->
        {% else %}
                
                    <div class=\"col-md-3 col-sm-6\">
                no records found
            </div>
        {% endfor %}
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.ticket-list -->

{% endblock %}", "activities/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\activities\\index.html.twig");
    }
}
