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

/* hotel/index.html.twig */
class __TwigTemplate_978557721047dca19144d2e651255f66 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "hotel/index.html.twig", 1);
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
        echo "\tHotels - Tounesna
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
\t<li class=\"active\">
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
\t<li class=\"active\">
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
\t<div class=\"page-top\" id=\"templatemo_contact\"></div>
\t<!-- /.page-header -->

\t<div class=\"middle-content\">
\t\t<div style=\"margin-bottom: 60px;\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 69
            echo "\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<h4>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "gouvernorat", [], "any", false, false, false, 72), "nomGouver", [], "any", false, false, false, 72), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img src=\"../images/destination_1.jpg\" alt=\"destination 1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "site", [], "any", false, false, false, 79), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 81) <= 0)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 84)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 88
            echo "
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomhotel", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "price", [], "any", false, false, false, 93), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"price-btn\">Réserver</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">Add a comment</a>
\t\t\t\t\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["commentaire"], "idHotel", [], "any", false, false, false, 99) == twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 99))) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 100, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 101) == twig_get_attribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 101))) {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 102), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 103
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 103), "html", null, true);
                            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">";
                            // line 105
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenue", [], "any", false, false, false, 105), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 106
                            if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 106) == 21)) {
                                // line 107
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 107)]), "html", null, true);
                                echo "\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form style=\"margin-left: auto; margin-right: 0;\" method=\"post\" action=\"";
                                // line 108
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_delete", ["idcom" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 108)]), "html", null, true);
                                echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                                // line 109
                                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 109))), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 113
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 115
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\tno records found
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "hotel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 128,  346 => 124,  337 => 119,  330 => 117,  327 => 116,  321 => 115,  317 => 113,  310 => 109,  306 => 108,  301 => 107,  299 => 106,  295 => 105,  290 => 103,  285 => 102,  282 => 101,  277 => 100,  274 => 99,  270 => 98,  266 => 97,  259 => 93,  255 => 92,  249 => 88,  246 => 87,  239 => 85,  234 => 84,  230 => 82,  228 => 81,  223 => 79,  213 => 72,  208 => 69,  203 => 68,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tHotels - Tounesna
{% endblock %}

{% block navs %}
\t<li>
\t\t<a href=\"{{ path('home') }}\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('gouvernorats') }}\">Gouvernorats</a>
\t</li>
\t<li class=\"active\">
\t\t<a href=\"{{ path('hotels') }}\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('plats') }}\">Plats</a>
\t</li>
\t<li>
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
\t<li class=\"active\">
\t\t<a href=\"{{ path('hotels') }}\">Hotels</a>
\t</li>
\t<li>
\t\t<a href=\"{{ path('plats') }}\">Plats</a>
\t</li>
\t<li>
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

\t<div class=\"page-top\" id=\"templatemo_contact\"></div>
\t<!-- /.page-header -->

\t<div class=\"middle-content\">
\t\t<div style=\"margin-bottom: 60px;\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t{% for hotel in hotels %}
\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<h4>{{ hotel.gouvernorat.nomGouver }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img src=\"../images/destination_1.jpg\" alt=\"destination 1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ hotel.site }}</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">
\t\t\t\t\t\t\t\t\t\t{% if hotel.nbEtoile <= 0 %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{% for i in 1..hotel.nbEtoile %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">{{ hotel.nomhotel }}</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ hotel.price }}
\t\t\t\t\t\t\t\t\t\tTND</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"price-btn\">Réserver</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_hotel_comment', {'id': hotel.idh}) }}\">Add a comment</a>
\t\t\t\t\t\t\t\t{% for commentaire in commentaires %}
\t\t\t\t\t\t\t\t\t{% if commentaire.idHotel == hotel.idh %}
\t\t\t\t\t\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t\t\t\t\t\t{% if user.iduser == commentaire.auteur %}
\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ user.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.prenom }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">{{ commentaire.contenue }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.iduser == 21 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"{{ path('app_hotel_comment_edit', {'id': commentaire.idcom}) }}\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form style=\"margin-left: auto; margin-right: 0;\" method=\"post\" action=\"{{ path('app_commentaire_delete', {'idcom': commentaire.idcom}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commentaire.idcom) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\tno records found
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->
\t{% endblock %}
", "hotel/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\hotel\\index.html.twig");
    }
}
