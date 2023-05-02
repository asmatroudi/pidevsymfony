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
class __TwigTemplate_d9ac4bb05948d611236ce523b6816fbe extends Template
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
        echo "\tActivities - Tounesna
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
        echo "\t<li>
\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">Plats</a>
\t</li>
\t<li class=\"active\">
\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a>
\t</li>
\t";
        // line 30
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_mininavs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mininavs"));

        // line 34
        echo "\t<li>
\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotels");
        echo "\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">Plats</a>
\t</li>
\t<li class=\"active\">
\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">shop</a>
\t</li>
\t";
        // line 56
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "
\t<div class=\"page-top\" id=\"templatemo_services\"></div>
\t<!-- /.page-header -->

\t";
        // line 178
        echo "

\t<div style=\"margin-top: 80px;\" class=\"ticket-list\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 183, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 184
            echo "\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 187), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">In:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "adresse", [], "any", false, false, false, 192), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\"></span>
\t\t\t\t\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 195), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<div style=\"margin: 20px 0;\" class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"../images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">N° Tel:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "numContact", [], "any", false, false, false, 203), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">On:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 207
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 207)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 207), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">Price:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 211), "html", null, true);
            echo "
\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.ticket-item -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-3 -->
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 219
            echo "
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\tno records found
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->
\t</div>
\t<!-- /.ticket-list -->

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
        return array (  278 => 224,  268 => 219,  255 => 211,  248 => 207,  241 => 203,  230 => 195,  224 => 192,  216 => 187,  211 => 184,  206 => 183,  199 => 178,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tActivities - Tounesna
{% endblock %}

{% block navs %}
\t<li>
\t\t<a href=\"{{ path('home') }}\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('hotels') }}\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('plats') }}\">Plats</a>
\t</li>
\t<li class=\"active\">
\t\t<a href=\"{{ path('activities') }}\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('events') }}\">events</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('shop') }}\">shop</a>
\t</li>
\t{# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
\t{# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block mininavs %}
\t<li>
\t\t<a href=\"{{ path('home') }}\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('hotels') }}\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('plats') }}\">Plats</a>
\t</li>
\t<li class=\"active\">
\t\t<a href=\"{{ path('activities') }}\">Activities</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('events') }}\">events</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('shop') }}\">shop</a>
\t</li>
\t{# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
\t{# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

\t<div class=\"page-top\" id=\"templatemo_services\"></div>
\t<!-- /.page-header -->

\t{# <div class=\"middle-content\">
\t            <div class=\"container\">
\t                <div class=\"row\">
\t                    <div class=\"col-md-4\">
\t                        <div class=\"widget-item\">
\t                            <h3 class=\"widget-title\">Latest News</h3>
\t                            <div class=\"post-small\">
\t                                <div class=\"post-date\">
\t                                    <span class=\"time\">18</span>
\t                                    <span>June</span>
\t                                </div> <!-- /.post-thumb -->
\t                                <div class=\"post-content\">
\t                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
\t                                    <span>Donec auctor iaculis</span>
\t                                    <p>Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur.</p>
\t                                </div> <!-- /.post-content -->
\t                            </div> <!-- /.post-small -->
\t                            <div class=\"post-small\">
\t                                <div class=\"post-date\">
\t                                    <span class=\"time\">14</span>
\t                                    <span>June</span>
\t                                </div> <!-- /.post-thumb -->
\t                                <div class=\"post-content\">
\t                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
\t                                    <span>Donec auctor iaculis</span>
\t                                    <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at.</p>
\t                                </div> <!-- /.post-content -->
\t                            </div> <!-- /.post-small -->
\t                            <div class=\"post-small\">
\t                                <div class=\"post-date\">
\t                                    <span class=\"time\">12</span>
\t                                    <span>June</span>
\t                                </div> <!-- /.post-thumb -->
\t                                <div class=\"post-content\">
\t                                    <h4><a href=\"#\">Lorem Ipsum</a></h4>
\t                                    <span>Donec auctor iaculis</span>
\t                                    <p>Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis.</p>
\t                                </div> <!-- /.post-content -->
\t                            </div> <!-- /.post-small -->
\t                        </div> <!-- /.widget-item -->
\t                    </div> <!-- /.col-md-4 -->
\t                    <div class=\"col-md-4\">
\t                        <div class=\"widget-item\">
\t                            <h3 class=\"widget-title\">Consulting</h3>
\t                            <div class=\"sample-thumb\">
\t                                <img src=\"images/event_1.jpg\" alt=\"\">
\t                            </div> <!-- /.sample-thumb -->
\t                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
\t                            <p>Integer viverra erat nisi, sed faucibus velit ultricies facilisis. Nam eu felis ac ex fermentum scelerisque nec sed urna. Cras mollis bibendum fringilla.<br><br>Fusce condimentum neque eget diam blandit consequat. Integer at urna at risus ultrices vestibulum. Fusce pharetra viverra commodo.</p>
\t                        </div> <!-- /.widget-item -->
\t                    </div> <!-- /.col-md-4 -->
\t                    <div class=\"col-md-4\">
\t                        <div class=\"widget-item\">
\t                            <h3 class=\"widget-title\">Our Activities</h3>
\t                            <div class=\"service-item\">
\t                                <div class=\"service-icon\">
\t                                    <i class=\"fa fa-bell-o\"></i>
\t                                </div> <!-- /.service-icon -->
\t                                <div class=\"service-content\">
\t                                    <h4>Fusce pharetra</h4>
\t                                    <p>Change icons by <a rel=\"nofollow\" href=\"http://fontawesome.info/font-awesome-icon-world-map/\" target=\"_blank\">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-bell-o&quot;&gt;&lt;/i&gt;</strong></p>
\t                                </div> <!-- /.service-content -->
\t                            </div> <!-- /.service-item -->
\t                            <div class=\"service-item\">
\t                                <div class=\"service-icon\">
\t                                    <i class=\"fa fa-cogs\"></i>
\t                                </div> <!-- /.service-icon -->
\t                                <div class=\"service-content\">
\t                                    <h4>Nunc rhoncus</h4>
\t                                    <p>Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa.</p>
\t                                </div> <!-- /.service-content -->
\t                            </div> <!-- /.service-item -->
\t                            <div class=\"service-item\">
\t                                <div class=\"service-icon\">
\t                                    <i class=\"fa fa-pencil\"></i>
\t                                </div> <!-- /.service-icon -->
\t                                <div class=\"service-content\">
\t                                    <h4>Curabitur quis</h4>
\t                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
\t                                </div> <!-- /.service-content -->
\t                            </div> <!-- /.service-item -->
\t                        </div> <!-- /.widget-item -->
\t                    </div> <!-- /.col-md-4 -->
\t                </div> <!-- /.row -->
\t            </div> <!-- /.container -->
\t        </div> <!-- /.middle-content -->
\t
\t
\t
\t        <div class=\"go-act\">
\t            <div class=\"container\">
\t                <div class=\"row\">
\t                    <div class=\"col-md-4\">
\t                        <div class=\"first-map\"></div>
\t                    </div> <!-- /.col-md-4 -->
\t                    <div class=\"col-md-8\">
\t                        <div class=\"act-btn\">
\t                            <div class=\"inner\">
\t                                <div class=\"price\">
\t                                    \$5,600
\t                                </div> <!-- /.price -->
\t                                <div class=\"title\">
\t                                    <h2>Europa Tour</h2>
\t                                    <span>Belgium, Austria, Poland, France, England</span>
\t                                </div>
\t                            </div> <!-- /.inner -->
\t                            <a href=\"#\" class=\"link\">
\t                                <i class=\"fa fa-angle-right\"></i>
\t                            </a>
\t                        </div> <!-- /.act-btn -->
\t                    </div> <!-- /.col-md-8 -->
\t                </div> <!-- /.row -->
\t            </div> <!-- /.container -->
\t        </div> <!-- /.go-act --> #}


\t<div style=\"margin-top: 80px;\" class=\"ticket-list\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for activity in activities %}
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"#\">{{ activity.description }}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">In:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ activity.adresse }}</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\"></span>
\t\t\t\t\t\t\t\t{{ activity.type }}</p>
\t\t\t\t\t\t\t<div style=\"margin: 20px 0;\" class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"../images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">N° Tel:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ activity.numContact }}</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">On:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ activity.date ? activity.date|date('d-m-Y') : '' }}</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">Price:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ activity.price }}
\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.ticket-item -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-3 -->
\t\t\t\t{% else %}

\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\tno records found
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->
\t</div>
\t<!-- /.ticket-list -->

{% endblock %}
", "activities/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\activities\\index.html.twig");
    }
}
