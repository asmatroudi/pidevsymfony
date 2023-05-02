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

/* rate_hotel/_delete_form.html.twig */
class __TwigTemplate_460426f563a2fab79c93fa267a9cb09f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate_hotel/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate_hotel_delete", ["idRate" => twig_get_attribute($this->env, $this->source, (isset($context["rate_hotel"]) || array_key_exists("rate_hotel", $context) ? $context["rate_hotel"] : (function () { throw new RuntimeError('Variable "rate_hotel" does not exist.', 1, $this->source); })()), "idRate", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["rate_hotel"]) || array_key_exists("rate_hotel", $context) ? $context["rate_hotel"] : (function () { throw new RuntimeError('Variable "rate_hotel" does not exist.', 2, $this->source); })()), "idRate", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <button class=\"btn\">Delete</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "rate_hotel/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_rate_hotel_delete', {'idRate': rate_hotel.idRate}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rate_hotel.idRate) }}\">
    <button class=\"btn\">Delete</button>
</form>
", "rate_hotel/_delete_form.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\rate_hotel\\_delete_form.html.twig");
    }
}
