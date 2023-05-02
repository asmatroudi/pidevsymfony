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

/* evenement/index.html.twig */
class __TwigTemplate_63b68a0a19d69be1238c50fff5defdc1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "evenement/index.html.twig", 1);
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
        echo "\tevents - Tounesna
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
\t<li>
\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a>
\t</li>
\t<li class=\"active\">
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
\t<li>
\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activities");
        echo "\">Activities</a>
\t</li>
\t<li class=\"active\">
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
\t<div style=\"margin: 0 0 50px 0;\" class=\"page-top\" id=\"templatemo_events\"></div>
\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            echo "\t\t<div class=\"alert alert-success \">
\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t<a style=\"margin: 50px 0 50px 200px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_event_index");
        echo "\" class=\"price-btn\">Mes Participations Events</a>
\t<!-- /.page-header -->

\t<div class=\"middle-content\">
\t\t<div
\t\t\tclass=\"container\">

\t\t\t";
        // line 151
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<!-- second row -->
\t\t\t\t";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 154, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 155
            echo "
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t\t<h3 class=\"widget-title\" style=\"text-transform: none; margin-bottom: -50px;\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 160), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t";
            // line 162
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 162)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 162), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</h3>
\t\t\t\t\t\t\t<h4 class=\"consult-title\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "region", [], "any", false, false, false, 163), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 165))), "html", null, true);
            echo "\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">By:
\t\t\t\t\t\t\t\t\t\t";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "auteur", [], "any", false, false, false, 171), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\" style=\"margin-top: -18px;\">Price:
\t\t\t\t\t\t\t\t\t\t";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 173), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</h4>
\t\t\t\t\t\t\t\t\t<p style=\"margin-top: -18px;\">About:
\t\t\t\t\t\t\t\t\t\t";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 176), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_event_participer", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idev", [], "any", false, false, false, 179)]), "html", null, true);
            echo "\" style=\"margin-right: 0; margin-left: auto; height: 40px;\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 187
            echo "
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\tno records found
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 194,  294 => 187,  281 => 179,  275 => 176,  269 => 173,  264 => 171,  255 => 165,  250 => 163,  246 => 162,  241 => 160,  234 => 155,  229 => 154,  224 => 151,  213 => 67,  204 => 64,  201 => 63,  197 => 62,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tevents - Tounesna
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
\t<li>
\t\t<a href=\"{{ path('activities') }}\">Activities</a>
\t</li>
\t<li class=\"active\">
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
\t<li>
\t\t<a href=\"{{ path('activities') }}\">Activities</a>
\t</li>
\t<li class=\"active\">
\t\t<a href=\"{{ path('events') }}\">events</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('shop') }}\">shop</a>
\t</li>
\t{# <li><a href=\"{{ path('aboutus') }}\">About Us</a></li> #}
\t{# <li><a href=\"{{ path('contact') }}\">Contact</a></li> #}
{% endblock %}

{% block content %}

\t<div style=\"margin: 0 0 50px 0;\" class=\"page-top\" id=\"templatemo_events\"></div>
\t{% for message in app.flashes('notice') %}
\t\t<div class=\"alert alert-success \">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t<a style=\"margin: 50px 0 50px 200px;\" href=\"{{ path('app_participation_event_index') }}\" class=\"price-btn\">Mes Participations Events</a>
\t<!-- /.page-header -->

\t<div class=\"middle-content\">
\t\t<div
\t\t\tclass=\"container\">

\t\t\t{# <div class=\"row\"><!-- first row -->
\t\t\t                
\t\t\t                \t<div class=\"col-md-4\"><!-- first column -->
\t\t\t                    
\t\t\t                        <div class=\"widget-item\">
\t\t\t                        
\t\t\t                            <h3 class=\"widget-title\">Upcoming events</h3>
\t\t\t                            <div class=\"service-item\">
\t\t\t                                <div class=\"service-icon\">
\t\t\t                                    <i class=\"fa fa-rocket\"></i>
\t\t\t                                </div> <!-- /.service-icon -->
\t\t\t                              <div class=\"service-content\">
\t\t\t                                <h4>Tour Promotion</h4>
\t\t\t                                  <p>Change icons by <a rel=\"nofollow\" href=\"http://fontawesome.info/font-awesome-icon-world-map/\">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt;</strong></p>
\t\t\t                                </div> 
\t\t\t                                <!-- /.service-content -->
\t\t\t                            </div> <!-- /.service-item -->
\t\t\t                            
\t\t\t                            <div class=\"service-item\">
\t\t\t                                <div class=\"service-icon\">
\t\t\t                                    <i class=\"fa fa-trophy\"></i>
\t\t\t                                </div> <!-- /.service-icon -->
\t\t\t                                <div class=\"service-content\">
\t\t\t                                    <h4>Europe Tour</h4>
\t\t\t                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
\t\t\t                                </div> <!-- /.service-content -->
\t\t\t                            </div> <!-- /.service-item -->
\t\t\t                            
\t\t\t                            <div class=\"service-item\">
\t\t\t                                <div class=\"service-icon\">
\t\t\t                                    <i class=\"fa fa-heart\"></i>
\t\t\t                                </div> <!-- /.service-icon -->
\t\t\t                                <div class=\"service-content\">
\t\t\t                                    <h4>Tour to Asia</h4>
\t\t\t                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
\t\t\t                                </div> <!-- /.service-content -->
\t\t\t                            </div> <!-- /.service-item -->
\t\t\t                            
\t\t\t                            <div class=\"service-item\">
\t\t\t                                <div class=\"service-icon\">
\t\t\t                                    <i class=\"fa fa-globe\"></i>
\t\t\t                                </div> <!-- /.service-icon -->
\t\t\t                                <div class=\"service-content\">
\t\t\t                                    <h4>New Adventure</h4>
\t\t\t                                    <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
\t\t\t                                </div> <!-- /.service-content -->
\t\t\t                            </div> <!-- /.service-item -->
\t\t\t                            
\t\t\t                        </div> <!-- /.widget-item -->
\t\t\t                        
\t\t\t                    </div> <!-- /.col-md-4 -->
\t\t\t                    
\t\t\t                    <div class=\"col-md-4\"><!-- second column -->
\t\t\t                        <div class=\"widget-item\">
\t\t\t                            <h3 class=\"widget-title\">Tour Event</h3>
\t\t\t                            <div class=\"sample-thumb\">
\t\t\t                                <img src=\"images/event_1.jpg\" alt=\"New Event\" title=\"New Event\">
\t\t\t                            </div> <!-- /.sample-thumb -->
\t\t\t                            <h4 class=\"consult-title\">Donec auctor iaculis libero</h4>
\t\t\t                            <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at. Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero. <br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
\t\t\t                        </div> <!-- /.widget-item -->
\t\t\t                    </div> <!-- /.col-md-4 -->
\t\t\t                    
\t\t\t                    <div class=\"col-md-4\"><!-- third column -->
\t\t\t                        <div class=\"widget-item\">
\t\t\t                            <h3 class=\"widget-title\">Special Eve</h3>
\t\t\t                            <div class=\"sample-thumb\">
\t\t\t                                <img src=\"images/event_2.jpg\" alt=\"Special Eve\" title=\"Special Eve\">
\t\t\t                            </div> <!-- /.sample-thumb -->
\t\t\t                            <h4 class=\"consult-title\">Donec auctor iaculis libero ut ullamcorper</h4>
\t\t\t                            <p> Aenean in lacus ut ligula fermentum congue. Etiam et urna sodales, pellentesque leo non, volutpat lorem. Pellentesque aliquam turpis venenatis libero fermentum, in blandit nisl aliquam.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
\t\t\t                        </div> <!-- /.widget-item -->
\t\t\t                    </div> <!-- /.col-md-4 -->
\t\t\t                    
\t\t\t                    
\t\t\t                    
\t\t\t                </div> <!-- /.row first --> #}

\t\t\t<div class=\"row\">
\t\t\t\t<!-- second row -->
\t\t\t\t{% for evenement in evenements %}

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t\t<h3 class=\"widget-title\" style=\"text-transform: none; margin-bottom: -50px;\">{{ evenement.titre }}
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t{{ evenement.datev ? evenement.datev|date('d-m-Y') : '' }}</h3>
\t\t\t\t\t\t\t<h4 class=\"consult-title\">{{ evenement.region }}</h4>
\t\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ evenement.image) }}\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">By:
\t\t\t\t\t\t\t\t\t\t{{ evenement.auteur }}</h4>
\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\" style=\"margin-top: -18px;\">Price:
\t\t\t\t\t\t\t\t\t\t{{ evenement.price }}
\t\t\t\t\t\t\t\t\t\tTND</h4>
\t\t\t\t\t\t\t\t\t<p style=\"margin-top: -18px;\">About:
\t\t\t\t\t\t\t\t\t\t{{ evenement.description }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_participation_event_participer', {'id': evenement.idev}) }}\" style=\"margin-right: 0; margin-left: auto; height: 40px;\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t{% else %}

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\tno records found
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\evenement\\index.html.twig");
    }
}
