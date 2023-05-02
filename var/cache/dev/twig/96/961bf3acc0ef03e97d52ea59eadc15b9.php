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

/* commandeAdmin/print.html.twig */
class __TwigTemplate_0a4cea29df494299b45b13495664040e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandeAdmin/print.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Order Print</title>
    <link rel=\"stylesheet\" href=\"/style.css\" media=\"all\" />
</head>
<body>
<header class=\"clearfix\">
    <div id=\"logo\">
        TOUNESNA
    </div>
    <h1 align=\"center\">TOUNESNA Shop </h1>
    <hr></hr>
    <div><span>Order </span> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 15, $this->source); })()), "num", [], "any", false, false, false, 15), "html", null, true);
        echo " </div>
    <hr></hr>
    <div id=\"company\" class=\"clearfix\">
        <div><span>Product: </span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 18, $this->source); })()), "produit", [], "any", false, false, false, 18), "nomp", [], "any", false, false, false, 18), "html", null, true);
        echo "  </div>
        <div><span>Client: </span> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "  </div>
        <div><span>Quantity: </span> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "productqty", [], "any", false, false, false, 20), "html", null, true);
        echo "  </div>
        <div><span>Date: </span> ";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "  </div>
        <hr></hr>
        <div><span>Total Price: </span> ";
        // line 23
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 23, $this->source); })()), "productqty", [], "any", false, false, false, 23) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 23, $this->source); })()), "produit", [], "any", false, false, false, 23), "price", [], "any", false, false, false, 23)), "html", null, true);
        echo " TND </div>
    </div>
</header>
</main>

</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commandeAdmin/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  78 => 21,  74 => 20,  66 => 19,  62 => 18,  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Order Print</title>
    <link rel=\"stylesheet\" href=\"/style.css\" media=\"all\" />
</head>
<body>
<header class=\"clearfix\">
    <div id=\"logo\">
        TOUNESNA
    </div>
    <h1 align=\"center\">TOUNESNA Shop </h1>
    <hr></hr>
    <div><span>Order </span> {{ commande.num }} </div>
    <hr></hr>
    <div id=\"company\" class=\"clearfix\">
        <div><span>Product: </span> {{ commande.produit.nomp }}  </div>
        <div><span>Client: </span> {{ commande.user.nom }} {{ commande.user.prenom }} | {{ commande.user.email }}  </div>
        <div><span>Quantity: </span> {{ commande.productqty }}  </div>
        <div><span>Date: </span> {{ commande.date ? commande.date|date('d-m-Y') : '' }}  </div>
        <hr></hr>
        <div><span>Total Price: </span> {{ commande.productqty * commande.produit.price }} TND </div>
    </div>
</header>
</main>

</body>", "commandeAdmin/print.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\commandeAdmin\\print.html.twig");
    }
}
