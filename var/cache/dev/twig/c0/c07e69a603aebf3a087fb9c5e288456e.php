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
class __TwigTemplate_c217d53c952cf278882aede291c953c2 extends Template
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
\t<div style=\"margin: 0 0 50px 0;\" class=\"page-top\" id=\"templatemo_contact\"></div>
\t<!-- /.page-header -->

\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "\t\t<div class=\"alert alert-success \">
\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t<a style=\"margin: 50px 0 50px 200px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\" class=\"price-btn\">Mes Réservations Hotels</a>
\t<div class=\"middle-content\">
\t\t<div style=\"margin-bottom: 60px;\" class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"our-listing owl-carousel\">
\t\t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 76
            echo "\t\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t\t<div class=\"list-thumb\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<h4>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "gouvernorat", [], "any", false, false, false, 79), "nomGouver", [], "any", false, false, false, 79), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img src=\"../images/destination_1.jpg\" alt=\"destination 1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-thumb -->
\t\t\t\t\t\t\t<div class=\"list-content\">
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "site", [], "any", false, false, false, 86), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-right: 0; margin-left: auto; color: #78b999;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 88) <= 0)) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["hotel"], "nbEtoile", [], "any", false, false, false, 91)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 95
            echo "
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomhotel", [], "any", false, false, false, 99), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 0; margin-left: auto; color: #78b999;\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "price", [], "any", false, false, false, 100), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\" class=\"price-btn\">Réserver</a>
\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t<a style=\"margin-left: 0; margin-right: auto;\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">Add a comment</a>
\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_rate", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">Add a rating</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h1 style=\"margin-top: 40px;\">Commentaires</h1>
\t\t\t\t\t\t\t\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 109, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["commentaire"], "idHotel", [], "any", false, false, false, 110) == twig_get_attribute($this->env, $this->source, $context["hotel"], "idh", [], "any", false, false, false, 110))) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 111, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 112) == twig_get_attribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 112))) {
                            // line 113
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 113), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 114
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 114), "html", null, true);
                            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">";
                            // line 116
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenue", [], "any", false, false, false, 116), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 117
                            if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 117) == 21)) {
                                // line 118
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 118)]), "html", null, true);
                                echo "\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form style=\"margin-left: auto; margin-right: 0;\" method=\"post\" action=\"";
                                // line 119
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_delete", ["idcom" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 119)]), "html", null, true);
                                echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                                // line 120
                                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["commentaire"], "idcom", [], "any", false, false, false, 120))), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "
\t\t\t\t\t\t\t\t<h1 style=\"margin-top: 40px;\">Ratings</h1>
\t\t\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) || array_key_exists("rates", $context) ? $context["rates"] : (function () { throw new RuntimeError('Variable "rates" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["rate"], "idHotel", [], "any", false, false, false, 133) == $context["hotel"])) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 134, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["user"], "iduser", [], "any", false, false, false, 135) == twig_get_attribute($this->env, $this->source, $context["rate"], "idUser", [], "any", false, false, false, 135))) {
                            // line 136
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-left: 0; margin-right: auto;\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 136), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 137
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 137), "html", null, true);
                            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto; text-transform: none;\">";
                            // line 139
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "rate", [], "any", false, false, false, 139), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.list-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.list-item -->
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 158
            echo "\t\t\t\t\t\t<div class=\"list-item\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
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
        return array (  438 => 160,  431 => 158,  422 => 153,  415 => 151,  412 => 150,  406 => 149,  402 => 147,  398 => 139,  393 => 137,  388 => 136,  385 => 135,  380 => 134,  377 => 133,  373 => 132,  369 => 130,  362 => 128,  359 => 127,  353 => 126,  349 => 124,  342 => 120,  338 => 119,  333 => 118,  331 => 117,  327 => 116,  322 => 114,  317 => 113,  314 => 112,  309 => 111,  306 => 110,  302 => 109,  296 => 106,  292 => 105,  287 => 103,  281 => 100,  277 => 99,  271 => 95,  268 => 94,  261 => 92,  256 => 91,  252 => 89,  250 => 88,  245 => 86,  235 => 79,  230 => 76,  225 => 75,  215 => 69,  206 => 66,  203 => 65,  199 => 64,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
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

\t<div style=\"margin: 0 0 50px 0;\" class=\"page-top\" id=\"templatemo_contact\"></div>
\t<!-- /.page-header -->

\t{% for message in app.flashes('notice') %}
\t\t<div class=\"alert alert-success \">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t<a style=\"margin: 50px 0 50px 200px;\" href=\"{{ path('app_reservation_index') }}\" class=\"price-btn\">Mes Réservations Hotels</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% if user.iduser == 21 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"margin-left: auto; margin-right: 0;\" href=\"{{ path('app_hotel_comment_edit', {'id': rate.idcom}) }}\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form style=\"margin-left: auto; margin-right: 0;\" method=\"post\" action=\"{{ path('app_rate_hotel_delete', {'idcom': rate.idcom}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rate.idcom) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
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
\t\t\t\t\t\t<div class=\"list-item\"></div>
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
