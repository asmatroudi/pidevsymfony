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

/* base-back.html.twig */
class __TwigTemplate_1411b0e6560eabe496d80bbd8ee4f167 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagewrapper' => [$this, 'block_pagewrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<!-- Tell the browser to be responsive to screen width -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"keywords\" content=\"wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template\">
\t\t<meta name=\"description\" content=\"Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework\">
\t\t<meta name=\"robots\" content=\"noindex,nofollow\">
\t\t<title>
\t\t\t";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "\t\t</title>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t<!-- Favicon icon -->
\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../../assets/images/favicon.png\">
\t\t<!-- Custom CSS -->
\t\t<link
\t\thref=\"../../../assets/libs/flot/css/float-chart.css\" rel=\"stylesheet\">
\t\t<!-- Custom CSS -->
\t\t<link href=\"../../../dist/css/style.min.css\" rel=\"stylesheet\">
\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t\t    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t\t    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t\t<![endif]-->
\t</head>

\t<body>
\t\t<!-- ============================================================== -->
\t\t<!-- Preloader - style you can find in spinners.css -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"preloader\"> <div class=\"lds-ripple\">
\t\t\t\t<div class=\"lds-pos\"></div>
\t\t\t\t<div class=\"lds-pos\"></div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- Main wrapper - style you can find in pages.scss -->
\t\t<!-- ============================================================== -->
\t\t\t<div id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin5\" data-sidebartype=\"full\" data-sidebar-position=\"absolute\" data-header-position=\"absolute\" data-boxed-layout=\"full\"> <!-- ============================================================== -->
\t\t\t<!-- Topbar header - style you can find in pages.scss -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<header class=\"topbar\" data-navbarbg=\"skin5\"> <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
\t\t\t\t\t<div class=\"navbar-header\" data-logobg=\"skin5\">

\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\tclass=\"navbar-brand\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"> <!-- Logo icon -->
\t\t\t\t\t\t\t<b class=\"logo-icon ps-2\">
\t\t\t\t\t\t\t\t<!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
\t\t\t\t\t\t\t\t<!-- Dark Logo icon -->
\t\t\t\t\t\t\t<img src=\"\" class=\"light-logo\"/> </b>
\t\t\t\t\t\t\t<!--End Logo icon -->
\t\t\t\t\t\t\t<!-- Logo text -->
\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\tclass=\"logo-text\">
\t\t\t\t\t\t\t\t<!-- dark Logo text -->
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/logotounesna.png\" alt=\"homepage\" class=\"light-logo\" style=\"height: 80px; width: 180px;\"/>

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<!-- Logo icon -->
\t\t\t\t\t\t<!-- <b class=\"logo-icon\"> -->
\t\t\t\t\t\t\t<!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
\t\t\t\t\t\t\t<!-- Dark Logo icon -->
\t\t\t\t\t\t\t<!-- <img src=\"../../../assets/images/logotounesna.png\" alt=\"homepage\" class=\"light-logo\" /> -->

\t\t\t\t\t\t\t<!-- </b> -->
\t\t\t\t\t\t\t<!--End Logo icon -->
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- End Logo -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- Toggle which is visible on mobile only -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"> <i class=\"ti-menu ti-close\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t<!-- End Logo -->
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\"> <!-- ============================================================== -->
\t\t\t\t\t\t<!-- toggle and nav items -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<ul class=\"navbar-nav float-start me-auto\"> <li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a class=\"nav-link sidebartoggler waves-effect waves-light\" href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu font-24\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- create new -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block\">Create New
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"d-block d-md-none\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item search-box\"> <a class=\"nav-link waves-effect waves-dark\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<form class=\"app-search position-absolute\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\">
\t\t\t\t\t\t\t\t\t<a class=\"srh-btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- Right side toggle and nav items -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<ul class=\"navbar-nav float-end\"> <!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- Comment -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-bell font-24\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- End Comment -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- Messages -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" id=\"2\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"font-24 mdi mdi-comment-processing\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end mailbox animated bounceInDown\" aria-labelledby=\"2\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Event today</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">Just a reminder that event</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-info btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Settings</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">You can customize this template</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Pavan kumar</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">Just see the my admin!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Luanch Admin</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">Just see the my new admin!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- End Messages -->
\t\t\t\t\t\t\t<!-- ============================================================== -->

\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- User profile and search -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/users/1.jpg\" alt=\"user\" class=\"rounded-circle\" width=\"31\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end user-dd animated\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tMy Profile</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-wallet me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tMy Balance</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-email me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tInbox</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-settings me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tAccount Setting</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tLogout</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ps-4 p-10\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-success btn-rounded text-white\">View Profile</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- User profile and search -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Topbar header -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Left Sidebar - style you can find in sidebar.scss  -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<aside
\t\t\t\tclass=\"left-sidebar\" data-sidebarbg=\"skin5\"> <!-- Sidebar scroll-->
\t\t\t\t<div
\t\t\t\t\tclass=\"scroll-sidebar\">
\t\t\t\t\t<!-- Sidebar navigation-->
\t\t\t\t\t<nav class=\"sidebar-nav\">
\t\t\t\t\t\t<ul id=\"sidebarnav\" class=\"pt-4\">
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Dashboard</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gouvernorat_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Gouvernorats</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Hotels</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 298
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commentaire_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Commentaires Hotels</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rate_hotel_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Ratings Hotels</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Evenements</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 316
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activities_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Activités</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 322
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Produits</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 328
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commande_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Commandes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
        // line 334
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_plat_index");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Plats</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End Sidebar navigation -->
\t\t\t\t</div>
\t\t\t\t<!-- End Sidebar scroll-->
\t\t\t</aside>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Left Sidebar - style you can find in sidebar.scss  -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Page wrapper  -->
\t\t\t<!-- ============================================================== -->

\t\t\t\t<div style=\"padding: 40px;\" class=\"page-wrapper\">";
        // line 352
        $this->displayBlock('pagewrapper', $context, $blocks);
        echo " </div>
\t\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Page wrapper  -->
\t\t\t\t<!-- ============================================================== -->
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Wrapper -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- All Jquery -->
\t\t\t<!-- ============================================================== --><script src=\"../../../assets/libs/jquery/dist/jquery.min.js\"> </script>
\t\t\t<!-- Bootstrap tether Core JavaScript -->
\t\t\t<script src=\"../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
\t\t\t<script src=\"../../../assets/extra-libs/sparkline/sparkline.js\"></script>
\t\t\t<!--Wave Effects -->
\t\t\t<script src=\"../../../dist/js/waves.js\"></script>
\t\t\t<!--Menu sidebar -->
\t\t\t<script src=\"../../../dist/js/sidebarmenu.js\"></script>
\t\t\t<!--Custom JavaScript -->
\t\t\t<script src=\"../../../dist/js/custom.min.js\"></script>
\t\t\t<!--This page JavaScript -->
\t\t\t<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
\t\t\t<!-- Charts js Files --><script src=\"../../../assets/libs/flot/excanvas.js\"> </script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.pie.js\"></script>
\t\t\t<script src=\"../../assets/libs/flot/jquery.flot.time.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.stack.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.crosshair.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js\"></script>
\t\t\t<script src=\"../../../dist/js/pages/chart/chart-page-init.js\"></script>

\t\t</body>

\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 352
    public function block_pagewrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagewrapper"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 352,  474 => 14,  431 => 352,  410 => 334,  401 => 328,  392 => 322,  383 => 316,  374 => 310,  365 => 304,  356 => 298,  347 => 292,  338 => 286,  329 => 280,  102 => 56,  59 => 15,  57 => 14,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<!-- Tell the browser to be responsive to screen width -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"keywords\" content=\"wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template\">
\t\t<meta name=\"description\" content=\"Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework\">
\t\t<meta name=\"robots\" content=\"noindex,nofollow\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t<!-- Favicon icon -->
\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../../assets/images/favicon.png\">
\t\t<!-- Custom CSS -->
\t\t<link
\t\thref=\"../../../assets/libs/flot/css/float-chart.css\" rel=\"stylesheet\">
\t\t<!-- Custom CSS -->
\t\t<link href=\"../../../dist/css/style.min.css\" rel=\"stylesheet\">
\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t\t    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t\t    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t\t<![endif]-->
\t</head>

\t<body>
\t\t<!-- ============================================================== -->
\t\t<!-- Preloader - style you can find in spinners.css -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"preloader\"> <div class=\"lds-ripple\">
\t\t\t\t<div class=\"lds-pos\"></div>
\t\t\t\t<div class=\"lds-pos\"></div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- Main wrapper - style you can find in pages.scss -->
\t\t<!-- ============================================================== -->
\t\t\t<div id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin5\" data-sidebartype=\"full\" data-sidebar-position=\"absolute\" data-header-position=\"absolute\" data-boxed-layout=\"full\"> <!-- ============================================================== -->
\t\t\t<!-- Topbar header - style you can find in pages.scss -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<header class=\"topbar\" data-navbarbg=\"skin5\"> <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
\t\t\t\t\t<div class=\"navbar-header\" data-logobg=\"skin5\">

\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\tclass=\"navbar-brand\" href=\"{{ path('admin') }}\"> <!-- Logo icon -->
\t\t\t\t\t\t\t<b class=\"logo-icon ps-2\">
\t\t\t\t\t\t\t\t<!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
\t\t\t\t\t\t\t\t<!-- Dark Logo icon -->
\t\t\t\t\t\t\t<img src=\"\" class=\"light-logo\"/> </b>
\t\t\t\t\t\t\t<!--End Logo icon -->
\t\t\t\t\t\t\t<!-- Logo text -->
\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\tclass=\"logo-text\">
\t\t\t\t\t\t\t\t<!-- dark Logo text -->
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/logotounesna.png\" alt=\"homepage\" class=\"light-logo\" style=\"height: 80px; width: 180px;\"/>

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<!-- Logo icon -->
\t\t\t\t\t\t<!-- <b class=\"logo-icon\"> -->
\t\t\t\t\t\t\t<!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
\t\t\t\t\t\t\t<!-- Dark Logo icon -->
\t\t\t\t\t\t\t<!-- <img src=\"../../../assets/images/logotounesna.png\" alt=\"homepage\" class=\"light-logo\" /> -->

\t\t\t\t\t\t\t<!-- </b> -->
\t\t\t\t\t\t\t<!--End Logo icon -->
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- End Logo -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- Toggle which is visible on mobile only -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"> <i class=\"ti-menu ti-close\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t<!-- End Logo -->
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\"> <!-- ============================================================== -->
\t\t\t\t\t\t<!-- toggle and nav items -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<ul class=\"navbar-nav float-start me-auto\"> <li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a class=\"nav-link sidebartoggler waves-effect waves-light\" href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu font-24\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- create new -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block\">Create New
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"d-block d-md-none\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item search-box\"> <a class=\"nav-link waves-effect waves-dark\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<form class=\"app-search position-absolute\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\">
\t\t\t\t\t\t\t\t\t<a class=\"srh-btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- Right side toggle and nav items -->
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<ul class=\"navbar-nav float-end\"> <!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- Comment -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-bell font-24\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- End Comment -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- Messages -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" id=\"2\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"font-24 mdi mdi-comment-processing\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end mailbox animated bounceInDown\" aria-labelledby=\"2\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-style-none\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Event today</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">Just a reminder that event</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-info btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Settings</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">You can customize this template</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Pavan kumar</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">Just see the my admin!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex no-block align-items-center p-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Luanch Admin</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mail-desc\">Just see the my new admin!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- End Messages -->
\t\t\t\t\t\t\t<!-- ============================================================== -->

\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t<!-- User profile and search -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/users/1.jpg\" alt=\"user\" class=\"rounded-circle\" width=\"31\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end user-dd animated\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tMy Profile</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-wallet me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tMy Balance</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-email me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tInbox</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-settings me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tAccount Setting</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off me-1 ms-1\"></i>
\t\t\t\t\t\t\t\t\t\tLogout</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ps-4 p-10\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-success btn-rounded text-white\">View Profile</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- User profile and search -->
\t\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Topbar header -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Left Sidebar - style you can find in sidebar.scss  -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<aside
\t\t\t\tclass=\"left-sidebar\" data-sidebarbg=\"skin5\"> <!-- Sidebar scroll-->
\t\t\t\t<div
\t\t\t\t\tclass=\"scroll-sidebar\">
\t\t\t\t\t<!-- Sidebar navigation-->
\t\t\t\t\t<nav class=\"sidebar-nav\">
\t\t\t\t\t\t<ul id=\"sidebarnav\" class=\"pt-4\">
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Dashboard</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_gouvernorat_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Gouvernorats</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_hotel_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Hotels</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_commentaire_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Commentaires Hotels</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_rate_hotel_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Ratings Hotels</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_evenement_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Evenements</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_activities_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Activités</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_produit_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Produits</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_commande_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Commandes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('admin_plat_index') }}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hide-menu\">Plats</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End Sidebar navigation -->
\t\t\t\t</div>
\t\t\t\t<!-- End Sidebar scroll-->
\t\t\t</aside>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Left Sidebar - style you can find in sidebar.scss  -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Page wrapper  -->
\t\t\t<!-- ============================================================== -->

\t\t\t\t<div style=\"padding: 40px;\" class=\"page-wrapper\">{% block pagewrapper %}{% endblock %} </div>
\t\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Page wrapper  -->
\t\t\t\t<!-- ============================================================== -->
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- End Wrapper -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- All Jquery -->
\t\t\t<!-- ============================================================== --><script src=\"../../../assets/libs/jquery/dist/jquery.min.js\"> </script>
\t\t\t<!-- Bootstrap tether Core JavaScript -->
\t\t\t<script src=\"../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
\t\t\t<script src=\"../../../assets/extra-libs/sparkline/sparkline.js\"></script>
\t\t\t<!--Wave Effects -->
\t\t\t<script src=\"../../../dist/js/waves.js\"></script>
\t\t\t<!--Menu sidebar -->
\t\t\t<script src=\"../../../dist/js/sidebarmenu.js\"></script>
\t\t\t<!--Custom JavaScript -->
\t\t\t<script src=\"../../../dist/js/custom.min.js\"></script>
\t\t\t<!--This page JavaScript -->
\t\t\t<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
\t\t\t<!-- Charts js Files --><script src=\"../../../assets/libs/flot/excanvas.js\"> </script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.pie.js\"></script>
\t\t\t<script src=\"../../assets/libs/flot/jquery.flot.time.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.stack.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot/jquery.flot.crosshair.js\"></script>
\t\t\t<script src=\"../../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js\"></script>
\t\t\t<script src=\"../../../dist/js/pages/chart/chart-page-init.js\"></script>

\t\t</body>

\t</html>
", "base-back.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\samar group\\last version\\tounesna\\templates\\base-back.html.twig");
    }
}
