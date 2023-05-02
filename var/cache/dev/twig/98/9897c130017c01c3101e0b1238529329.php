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

/* back/admin.html.twig */
class __TwigTemplate_77df32ac1f6fe08ca672fb9703b77c40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagewrapper' => [$this, 'block_pagewrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back/admin.html.twig", 1);
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
        echo "\tAdmin Dashboard
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_pagewrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagewrapper"));

        // line 8
        echo "\t\t<!-- ============================================================== -->
\t\t<!-- Bread crumb and right sidebar toggle -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"page-breadcrumb\"> <div class=\"row\">
\t\t\t\t<div class=\"col-12 d-flex no-block align-items-center\">
\t\t\t\t\t<h4 class=\"page-title\">Dashboard</h4>
\t\t\t\t\t<div class=\"ml-auto text-right\">
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- End Bread crumb and right sidebar toggle -->
\t\t<!-- ============================================================== -->
\t\t<!-- ============================================================== -->
\t\t<!-- Container fluid  -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"container-fluid\"> <!-- ============================================================== -->
\t\t\t<!-- Sales Cards  -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div
\t\t\t\tclass=\"row\"> <!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-cyan text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Dashboard</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-4 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-success text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chart-areaspline\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Charts</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-warning text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-collage\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Widgets</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-danger text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-border-outside\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Tables</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-info text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-all\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Full Width</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-4 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-danger text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-receipt\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Forms</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-info text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-relative-scale\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Buttons</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-cyan text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-pencil\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Elements</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-success text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar-check\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Calnedar</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-warning text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-alert\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Errors</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Sales chart -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"row\"> <div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"d-md-flex align-items-center\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Site Analysis</h4>
\t\t\t\t\t\t\t\t\t<h5 class=\"card-subtitle\">Overview of Latest Month</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- column -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t<div class=\"flot-chart\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flot-chart-content\" id=\"flot-line-chart\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">2540</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Total Users</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">New Users</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">656</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Total Shop</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tag m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">9540</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Total Orders</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">100</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Pending Orders</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">8540</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Online Orders</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- column -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Sales chart -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Recent comment and chats -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div
\t\t\t\tclass=\"row\"> <!-- column -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Latest Posts</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"comment-widgets scrollable\">
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row m-t-0\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/1.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Testtttttttttttt</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">April 14, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/4.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text active w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Michael Jorden</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">May 10, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/5.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Johnathan Doeting</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">August 1, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">To Do List</h4>
\t\t\t\t\t\t\t<div class=\"todo-widget scrollable\" style=\"height:450px;\">
\t\t\t\t\t\t\t\t<ul class=\"list-task todo-list list-group m-b-0\" data-role=\"tasklist\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-danger float-right\">Today</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none assignedto\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/1.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Steave\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/2.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Jessica\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/3.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Priyanka\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/4.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Selina\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Lorem Ipsum is simply dummy text of the printing</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">1 week
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-date\">
\t\t\t\t\t\t\t\t\t\t\t26 jun 2017</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Give Purchase report to</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-info float-right\">Yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none assignedto\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/3.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Priyanka\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/4.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Selina\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Lorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-warning float-right\">2 weeks</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-date\">
\t\t\t\t\t\t\t\t\t\t\t26 jun 2017</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Give Purchase report to</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-info float-right\">Yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none assignedto\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/3.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Priyanka\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/4.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Selina\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title m-b-0\">Progress Box</h4>
\t\t\t\t\t\t\t<div class=\"m-t-20\">
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center\">
\t\t\t\t\t\t\t\t\t<span>81% Clicks</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>125</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 81%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center m-t-25\">
\t\t\t\t\t\t\t\t\t<span>72% Uniquie Clicks</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>120</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center m-t-25\">
\t\t\t\t\t\t\t\t\t<span>53% Impressions</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>785</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-info\" role=\"progressbar\" style=\"width: 53%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center m-t-25\">
\t\t\t\t\t\t\t\t\t<span>3% Online Users</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>8</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-danger\" role=\"progressbar\" style=\"width: 3%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- card new -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title m-b-0\">News Updates</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-style-none\">
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">dolor sit amet, consectetur adipiscing</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">20</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-gift w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Congratulation Maruti, Happy Birthday</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">many many happy returns of the day</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">11</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Maruti is a Responsive Admin theme</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">But already everything was solved. It will ...</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">19</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-leaf w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Envato approved Maruti Admin template</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">i am very happy to approved by TF</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">20</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">
\t\t\t\t\t\t\t\t\t\tI am alwayse here if you have any question</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">we glad that you choose our template</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">15</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- column -->

\t\t\t\t<div
\t\t\t\t\tclass=\"col-lg-6\">
\t\t\t\t\t<!-- Card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Chat Option</h4>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"chat-box scrollable\" style=\"height:475px;\">
\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\tclass=\"chat-list\">
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-img\"><img src=\"../../../assets/images/users/1.jpg\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">James Anderson</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-info\">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">10:56 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-img\"><img src=\"../../../assets/images/users/2.jpg\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Bianca Doe</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-info\">It’s Great opportunity to work.</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">10:57 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"odd chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-inverse\">I would love to join the team.</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"odd chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-inverse\">Whats budget of the new project.</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">10:59 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-img\"><img src=\"../../../assets/images/users/3.jpg\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Angelina Rhodes</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-info\">Well we have good budget for the project</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">11:00 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body border-top\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field m-t-0 m-b-0\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"textarea1\" placeholder=\"Type and enter\" class=\"form-control border-0\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t<a class=\"btn-circle btn-lg btn-cyan float-right text-white\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Our partner (Box with Fix height)</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"comment-widgets scrollable\" style=\"max-height: 130px;\">
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row m-t-0\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/1.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">James Anderson</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">April 14, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/4.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text active w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Michael Jorden</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">May 10, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/5.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Johnathan Doeting</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">August 1, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- accoridan part -->
\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t<div class=\"card m-b-0\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t<i class=\"m-r-5 fa fa-magnet\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Accordion Example 1</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card m-b-0 border-top\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t\t\t\t<i class=\"m-r-5 fa fa-magnet\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Accordion Example 2</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card m-b-0 border-top\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingThree\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\t\t\t<i class=\"m-r-5 fa fa-magnet\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Accordion Example 3</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- toggle part -->
\t\t\t\t\t<div id=\"accordian-4\">
\t\t\t\t\t\t<div class=\"card m-t-30\">
\t\t\t\t\t\t\t<a class=\"card-header link\" data-toggle=\"collapse\" data-parent=\"#accordian-4\" href=\"#Toggle-1\" aria-expanded=\"true\" aria-controls=\"Toggle-1\">
\t\t\t\t\t\t\t\t<i class=\"seticon fa fa-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>Toggle, Open by default</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"Toggle-1\" class=\"collapse show multi-collapse\">
\t\t\t\t\t\t\t\t<div class=\"card-body widget-content\">
\t\t\t\t\t\t\t\t\tThis box is opened by default, paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"card-header link border-top\" data-toggle=\"collapse\" data-parent=\"#accordian-4\" href=\"#Toggle-2\" aria-expanded=\"false\" aria-controls=\"Toggle-2\">
\t\t\t\t\t\t\t\t<i class=\"seticon fa fa-times\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>Toggle, Closed by default</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"Toggle-2\" class=\"multi-collapse collapse\" style=\"\">
\t\t\t\t\t\t\t\t<div class=\"card-body widget-content\">
\t\t\t\t\t\t\t\t\tThis box is now open
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"card-header collapsed link border-top\" data-toggle=\"collapse\" data-parent=\"#accordian-4\" href=\"#Toggle-3\" aria-expanded=\"false\" aria-controls=\"Toggle-3\">
\t\t\t\t\t\t\t\t<i class=\"seticon fa fa-times\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>Toggle, Closed by default</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"Toggle-3\" class=\"collapse multi-collapse\">
\t\t\t\t\t\t\t\t<div class=\"card-body widget-content\">
\t\t\t\t\t\t\t\t\tThis box is now open
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Tabs -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs-down\">Tab1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs-down\">Tab2</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs-down\">Tab3</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t<p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/background/img4.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane  p-20\" id=\"profile\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/background/img4.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<p class=\"m-t-10\">And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane p-20\" id=\"messages\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t<p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/background/img4.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t<!-- Recent comment and chats -->
\t\t\t<!-- ============================================================== -->
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- End Container fluid  -->
\t\t<!-- ============================================================== -->
\t\t<!-- ============================================================== -->
\t\t<!-- footer -->
\t\t<!-- ============================================================== -->
\t\t\t<footer class=\"footer text-center\"> All Rights Reserved by Matrix-admin. Designed and Developed by
\t\t\t<a href=\"https://wrappixel.com\">WrapPixel</a>.
\t\t</footer>
\t\t<!-- ============================================================== -->
\t<!-- End footer -->
\t\t<!-- ============================================================== -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-back.html.twig\" %}

{% block title %}
\tAdmin Dashboard
{% endblock %}

{% block pagewrapper %}
\t\t<!-- ============================================================== -->
\t\t<!-- Bread crumb and right sidebar toggle -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"page-breadcrumb\"> <div class=\"row\">
\t\t\t\t<div class=\"col-12 d-flex no-block align-items-center\">
\t\t\t\t\t<h4 class=\"page-title\">Dashboard</h4>
\t\t\t\t\t<div class=\"ml-auto text-right\">
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- End Bread crumb and right sidebar toggle -->
\t\t<!-- ============================================================== -->
\t\t<!-- ============================================================== -->
\t\t<!-- Container fluid  -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"container-fluid\"> <!-- ============================================================== -->
\t\t\t<!-- Sales Cards  -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div
\t\t\t\tclass=\"row\"> <!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-cyan text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Dashboard</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-4 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-success text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chart-areaspline\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Charts</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-warning text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-collage\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Widgets</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-danger text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-border-outside\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Tables</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-info text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-all\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Full Width</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-4 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-danger text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-receipt\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Forms</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-info text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-relative-scale\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Buttons</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-cyan text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-pencil\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Elements</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-success text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar-check\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Calnedar</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-6 col-lg-2 col-xlg-3\">
\t\t\t\t\t<div class=\"card card-hover\">
\t\t\t\t\t\t<div class=\"box bg-warning text-center\">
\t\t\t\t\t\t\t<h1 class=\"font-light text-white\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-alert\"></i>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h6 class=\"text-white\">Errors</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Column -->
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Sales chart -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"row\"> <div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"d-md-flex align-items-center\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Site Analysis</h4>
\t\t\t\t\t\t\t\t\t<h5 class=\"card-subtitle\">Overview of Latest Month</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- column -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t<div class=\"flot-chart\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flot-chart-content\" id=\"flot-line-chart\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">2540</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Total Users</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">New Users</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">656</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Total Shop</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tag m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">9540</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Total Orders</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">100</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Pending Orders</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 m-t-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-dark p-10 text-white text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe m-b-5 font-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-b-0 m-t-5\">8540</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-light\">Online Orders</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- column -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Sales chart -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Recent comment and chats -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div
\t\t\t\tclass=\"row\"> <!-- column -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Latest Posts</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"comment-widgets scrollable\">
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row m-t-0\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/1.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Testtttttttttttt</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">April 14, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/4.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text active w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Michael Jorden</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">May 10, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/5.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Johnathan Doeting</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">August 1, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">To Do List</h4>
\t\t\t\t\t\t\t<div class=\"todo-widget scrollable\" style=\"height:450px;\">
\t\t\t\t\t\t\t\t<ul class=\"list-task todo-list list-group m-b-0\" data-role=\"tasklist\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-danger float-right\">Today</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none assignedto\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/1.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Steave\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/2.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Jessica\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/3.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Priyanka\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/4.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Selina\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Lorem Ipsum is simply dummy text of the printing</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-primary float-right\">1 week
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-date\">
\t\t\t\t\t\t\t\t\t\t\t26 jun 2017</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Give Purchase report to</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-info float-right\">Yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none assignedto\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/3.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Priyanka\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/4.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Selina\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Lorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-warning float-right\">2 weeks</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-date\">
\t\t\t\t\t\t\t\t\t\t\t26 jun 2017</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item todo-item\" data-role=\"task\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label todo-label\" for=\"customCheck4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"todo-desc\">Give Purchase report to</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-pill badge-info float-right\">Yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none assignedto\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/3.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Priyanka\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"assignee\"><img class=\"rounded-circle\" width=\"40\" src=\"../../../assets/images/users/4.jpg\" alt=\"user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Selina\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title m-b-0\">Progress Box</h4>
\t\t\t\t\t\t\t<div class=\"m-t-20\">
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center\">
\t\t\t\t\t\t\t\t\t<span>81% Clicks</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>125</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 81%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center m-t-25\">
\t\t\t\t\t\t\t\t\t<span>72% Uniquie Clicks</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>120</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center m-t-25\">
\t\t\t\t\t\t\t\t\t<span>53% Impressions</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>785</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-info\" role=\"progressbar\" style=\"width: 53%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center m-t-25\">
\t\t\t\t\t\t\t\t\t<span>3% Online Users</span>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<span>8</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-danger\" role=\"progressbar\" style=\"width: 3%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- card new -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title m-b-0\">News Updates</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-style-none\">
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">dolor sit amet, consectetur adipiscing</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">20</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-gift w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Congratulation Maruti, Happy Birthday</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">many many happy returns of the day</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">11</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Maruti is a Responsive Admin theme</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">But already everything was solved. It will ...</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">19</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-leaf w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">Envato approved Maruti Admin template</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">i am very happy to approved by TF</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">20</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"d-flex no-block card-body border-top\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle w-30px m-t-5\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-b-0 font-medium p-0\">
\t\t\t\t\t\t\t\t\t\tI am alwayse here if you have any question</a>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">we glad that you choose our template</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"tetx-right\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-muted m-b-0\">15</h5>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-16\">Jan</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- column -->

\t\t\t\t<div
\t\t\t\t\tclass=\"col-lg-6\">
\t\t\t\t\t<!-- Card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Chat Option</h4>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"chat-box scrollable\" style=\"height:475px;\">
\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\tclass=\"chat-list\">
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-img\"><img src=\"../../../assets/images/users/1.jpg\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">James Anderson</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-info\">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">10:56 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-img\"><img src=\"../../../assets/images/users/2.jpg\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Bianca Doe</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-info\">It’s Great opportunity to work.</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">10:57 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"odd chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-inverse\">I would love to join the team.</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"odd chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-inverse\">Whats budget of the new project.</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">10:59 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t\t<li class=\"chat-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-img\"><img src=\"../../../assets/images/users/3.jpg\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Angelina Rhodes</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box bg-light-info\">Well we have good budget for the project</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-time\">11:00 am</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!--chat Row -->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body border-top\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field m-t-0 m-b-0\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"textarea1\" placeholder=\"Type and enter\" class=\"form-control border-0\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t<a class=\"btn-circle btn-lg btn-cyan float-right text-white\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Our partner (Box with Fix height)</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"comment-widgets scrollable\" style=\"max-height: 130px;\">
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row m-t-0\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/1.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">James Anderson</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">April 14, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/4.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text active w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Michael Jorden</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">May 10, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comment Row -->
\t\t\t\t\t\t\t<div class=\"d-flex flex-row comment-row\">
\t\t\t\t\t\t\t\t<div class=\"p-2\"><img src=\"../../../assets/images/users/5.jpg\" alt=\"user\" width=\"50\" class=\"rounded-circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"comment-text w-100\">
\t\t\t\t\t\t\t\t\t<h6 class=\"font-medium\">Johnathan Doeting</h6>
\t\t\t\t\t\t\t\t\t<span class=\"m-b-15 d-block\">Lorem Ipsum is simply dummy text of the printing and type setting industry.
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-right\">August 1, 2016</span>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-cyan btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Publish</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- accoridan part -->
\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t<div class=\"card m-b-0\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t<i class=\"m-r-5 fa fa-magnet\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Accordion Example 1</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card m-b-0 border-top\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t\t\t\t<i class=\"m-r-5 fa fa-magnet\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Accordion Example 2</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card m-b-0 border-top\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingThree\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\t\t\t<i class=\"m-r-5 fa fa-magnet\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Accordion Example 3</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\tAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- toggle part -->
\t\t\t\t\t<div id=\"accordian-4\">
\t\t\t\t\t\t<div class=\"card m-t-30\">
\t\t\t\t\t\t\t<a class=\"card-header link\" data-toggle=\"collapse\" data-parent=\"#accordian-4\" href=\"#Toggle-1\" aria-expanded=\"true\" aria-controls=\"Toggle-1\">
\t\t\t\t\t\t\t\t<i class=\"seticon fa fa-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>Toggle, Open by default</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"Toggle-1\" class=\"collapse show multi-collapse\">
\t\t\t\t\t\t\t\t<div class=\"card-body widget-content\">
\t\t\t\t\t\t\t\t\tThis box is opened by default, paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"card-header link border-top\" data-toggle=\"collapse\" data-parent=\"#accordian-4\" href=\"#Toggle-2\" aria-expanded=\"false\" aria-controls=\"Toggle-2\">
\t\t\t\t\t\t\t\t<i class=\"seticon fa fa-times\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>Toggle, Closed by default</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"Toggle-2\" class=\"multi-collapse collapse\" style=\"\">
\t\t\t\t\t\t\t\t<div class=\"card-body widget-content\">
\t\t\t\t\t\t\t\t\tThis box is now open
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"card-header collapsed link border-top\" data-toggle=\"collapse\" data-parent=\"#accordian-4\" href=\"#Toggle-3\" aria-expanded=\"false\" aria-controls=\"Toggle-3\">
\t\t\t\t\t\t\t\t<i class=\"seticon fa fa-times\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>Toggle, Closed by default</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"Toggle-3\" class=\"collapse multi-collapse\">
\t\t\t\t\t\t\t\t<div class=\"card-body widget-content\">
\t\t\t\t\t\t\t\t\tThis box is now open
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Tabs -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs-down\">Tab1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs-down\">Tab2</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs-down\">Tab3</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t<p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/background/img4.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane  p-20\" id=\"profile\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/background/img4.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<p class=\"m-t-10\">And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane p-20\" id=\"messages\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t<p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/background/img4.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t<!-- Recent comment and chats -->
\t\t\t<!-- ============================================================== -->
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- End Container fluid  -->
\t\t<!-- ============================================================== -->
\t\t<!-- ============================================================== -->
\t\t<!-- footer -->
\t\t<!-- ============================================================== -->
\t\t\t<footer class=\"footer text-center\"> All Rights Reserved by Matrix-admin. Designed and Developed by
\t\t\t<a href=\"https://wrappixel.com\">WrapPixel</a>.
\t\t</footer>
\t\t<!-- ============================================================== -->
\t<!-- End footer -->
\t\t<!-- ============================================================== -->
{% endblock %}
", "back/admin.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\back\\admin.html.twig");
    }
}
