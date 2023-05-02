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

/* gouvernorat/show.html.twig */
class __TwigTemplate_332b8f8cf08c3b9b738aa4bdf7e8553d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gouvernorat/show.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "gouvernorat/show.html.twig", 1);
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
        echo "\tGouvernorats - Tounesna
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
\t<li class=\"active\">
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
\t<li class=\"active\">
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
\t<div class=\"page-top\" id=\"templatemo_about\"></div>
\t<!-- /.page-header -->

\t<div class=\"middle-content\">
\t\t<div class=\"container\">
\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">back to Gouvernorats</a>

\t\t\t<div style=\"margin-top: 50px;\" class=\"row\">

\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-3\">
\t\t\t\t\t<!-- first column -->
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h3 class=\"widget-title\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 74, $this->source); })()), "nomGouver", [], "any", false, false, false, 74), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t<img src=\"../images/about_1.jpg\" alt=\"image\" title=\"image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t<h4 class=\"consult-title\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 79, $this->source); })()), "region", [], "any", false, false, false, 79), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t";
        // line 81
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-4 -->

\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 90
        if ((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 90, $this->source); })())) {
            // line 91
            echo "\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Hotels in
\t\t\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 92, $this->source); })()), "nomGouver", [], "any", false, false, false, 92), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 95, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 96
            echo "\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<h4>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "gouvernorat", [], "any", false, false, false, 99), "nomGouver", [], "any", false, false, false, 99), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img src=\"../images/destination_1.jpg\" alt=\"destination 1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "site", [], "any", false, false, false, 106), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 108
            if ((twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 108) <= 0)) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 111)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomhotel", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "price", [], "any", false, false, false, 120), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"price-btn\">Réserver</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\">Add a comment</a>
\t\t\t\t\t\t\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["commentaire"], "idHotel", [], "any", false, false, false, 126) == twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 126))) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 127), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenue", [], "any", false, false, false, 128), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 130
                echo "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 137
            echo "\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>
\t\t\t<!-- /.row -->


\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 146
        if ((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 146, $this->source); })())) {
            // line 147
            echo "\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Plats in
\t\t\t\t\t\t";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 148, $this->source); })()), "nomGouver", [], "any", false, false, false, 148), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 151, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 152
            echo "\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t<img style=\"height: 220px; object-fit: cover;\" src=\"../images/food.webp\" alt=\"plat\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomplat", [], "any", false, false, false, 159), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 160), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "chef", [], "any", false, false, false, 163), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "region", [], "any", false, false, false, 164), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 171
            echo "\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>
\t\t\t<!-- /.row -->


\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 180
        if ((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 180, $this->source); })())) {
            // line 181
            echo "\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Activities in
\t\t\t\t\t\t";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 182, $this->source); })()), "nomGouver", [], "any", false, false, false, 182), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 184, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 185
            echo "\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 188), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">In:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "adresse", [], "any", false, false, false, 193), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\"></span>
\t\t\t\t\t\t\t\t";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 196), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<div style=\"margin: 20px 0;\" class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"../images/event_3.jpg\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">N° Tel:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "numContact", [], "any", false, false, false, 204), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">On:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 208
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 208)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 208), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">Price:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 212), "html", null, true);
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
            // line 220
            echo "
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\"></div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t</div>
\t\t\t<!-- /.row -->


\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 228
        if ((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 228, $this->source); })())) {
            // line 229
            echo "\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Events in
\t\t\t\t\t\t";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 230, $this->source); })()), "nomGouver", [], "any", false, false, false, 230), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 232, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 233
            echo "
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t\t<h3 class=\"widget-title\" style=\"text-transform: none; margin-bottom: -50px;\">";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 238), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t";
            // line 240
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 240)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 240), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</h3>
\t\t\t\t\t\t\t<h4 class=\"consult-title\">";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "region", [], "any", false, false, false, 241), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"../images/event_2.jpg\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">By:
\t\t\t\t\t\t\t\t\t\t";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "auteur", [], "any", false, false, false, 249), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\" style=\"margin-top: -18px;\">Price:
\t\t\t\t\t\t\t\t\t\t";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 251), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</h4>
\t\t\t\t\t\t\t\t\t<p style=\"margin-top: -18px;\">About:
\t\t\t\t\t\t\t\t\t\t";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 254), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"margin-right: 0; margin-left: auto; height: 40px;\" class=\"ticket-btn\">Participer</a>
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
            // line 265
            echo "
\t\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 272
        if ((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 272, $this->source); })())) {
            // line 273
            echo "\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Produits in
\t\t\t\t\t\t";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 274, $this->source); })()), "nomGouver", [], "any", false, false, false, 274), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 276
        echo "\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 277, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 278
            echo "\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"list-thumb\">
\t\t\t\t\t\t\t\t";
            // line 284
            echo "\t\t\t\t\t\t\t\t<img style=\"height: 280px; object-fit: cover;\" src=\"../images/produit_1.jpg\" alt=\"produit\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomp", [], "any", false, false, false, 289), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 290), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 294), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "gouvernorat", [], "any", false, false, false, 295), "nomGouver", [], "any", false, false, false, 295), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tstyle=\"display: flex; margin-top: -20px;\">
\t\t\t\t\t\t\t\t\t";
            // line 300
            echo "\t\t\t\t\t\t\t\t\t<a style=\"margin-right: 0; margin-left: auto;\" href=\"#\" class=\"price-btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 309
            echo "\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>


\t\t\t<a href=\"";
        // line 316
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">back to Gouvernorats</a>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gouvernorat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 316,  677 => 311,  670 => 309,  657 => 300,  650 => 295,  646 => 294,  639 => 290,  635 => 289,  628 => 284,  623 => 278,  618 => 277,  615 => 276,  610 => 274,  607 => 273,  605 => 272,  599 => 268,  591 => 265,  575 => 254,  569 => 251,  564 => 249,  553 => 241,  549 => 240,  544 => 238,  537 => 233,  531 => 232,  526 => 230,  523 => 229,  521 => 228,  514 => 223,  506 => 220,  493 => 212,  486 => 208,  479 => 204,  468 => 196,  462 => 193,  454 => 188,  449 => 185,  443 => 184,  438 => 182,  435 => 181,  433 => 180,  424 => 173,  417 => 171,  405 => 164,  401 => 163,  395 => 160,  391 => 159,  382 => 152,  377 => 151,  374 => 150,  369 => 148,  366 => 147,  364 => 146,  355 => 139,  348 => 137,  339 => 132,  332 => 130,  327 => 128,  322 => 127,  319 => 126,  315 => 125,  311 => 124,  304 => 120,  300 => 119,  294 => 115,  291 => 114,  284 => 112,  279 => 111,  275 => 109,  273 => 108,  268 => 106,  258 => 99,  253 => 96,  248 => 95,  245 => 94,  240 => 92,  237 => 91,  235 => 90,  224 => 81,  220 => 79,  212 => 74,  201 => 66,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}

{% block title %}
\tGouvernorats - Tounesna
{% endblock %}

{% block navs %}
\t<li>
\t\t<a href=\"{{ path('home') }}\">Home</a>
\t</li>
\t<li class=\"active\">
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
\t<li class=\"active\">
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

\t<div class=\"page-top\" id=\"templatemo_about\"></div>
\t<!-- /.page-header -->

\t<div class=\"middle-content\">
\t\t<div class=\"container\">
\t\t\t<a href=\"{{ path('gouvernorats') }}\">back to Gouvernorats</a>

\t\t\t<div style=\"margin-top: 50px;\" class=\"row\">

\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-3\">
\t\t\t\t\t<!-- first column -->
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h3 class=\"widget-title\">{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t<img src=\"../images/about_1.jpg\" alt=\"image\" title=\"image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t<h4 class=\"consult-title\">{{ gouvernorat.region }}</h4>
\t\t\t\t\t\t{# <p>{{ gouvernorat.description }}</p> #}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-4 -->

\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t{% if hotels %}
\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Hotels in
\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t{% endif %}
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
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ commentaire.auteur }}</h5>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">{{ commentaire.contenue }}</span>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>
\t\t\t<!-- /.row -->


\t\t\t<div class=\"row\">
\t\t\t\t{% if plats %}
\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Plats in
\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t{% for plat in plats %}
\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t<img style=\"height: 220px; object-fit: cover;\" src=\"../images/food.webp\" alt=\"plat\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ plat.nomplat }}</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ plat.restaurant }}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">{{ plat.chef }}</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ plat.region }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>
\t\t\t<!-- /.row -->


\t\t\t<div class=\"row\">
\t\t\t\t{% if activities %}
\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Activities in
\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t{% endif %}
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

\t\t\t\t\t<div class=\"col-md-3 col-sm-6\"></div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<!-- /.row -->


\t\t\t<div class=\"row\">
\t\t\t\t{% if events %}
\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Events in
\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t{% endif %}
\t\t\t\t{% for evenement in events %}

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t\t<h3 class=\"widget-title\" style=\"text-transform: none; margin-bottom: -50px;\">{{ evenement.titre }}
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t{{ evenement.datev ? evenement.datev|date('d-m-Y') : '' }}</h3>
\t\t\t\t\t\t\t<h4 class=\"consult-title\">{{ evenement.region }}</h4>
\t\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t\t<img src=\"../images/event_2.jpg\" alt=\"New Event\" title=\"New Event\">
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
\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"margin-right: 0; margin-left: auto; height: 40px;\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t{% else %}

\t\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t{% endfor %}
\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t{% if produits %}
\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Produits in
\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"list-thumb\">
\t\t\t\t\t\t\t\t{# <div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <h4>{{ produit.gouvernorat.nomGouver }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div> #}
\t\t\t\t\t\t\t\t<img style=\"height: 280px; object-fit: cover;\" src=\"../images/produit_1.jpg\" alt=\"produit\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ produit.nomp }}</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ produit.price }}
\t\t\t\t\t\t\t\t\t\tTND</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">{{ produit.type }}</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ produit.gouvernorat.nomGouver }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tstyle=\"display: flex; margin-top: -20px;\">
\t\t\t\t\t\t\t\t\t{# <a style=\"margin-left: 0; margin-right: auto;\" href=\"#\" class=\"price-btn\">Book Now</a> #}
\t\t\t\t\t\t\t\t\t<a style=\"margin-right: 0; margin-left: auto;\" href=\"#\" class=\"price-btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- /.our-listing -->
\t\t\t</div>


\t\t\t<a href=\"{{ path('gouvernorats') }}\">back to Gouvernorats</a>
\t\t</div>
\t</div>

{% endblock %}
", "gouvernorat/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\gouvernorat\\show.html.twig");
    }
}
