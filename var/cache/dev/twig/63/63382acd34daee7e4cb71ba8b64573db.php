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
class __TwigTemplate_70d03e0a1567a413d2bad58117de0c2a extends Template
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
\t\t\t\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76))), "html", null, true);
        echo "\" alt=\"image\" title=\"image\">
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
\t\t\t\t\t\t\t\t<img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" alt=\"destination 1\">
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
\t\t\t\t\t\t\t\t<a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 123)]), "html", null, true);
            echo "\" class=\"price-btn\">Réserver</a>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<a style=\"margin-left: 0; margin-right: auto;\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\">Add a comment</a>
\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_rate", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\">Add a rating</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h1 style=\"margin-top: 40px;\">Commentaires</h1>
\t\t\t\t\t\t\t\t";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 129, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["commentaire"], "idHotel", [], "any", false, false, false, 130) == twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 130))) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 131, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 132) == twig_get_attribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 132))) {
                            // line 133
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 133), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 134
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 134), "html", null, true);
                            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">";
                            // line 136
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenue", [], "any", false, false, false, 136), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 137
                            if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 137) == 21)) {
                                // line 138
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 138)]), "html", null, true);
                                echo "\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form style=\"margin-left: auto; margin-right: 0;\" method=\"post\" action=\"";
                                // line 139
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_delete", ["idcom" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 139)]), "html", null, true);
                                echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                                // line 140
                                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 140))), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 144
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "
\t\t\t\t\t\t\t\t<h1 style=\"margin-top: 40px;\">Ratings</h1>
\t\t\t\t\t\t\t\t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) || array_key_exists("rates", $context) ? $context["rates"] : (function () { throw new RuntimeError('Variable "rates" does not exist.', 152, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["rate"], "idHotel", [], "any", false, false, false, 153) == $context["hotel"])) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 154, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 155) == twig_get_attribute($this->env, $this->source, $context["rate"], "idUser", [], "any", false, false, false, 155))) {
                            // line 156
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 156), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 157
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 157), "html", null, true);
                            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">";
                            // line 159
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "rate", [], "any", false, false, false, 159), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 170
            echo "\t\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.our-listing -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->


\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 179
        if ((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 179, $this->source); })())) {
            // line 180
            echo "\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Plats in
\t\t\t\t\t\t\t";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 181, $this->source); })()), "nomGouver", [], "any", false, false, false, 181), "html", null, true);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t\t";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 184, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 185
            echo "\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t\t<img style=\"height: 220px; object-fit: cover;\" src=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 187))), "html", null, true);
            echo "\" alt=\"plat\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomplat", [], "any", false, false, false, 192), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 193), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "chef", [], "any", false, false, false, 196), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "region", [], "any", false, false, false, 197), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 204
            echo "\t\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.our-listing -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->


\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 213
        if ((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 213, $this->source); })())) {
            // line 214
            echo "\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Activities in
\t\t\t\t\t\t\t";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 215, $this->source); })()), "nomGouver", [], "any", false, false, false, 215), "html", null, true);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 217, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 218
            echo "\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 221), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">In:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "adresse", [], "any", false, false, false, 226), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\"></span>
\t\t\t\t\t\t\t\t\t";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 229), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<div style=\"margin: 20px 0;\" class=\"sample-thumb\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 231))), "html", null, true);
            echo "\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">N° Tel:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "numContact", [], "any", false, false, false, 237), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">On:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            // line 241
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 241)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 241), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">Price:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 245), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.ticket-item -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col-md-3 -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 253
            echo "
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.row -->


\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 261
        if ((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 261, $this->source); })())) {
            // line 262
            echo "\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Events in
\t\t\t\t\t\t\t";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 263, $this->source); })()), "nomGouver", [], "any", false, false, false, 263), "html", null, true);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 265
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 265, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 266
            echo "
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t\t\t<h3 class=\"widget-title\" style=\"text-transform: none; margin-bottom: -50px;\">";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 271), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t";
            // line 273
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 273)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datev", [], "any", false, false, false, 273), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</h3>
\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "region", [], "any", false, false, false, 274), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 276))), "html", null, true);
            echo "\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">By:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "auteur", [], "any", false, false, false, 282), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\" style=\"margin-top: -18px;\">Price:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 284), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tTND</h4>
\t\t\t\t\t\t\t\t\t\t<p style=\"margin-top: -18px;\">About:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 287), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"margin-right: 0; margin-left: auto; height: 40px;\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 298
            echo "
\t\t\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 305
        if ((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 305, $this->source); })())) {
            // line 306
            echo "\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Produits in
\t\t\t\t\t\t\t";
            // line 307
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gouvernorat"]) || array_key_exists("gouvernorat", $context) ? $context["gouvernorat"] : (function () { throw new RuntimeError('Variable "gouvernorat" does not exist.', 307, $this->source); })()), "nomGouver", [], "any", false, false, false, 307), "html", null, true);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 309
        echo "\t\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t\t";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 310, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 311
            echo "\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"list-thumb\">
\t\t\t\t\t\t\t\t\t";
            // line 317
            echo "\t\t\t\t\t\t\t\t\t<img style=\"height: 280px; object-fit: cover;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 317))), "html", null, true);
            echo "\" alt=\"produit\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomp", [], "any", false, false, false, 322), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 323), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tTND</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 327), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "gouvernorat", [], "any", false, false, false, 328), "nomGouver", [], "any", false, false, false, 328), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tstyle=\"display: flex; margin-top: -20px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 333
            echo "\t\t\t\t\t\t\t\t\t\t<a style=\"margin-right: 0; margin-left: auto;\" href=\"#\" class=\"price-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 342
            echo "\t\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.our-listing -->
\t\t\t\t</div>


\t\t\t\t<a href=\"";
        // line 349
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gouvernorats");
        echo "\">back to Gouvernorats</a>
\t\t\t</div>
\t\t</div>

\t";
        
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
        return array (  804 => 349,  797 => 344,  790 => 342,  777 => 333,  770 => 328,  766 => 327,  759 => 323,  755 => 322,  746 => 317,  741 => 311,  736 => 310,  733 => 309,  728 => 307,  725 => 306,  723 => 305,  717 => 301,  709 => 298,  693 => 287,  687 => 284,  682 => 282,  673 => 276,  668 => 274,  664 => 273,  659 => 271,  652 => 266,  646 => 265,  641 => 263,  638 => 262,  636 => 261,  629 => 256,  621 => 253,  608 => 245,  601 => 241,  594 => 237,  585 => 231,  580 => 229,  574 => 226,  566 => 221,  561 => 218,  555 => 217,  550 => 215,  547 => 214,  545 => 213,  536 => 206,  529 => 204,  517 => 197,  513 => 196,  507 => 193,  503 => 192,  495 => 187,  491 => 185,  486 => 184,  483 => 183,  478 => 181,  475 => 180,  473 => 179,  464 => 172,  457 => 170,  448 => 165,  441 => 163,  438 => 162,  432 => 161,  427 => 159,  422 => 157,  417 => 156,  414 => 155,  409 => 154,  406 => 153,  402 => 152,  398 => 150,  391 => 148,  388 => 147,  382 => 146,  378 => 144,  371 => 140,  367 => 139,  362 => 138,  360 => 137,  356 => 136,  351 => 134,  346 => 133,  343 => 132,  338 => 131,  335 => 130,  331 => 129,  325 => 126,  321 => 125,  316 => 123,  310 => 120,  306 => 119,  300 => 115,  297 => 114,  290 => 112,  285 => 111,  281 => 109,  279 => 108,  274 => 106,  266 => 101,  261 => 99,  256 => 96,  251 => 95,  248 => 94,  243 => 92,  240 => 91,  238 => 90,  227 => 81,  223 => 79,  217 => 76,  212 => 74,  201 => 66,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
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
\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ gouvernorat.image) }}\" alt=\"image\" title=\"image\">
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
\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ hotel.image) }}\" alt=\"destination 1\">
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
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reservation_hotel', {'id': hotel.idh}) }}\" class=\"price-btn\">Réserver</a>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<a style=\"margin-left: 0; margin-right: auto;\" href=\"{{ path('app_hotel_comment', {'id': hotel.idh}) }}\">Add a comment</a>
\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"{{ path('app_hotel_rate', {'id': hotel.idh}) }}\">Add a rating</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h1 style=\"margin-top: 40px;\">Commentaires</h1>
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

\t\t\t\t\t\t\t\t<h1 style=\"margin-top: 40px;\">Ratings</h1>
\t\t\t\t\t\t\t\t{% for rate in rates %}
\t\t\t\t\t\t\t\t\t{% if rate.idHotel == hotel %}
\t\t\t\t\t\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t\t\t\t\t\t{% if user.iduser == rate.idUser %}
\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ user.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.prenom }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">{{ rate.rate }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.our-listing -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->


\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if plats %}
\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Plats in
\t\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t\t{% for plat in plats %}
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t\t<img style=\"height: 220px; object-fit: cover;\" src=\"{{ asset('/uploads/' ~ plat.image) }}\" alt=\"plat\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ plat.nomplat }}</h5>
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ plat.restaurant }}</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">{{ plat.chef }}</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ plat.region }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.our-listing -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->


\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if activities %}
\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Activities in
\t\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% for activity in activities %}
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ activity.description }}</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">In:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{{ activity.adresse }}</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\"></span>
\t\t\t\t\t\t\t\t\t{{ activity.type }}</p>
\t\t\t\t\t\t\t\t<div style=\"margin: 20px 0;\" class=\"sample-thumb\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ activity.image) }}\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">N° Tel:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{{ activity.numContact }}</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">On:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{{ activity.date ? activity.date|date('d-m-Y') : '' }}</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color: #2f7c72;\" class=\"green\">Price:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{{ activity.price }}
\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.ticket-item -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col-md-3 -->
\t\t\t\t\t{% else %}

\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->


\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if events %}
\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 22px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Events in
\t\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% for evenement in events %}

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t\t<!-- first column -->
\t\t\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t\t\t<h3 class=\"widget-title\" style=\"text-transform: none; margin-bottom: -50px;\">{{ evenement.titre }}
\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t{{ evenement.datev ? evenement.datev|date('d-m-Y') : '' }}</h3>
\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">{{ evenement.region }}</h4>
\t\t\t\t\t\t\t\t<div class=\"sample-thumb\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ evenement.image) }}\" alt=\"New Event\" title=\"New Event\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.sample-thumb -->
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\">By:
\t\t\t\t\t\t\t\t\t\t\t{{ evenement.auteur }}</h4>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"consult-title\" style=\"margin-top: -18px;\">Price:
\t\t\t\t\t\t\t\t\t\t\t{{ evenement.price }}
\t\t\t\t\t\t\t\t\t\t\tTND</h4>
\t\t\t\t\t\t\t\t\t\t<p style=\"margin-top: -18px;\">About:
\t\t\t\t\t\t\t\t\t\t\t{{ evenement.description }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ticket-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"margin-right: 0; margin-left: auto; height: 40px;\" class=\"ticket-btn\">Participer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.widget-item -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t\t{% else %}

\t\t\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if produits %}
\t\t\t\t\t\t<h3 style=\"font-size: 30px; margin: 16px 16px 60px 16px; text-transform: uppercase; border-bottom: 2px solid #000000\">Produits in
\t\t\t\t\t\t\t{{ gouvernorat.nomGouver }}</h3>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"list-thumb\">
\t\t\t\t\t\t\t\t\t{# <div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <h4>{{ produit.gouvernorat.nomGouver }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div> #}
\t\t\t\t\t\t\t\t\t<img style=\"height: 280px; object-fit: cover;\" src=\"{{ asset('/uploads/' ~ produit.image) }}\" alt=\"produit\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">{{ produit.nomp }}</h5>
\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ produit.price }}
\t\t\t\t\t\t\t\t\t\t\tTND</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">{{ produit.type }}</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">{{ produit.gouvernorat.nomGouver }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tstyle=\"display: flex; margin-top: -20px;\">
\t\t\t\t\t\t\t\t\t\t{# <a style=\"margin-left: 0; margin-right: auto;\" href=\"#\" class=\"price-btn\">Book Now</a> #}
\t\t\t\t\t\t\t\t\t\t<a style=\"margin-right: 0; margin-left: auto;\" href=\"#\" class=\"price-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.our-listing -->
\t\t\t\t</div>


\t\t\t\t<a href=\"{{ path('gouvernorats') }}\">back to Gouvernorats</a>
\t\t\t</div>
\t\t</div>

\t{% endblock %}
", "gouvernorat/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\gouvernorat\\show.html.twig");
    }
}
