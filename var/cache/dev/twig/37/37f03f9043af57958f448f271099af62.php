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

/* commande/commande.html.twig */
class __TwigTemplate_96c698351739b26992fd4573bc3bcf2a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "commande/commande.html.twig", 1);
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
\t<li class=\"active\">
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
\t<li>
\t\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">events</a>
\t</li>
\t<li class=\"active\">
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
\t\t\t\t\t<h1>
\t\t\t\t\t\t`</h1>
\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

\t\t\t\t\t<section class=\"cart-section spad\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<main class=\"product-container\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"invoice-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-actions-btns mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_commande");
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tConfirm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"invoice-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTOUNESNA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address class=\"text-right\">Address</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>Address</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 127
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"invoice-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table custom-table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Products</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Sub Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 149), "nomp", [], "any", false, false, false, 149), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 151), "type", [], "any", false, false, false, 151), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "qty", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "qty", [], "any", false, false, false, 156) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 156), "price", [], "any", false, false, false, 156)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTND
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSubtotal<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShipping &amp; Handling<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTax<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Grand Total</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTND<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10.00 TND<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7.00 TND<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 183
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 183, $this->source); })()) + 17), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTND</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-footer\">Thank you for trusting us.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t\t\tbody {
\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\tfont: 400 0.875rem \"Open Sans\", sans-serif;
\t\t\t\t\t\t\t\t\t\tcolor: #bcd0f7;
\t\t\t\t\t\t\t\t\t\tbackground: #1a233a;
\t\t\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container {
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
                    width: 800px;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-header .invoice-logo {
\t\t\t\t\t\t\t\t\t\tmargin: 0.8rem 0 0;
\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\tfont-size: 1.6rem;
\t\t\t\t\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\t\t\t\t\tcolor: #bcd0f7;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-header .invoice-logo img {
\t\t\t\t\t\t\t\t\t\tmax-width: 130px;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-header address {
\t\t\t\t\t\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\t\t\t\t\t\tcolor: #8a99b5;
\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-details {
\t\t\t\t\t\t\t\t\t\tmargin: 1rem 0 0;
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\tline-height: 180%;
\t\t\t\t\t\t\t\t\t\tbackground: #1a233a;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-details .invoice-num {
\t\t\t\t\t\t\t\t\t\ttext-align: right;
\t\t\t\t\t\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-body {
\t\t\t\t\t\t\t\t\t\tpadding: 1rem 0 0;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-footer {
\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t\tfont-size: 0.7rem;
\t\t\t\t\t\t\t\t\t\tmargin: 5px 0 0;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.invoice-status {
\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\tbackground: #272e48;
\t\t\t\t\t\t\t\t\t\t-webkit-border-radius: 4px;
\t\t\t\t\t\t\t\t\t\t-moz-border-radius: 4px;
\t\t\t\t\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\t\t\t\t\tmargin-bottom: 1rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status h2.status {
\t\t\t\t\t\t\t\t\t\tmargin: 0 0 0.8rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status h5.status-title {
\t\t\t\t\t\t\t\t\t\tmargin: 0 0 0.8rem;
\t\t\t\t\t\t\t\t\t\tcolor: #8a99b5;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status p.status-type {
\t\t\t\t\t\t\t\t\t\tmargin: 0.5rem 0 0;
\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\tline-height: 150%;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status i {
\t\t\t\t\t\t\t\t\t\tfont-size: 1.5rem;
\t\t\t\t\t\t\t\t\t\tmargin: 0 0 1rem;
\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\tbackground: #1a233a;
\t\t\t\t\t\t\t\t\t\t-webkit-border-radius: 50px;
\t\t\t\t\t\t\t\t\t\t-moz-border-radius: 50px;
\t\t\t\t\t\t\t\t\t\tborder-radius: 50px;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status .badge {
\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t@media(max-width: 767px) {
\t\t\t\t\t\t\t\t\t\t.invoice-container {
\t\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.card {
\t\t\t\t\t\t\t\t\t\tbackground: #272e48;
\t\t\t\t\t\t\t\t\t\t-webkit-border-radius: 5px;
\t\t\t\t\t\t\t\t\t\t-moz-border-radius: 5px;
\t\t\t\t\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t\t\t\tmargin-bottom: 1rem;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.custom-table {
\t\t\t\t\t\t\t\t\t\tborder: 1px solid #2b3958;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table thead {
\t\t\t\t\t\t\t\t\t\tbackground: #2f71c1;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table thead th {
\t\t\t\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t\t\t\tcolor: #ffffff;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table > tbody tr:hover {
\t\t\t\t\t\t\t\t\t\tbackground: #172033;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table > tbody tr:nth-of-type(even) {
\t\t\t\t\t\t\t\t\t\tbackground-color: #1a243a;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table > tbody td {
\t\t\t\t\t\t\t\t\t\tborder: 1px solid #2e3d5f;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.table {
\t\t\t\t\t\t\t\t\t\tbackground: #1a243a;
\t\t\t\t\t\t\t\t\t\tcolor: #bcd0f7;
\t\t\t\t\t\t\t\t\t\tfont-size: 0.75rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.text-success {
\t\t\t\t\t\t\t\t\t\tcolor: #c0d64a !important;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-actions-btns {
\t\t\t\t\t\t\t\t\t\tmargin: auto;
\t\t\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\t\t\tjustify-content: flex-end;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-actions-btns .btn {
\t\t\t\t\t\t\t\t\t\tmargin: 0.3rem 0 0.3rem 0.3rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commande/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 183,  328 => 176,  312 => 162,  300 => 156,  295 => 154,  289 => 151,  284 => 149,  280 => 147,  276 => 146,  255 => 127,  222 => 87,  193 => 60,  186 => 59,  179 => 56,  174 => 53,  168 => 50,  162 => 47,  156 => 44,  150 => 41,  144 => 38,  138 => 35,  135 => 34,  128 => 33,  121 => 30,  116 => 27,  110 => 24,  104 => 21,  98 => 18,  92 => 15,  86 => 12,  80 => 9,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
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
\t<li class=\"active\">
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
\t<li>
\t\t<a href=\"{{ path('events') }}\">events</a>
\t</li>
\t<li class=\"active\">
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
\t\t\t\t\t<h1>
\t\t\t\t\t\t`</h1>
\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

\t\t\t\t\t<section class=\"cart-section spad\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<main class=\"product-container\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"invoice-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-actions-btns mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('confirm_commande') }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tConfirm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"invoice-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTOUNESNA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address class=\"text-right\">Address</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>Address</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      <div class=\"col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"invoice-details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          <div class=\"invoice-num\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div>Invoice - #009</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div>January 10th 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"invoice-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table custom-table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Products</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Sub Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for element in dataPanier %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ element.produit.nomp }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ element.produit.type }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ element.qty }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ element.qty * element.produit.price }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTND
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSubtotal<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShipping &amp; Handling<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTax<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Grand Total</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ total }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTND<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10.00 TND<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7.00 TND<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ total + 17 }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTND</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Row end -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-footer\">Thank you for trusting us.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t\t\tbody {
\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\tfont: 400 0.875rem \"Open Sans\", sans-serif;
\t\t\t\t\t\t\t\t\t\tcolor: #bcd0f7;
\t\t\t\t\t\t\t\t\t\tbackground: #1a233a;
\t\t\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container {
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
                    width: 800px;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-header .invoice-logo {
\t\t\t\t\t\t\t\t\t\tmargin: 0.8rem 0 0;
\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\tfont-size: 1.6rem;
\t\t\t\t\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\t\t\t\t\tcolor: #bcd0f7;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-header .invoice-logo img {
\t\t\t\t\t\t\t\t\t\tmax-width: 130px;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-header address {
\t\t\t\t\t\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\t\t\t\t\t\tcolor: #8a99b5;
\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-details {
\t\t\t\t\t\t\t\t\t\tmargin: 1rem 0 0;
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\tline-height: 180%;
\t\t\t\t\t\t\t\t\t\tbackground: #1a233a;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-details .invoice-num {
\t\t\t\t\t\t\t\t\t\ttext-align: right;
\t\t\t\t\t\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-body {
\t\t\t\t\t\t\t\t\t\tpadding: 1rem 0 0;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-container .invoice-footer {
\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t\tfont-size: 0.7rem;
\t\t\t\t\t\t\t\t\t\tmargin: 5px 0 0;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.invoice-status {
\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\tbackground: #272e48;
\t\t\t\t\t\t\t\t\t\t-webkit-border-radius: 4px;
\t\t\t\t\t\t\t\t\t\t-moz-border-radius: 4px;
\t\t\t\t\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\t\t\t\t\tmargin-bottom: 1rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status h2.status {
\t\t\t\t\t\t\t\t\t\tmargin: 0 0 0.8rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status h5.status-title {
\t\t\t\t\t\t\t\t\t\tmargin: 0 0 0.8rem;
\t\t\t\t\t\t\t\t\t\tcolor: #8a99b5;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status p.status-type {
\t\t\t\t\t\t\t\t\t\tmargin: 0.5rem 0 0;
\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\tline-height: 150%;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status i {
\t\t\t\t\t\t\t\t\t\tfont-size: 1.5rem;
\t\t\t\t\t\t\t\t\t\tmargin: 0 0 1rem;
\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\tbackground: #1a233a;
\t\t\t\t\t\t\t\t\t\t-webkit-border-radius: 50px;
\t\t\t\t\t\t\t\t\t\t-moz-border-radius: 50px;
\t\t\t\t\t\t\t\t\t\tborder-radius: 50px;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.invoice-status .badge {
\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t@media(max-width: 767px) {
\t\t\t\t\t\t\t\t\t\t.invoice-container {
\t\t\t\t\t\t\t\t\t\t\tpadding: 1rem;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.card {
\t\t\t\t\t\t\t\t\t\tbackground: #272e48;
\t\t\t\t\t\t\t\t\t\t-webkit-border-radius: 5px;
\t\t\t\t\t\t\t\t\t\t-moz-border-radius: 5px;
\t\t\t\t\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t\t\t\tmargin-bottom: 1rem;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.custom-table {
\t\t\t\t\t\t\t\t\t\tborder: 1px solid #2b3958;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table thead {
\t\t\t\t\t\t\t\t\t\tbackground: #2f71c1;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table thead th {
\t\t\t\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t\t\t\tcolor: #ffffff;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table > tbody tr:hover {
\t\t\t\t\t\t\t\t\t\tbackground: #172033;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table > tbody tr:nth-of-type(even) {
\t\t\t\t\t\t\t\t\t\tbackground-color: #1a243a;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-table > tbody td {
\t\t\t\t\t\t\t\t\t\tborder: 1px solid #2e3d5f;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t.table {
\t\t\t\t\t\t\t\t\t\tbackground: #1a243a;
\t\t\t\t\t\t\t\t\t\tcolor: #bcd0f7;
\t\t\t\t\t\t\t\t\t\tfont-size: 0.75rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.text-success {
\t\t\t\t\t\t\t\t\t\tcolor: #c0d64a !important;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-actions-btns {
\t\t\t\t\t\t\t\t\t\tmargin: auto;
\t\t\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\t\t\tjustify-content: flex-end;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t.custom-actions-btns .btn {
\t\t\t\t\t\t\t\t\t\tmargin: 0.3rem 0 0.3rem 0.3rem;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "commande/commande.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\commande\\commande.html.twig");
    }
}
